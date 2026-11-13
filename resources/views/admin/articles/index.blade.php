@extends('layouts.admin')

@section('title', 'Articles')

@section('content')
    <div class="flex flex-wrap items-center justify-between gap-4">
        <div>
            <h1 class="font-heading text-2xl font-extrabold tracking-tight text-brand">Articles</h1>
        </div>
        <a href="{{ route('admin.articles.create') }}" class="rounded bg-brand px-4 py-2.5 text-sm font-semibold text-secondary-surface hover:bg-brand/90">New article</a>
    </div>

    @if (session('success'))
        <div class="mt-6 rounded-lg border border-brand-bright/50 bg-secondary-soft px-4 py-3 text-sm text-brand">{{ session('success') }}</div>
    @endif

    <div class="mt-6 overflow-hidden rounded-md border border-brand/10 bg-white">
        <div class="overflow-x-auto">
            <table class="w-full min-w-[720px] text-left text-sm">
                <thead class="bg-secondary-surface text-xs uppercase tracking-wide text-secondary-text/60">
                    <tr>
                        <th class="px-5 py-3 font-medium">Article</th>
                        <th class="px-5 py-3 font-medium">Category</th>
                        <th class="px-5 py-3 font-medium">Status</th>
                        <th class="px-5 py-3 font-medium">Updated</th>
                        <th class="px-5 py-3 text-right font-medium">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-brand/10">
                    @forelse ($articles as $article)
                        <tr>
                            <td class="px-5 py-4">
                                <div class="flex items-center gap-3">
                                    @if ($article->image)
                                        <img src="{{ asset('storage/'.$article->image) }}" alt="" class="size-12 rounded-lg object-cover">
                                    @else
                                        <div class="size-12 rounded-lg bg-secondary-soft"></div>
                                    @endif
                                    <div class="min-w-0">
                                        <p class="truncate font-medium text-brand">{{ $article->title }}</p>
                                        <p class="mt-1 max-w-sm truncate text-xs text-secondary-text/60">{{ $article->short_content }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-5 py-4 text-secondary-text/75">{{ $article->category->name }}</td>
                            <td class="px-5 py-4">
                                <span @class([
                                    'rounded-full px-2.5 py-1 text-xs font-medium',
                                    'bg-secondary-soft text-brand' => $article->status === 'published',
                                    'bg-slate-100 text-slate-600' => $article->status === 'draft',
                                ])>{{ $article->status === 'published' ? 'Publish' : 'Draft' }}</span>
                            </td>
                            <td class="px-5 py-4 text-secondary-text/60">{{ $article->updated_at->format('M j, Y') }}</td>
                            <td class="px-5 py-4">
                                <div class="flex justify-end gap-3">
                                    <a href="{{ route('admin.articles.edit', $article) }}" class="font-medium text-brand hover:underline">Edit</a>
                                    <form method="POST" action="{{ route('admin.articles.duplicate', $article) }}">
                                        @csrf
                                        <button type="submit" class="font-medium text-brand hover:underline">Duplicate</button>
                                    </form>
                                    <form method="POST" action="{{ route('admin.articles.destroy', $article) }}" onsubmit="return confirm('Delete this article?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="font-medium text-red-700 hover:underline">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="5" class="px-5 py-12 text-center text-sm text-secondary-text/60">No articles yet.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if ($articles->hasPages())
            <div class="border-t border-brand/10 px-5 py-4">{{ $articles->links() }}</div>
        @endif
    </div>
@endsection
