@extends('layouts.admin')

@section('title', 'Article categories')

@section('content')
    <div class="flex flex-wrap items-center justify-between gap-4">
        <div>
            <h1 class="font-heading text-2xl font-extrabold tracking-tight text-brand">Article categories</h1>
            <p class="mt-1 text-sm text-secondary-text/70">Organize articles into categories.</p>
        </div>
        <a href="{{ route('admin.article-categories.create') }}" class="rounded bg-brand px-4 py-2.5 text-sm font-semibold text-secondary-surface hover:bg-brand/90">New category</a>
    </div>

    @if (session('success'))
        <div class="mt-6 rounded-lg border border-brand-bright/50 bg-secondary-soft px-4 py-3 text-sm text-brand">{{ session('success') }}</div>
    @endif
    @error('category')
        <div class="mt-6 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800">{{ $message }}</div>
    @enderror

    <div class="mt-6 overflow-hidden rounded-md border border-brand/10 bg-white">
        <table class="w-full text-left text-sm">
            <thead class="bg-secondary-surface text-xs uppercase tracking-wide text-secondary-text/60">
                <tr><th class="px-5 py-3 font-medium">Name</th><th class="px-5 py-3 font-medium">Articles</th><th class="px-5 py-3 text-right font-medium">Actions</th></tr>
            </thead>
            <tbody class="divide-y divide-brand/10">
                @forelse ($categories as $category)
                    <tr>
                        <td class="px-5 py-4 font-medium text-brand">{{ $category->name }}</td>
                        <td class="px-5 py-4 text-secondary-text/70">{{ $category->articles_count }}</td>
                        <td class="px-5 py-4">
                            <div class="flex justify-end gap-3">
                                <a href="{{ route('admin.article-categories.edit', $category) }}" class="font-medium text-brand hover:underline">Edit</a>
                                <form method="POST" action="{{ route('admin.article-categories.destroy', $category) }}" onsubmit="return confirm('Delete this category?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="font-medium text-red-700 hover:underline">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="3" class="px-5 py-12 text-center text-sm text-secondary-text/60">No categories yet.</td></tr>
                @endforelse
            </tbody>
        </table>
        @if ($categories->hasPages())
            <div class="border-t border-brand/10 px-5 py-4">{{ $categories->links() }}</div>
        @endif
    </div>
@endsection
