<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PublicArticleController extends Controller
{
    public function index(Request $request): View
    {
        $selectedCategoryId = $request->integer('category') ?: null;

        return view('pages.tips-advies.index', [
            'articles' => Article::query()
                ->with('category')
                ->where('status', 'published')
                ->when($selectedCategoryId, fn (Builder $query): Builder => $query->where('article_category_id', $selectedCategoryId))
                ->latest()
                ->paginate(9)
                ->withQueryString(),
            'categories' => ArticleCategory::query()
                ->orderBy('name')
                ->get(),
            'selectedCategoryId' => $selectedCategoryId,
        ]);
    }

    public function show(Article $article): View
    {
        abort_unless($article->status === 'published', 404);

        $articleContent = preg_replace(
            '/<(?:br\s*\/?>|\/(?:p|div|h[1-6]|li|blockquote|section|article))[^>]*>/i',
            "\n",
            $article->content,
        );

        return view('pages.tips-advies.show', [
            'article' => $article->load('category'),
            'articleContent' => trim(html_entity_decode(strip_tags($articleContent ?? $article->content), ENT_QUOTES | ENT_HTML5, 'UTF-8')),
        ]);
    }
}
