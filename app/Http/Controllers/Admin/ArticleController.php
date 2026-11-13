<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index(): View
    {
        return view('admin.articles.index', [
            'articles' => Article::query()->with('category')->latest()->paginate(10),
        ]);
    }

    public function create(): View
    {
        return view('admin.articles.create', [
            'article' => new Article(),
            'categories' => ArticleCategory::query()->orderBy('name')->get(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $this->validateArticle($request);
        $validated['slug'] = $this->uniqueSlug($validated['title']);
        $validated['image'] = $request->file('image')?->store('articles', 'public');

        Article::query()->create($validated);

        return redirect()->route('admin.articles.index')->with('success', 'Article created.');
    }

    public function edit(Article $article): View
    {
        return view('admin.articles.edit', [
            'article' => $article,
            'categories' => ArticleCategory::query()->orderBy('name')->get(),
        ]);
    }

    public function update(Request $request, Article $article): RedirectResponse
    {
        $validated = $this->validateArticle($request);
        $validated['slug'] = $this->uniqueSlug($validated['title'], $article);

        if ($request->hasFile('image')) {
            if ($article->image) {
                Storage::disk('public')->delete($article->image);
            }

            $validated['image'] = $request->file('image')->store('articles', 'public');
        }

        $article->update($validated);

        return redirect()->route('admin.articles.index')->with('success', 'Article updated.');
    }

    public function duplicate(Article $article): RedirectResponse
    {
        $duplicateTitle = mb_substr($article->title, 0, 248).' (copy)';
        $duplicate = $article->replicate(['slug', 'image', 'status']);
        $duplicate->title = $duplicateTitle;
        $duplicate->slug = $this->uniqueSlug($duplicateTitle);
        $duplicate->status = 'draft';

        if ($article->image && Storage::disk('public')->exists($article->image)) {
            $extension = pathinfo($article->image, PATHINFO_EXTENSION);
            $duplicateImage = 'articles/'.Str::uuid().($extension !== '' ? '.'.$extension : '');

            if (Storage::disk('public')->copy($article->image, $duplicateImage)) {
                $duplicate->image = $duplicateImage;
            }
        }

        $duplicate->save();

        return redirect()->route('admin.articles.index')->with('success', 'Article duplicated as a draft.');
    }

    public function destroy(Article $article): RedirectResponse
    {
        if ($article->image) {
            Storage::disk('public')->delete($article->image);
        }

        $article->delete();

        return redirect()->route('admin.articles.index')->with('success', 'Article deleted.');
    }

    /** @return array{title: string, article_category_id: int, short_content: string, content: string, image?: \Illuminate\Http\UploadedFile, status: string} */
    private function validateArticle(Request $request): array
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'article_category_id' => ['required', 'integer', 'exists:article_categories,id'],
            'short_content' => ['required', 'string', 'max:1000'],
            'content' => ['required', 'string'],
            'image' => ['nullable', 'image', 'max:5120'],
            'status' => ['required', 'in:draft,published'],
        ]);

        if (blank(trim(strip_tags($validated['content'])))) {
            throw ValidationException::withMessages(['content' => 'Write some article content before saving.']);
        }

        return $validated;
    }

    private function uniqueSlug(string $title, ?Article $article = null): string
    {
        $baseSlug = Str::slug($title) ?: 'article';
        $slug = $baseSlug;
        $suffix = 2;

        while (Article::query()->where('slug', $slug)->when($article, fn ($query) => $query->where('id', '!=', $article->getKey()))->exists()) {
            $slug = $baseSlug.'-'.$suffix;
            $suffix++;
        }

        return $slug;
    }
}
