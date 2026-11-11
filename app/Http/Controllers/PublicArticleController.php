<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\View\View;

class PublicArticleController extends Controller
{
    public function index(): View
    {
        return view('pages.tips-advies.index', [
            'articles' => Article::query()
                ->with('category')
                ->where('status', 'published')
                ->latest()
                ->paginate(9),
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
