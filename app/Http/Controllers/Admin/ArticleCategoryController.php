<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ArticleCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ArticleCategoryController extends Controller
{
    public function index(): View
    {
        return view('admin.article-categories.index', [
            'categories' => ArticleCategory::query()->withCount('articles')->orderBy('name')->paginate(10),
        ]);
    }

    public function create(): View
    {
        return view('admin.article-categories.create', ['category' => new ArticleCategory()]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate(['name' => ['required', 'string', 'max:255', 'unique:article_categories,name']]);
        $validated['slug'] = $this->uniqueSlug($validated['name']);

        ArticleCategory::query()->create($validated);

        return redirect()->route('admin.article-categories.index')->with('success', 'Category created.');
    }

    public function edit(ArticleCategory $articleCategory): View
    {
        return view('admin.article-categories.edit', ['category' => $articleCategory]);
    }

    public function update(Request $request, ArticleCategory $articleCategory): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:article_categories,name,'.$articleCategory->id],
        ]);
        $validated['slug'] = $this->uniqueSlug($validated['name'], $articleCategory);

        $articleCategory->update($validated);

        return redirect()->route('admin.article-categories.index')->with('success', 'Category updated.');
    }

    public function destroy(ArticleCategory $articleCategory): RedirectResponse
    {
        if ($articleCategory->articles()->exists()) {
            return back()->withErrors(['category' => 'Move or delete this category’s articles before deleting the category.']);
        }

        $articleCategory->delete();

        return redirect()->route('admin.article-categories.index')->with('success', 'Category deleted.');
    }

    private function uniqueSlug(string $name, ?ArticleCategory $category = null): string
    {
        $baseSlug = Str::slug($name) ?: 'category';
        $slug = $baseSlug;
        $suffix = 2;

        while (ArticleCategory::query()->where('slug', $slug)->when($category, fn ($query) => $query->where('id', '!=', $category->getKey()))->exists()) {
            $slug = $baseSlug.'-'.$suffix;
            $suffix++;
        }

        return $slug;
    }
}
