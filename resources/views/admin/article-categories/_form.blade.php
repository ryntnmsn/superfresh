<form method="POST" action="{{ $category->exists ? route('admin.article-categories.update', $category) : route('admin.article-categories.store') }}" class="max-w-xl space-y-6 rounded-md border border-brand/10 bg-white p-6 shadow-sm">
    @csrf
    @if ($category->exists)
        @method('PUT')
    @endif

    <div>
        <label for="name" class="mb-2 block text-sm font-medium text-brand">Category name</label>
        <input id="name" name="name" value="{{ old('name', $category->name) }}" required maxlength="255" autofocus class="w-full rounded border border-brand/20 px-3.5 py-2.5 text-sm outline-none focus:border-brand-bright focus:ring-4 focus:ring-brand-bright/20">
        @error('name')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
    </div>

    <div class="flex justify-end gap-3 border-t border-brand/10 pt-5">
        <a href="{{ route('admin.article-categories.index') }}" class="rounded border border-brand/20 px-4 py-2.5 text-sm font-medium text-brand hover:bg-secondary-surface">Cancel</a>
        <button type="submit" class="rounded bg-brand px-4 py-2.5 text-sm font-semibold text-secondary-surface hover:bg-brand/90">{{ $category->exists ? 'Save changes' : 'Create category' }}</button>
    </div>
</form>
