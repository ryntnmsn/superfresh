<form method="POST" action="{{ $article->exists ? route('admin.articles.update', $article) : route('admin.articles.store') }}" enctype="multipart/form-data" class="max-w-4xl space-y-6 rounded-md border border-brand/10 bg-white p-6 shadow-sm">
    @csrf
    @if ($article->exists)
        @method('PUT')
    @endif

    @if ($errors->any())
        <div class="rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800">
            <p class="font-medium">Please review the highlighted fields.</p>
        </div>
    @endif

    <div>
        <label for="title" class="mb-2 block text-sm font-medium text-brand">Title</label>
        <input id="title" name="title" value="{{ old('title', $article->title) }}" required maxlength="255" class="w-full rounded border border-brand/20 px-3.5 py-2.5 text-sm outline-none focus:border-brand-bright focus:ring-4 focus:ring-brand-bright/20">
        @error('title')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
    </div>

    <div>
        <label for="article_category_id" class="mb-2 block text-sm font-medium text-brand">Article category</label>
        <select id="article_category_id" name="article_category_id" required class="w-full rounded border border-brand/20 bg-white px-3.5 py-2.5 text-sm outline-none focus:border-brand-bright focus:ring-4 focus:ring-brand-bright/20">
            <option value="">Select a category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" @selected(old('article_category_id', $article->article_category_id) == $category->id)>{{ $category->name }}</option>
            @endforeach
        </select>
        @if ($categories->isEmpty())
            <p class="mt-2 text-sm text-secondary-text/65">Create a category before adding an article. <a href="{{ route('admin.article-categories.create') }}" class="font-medium text-brand underline">Add category</a></p>
        @endif
        @error('article_category_id')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
    </div>

    <div>
        <label for="short_content" class="mb-2 block text-sm font-medium text-brand">Short content</label>
        <textarea id="short_content" name="short_content" rows="3" maxlength="1000" required class="w-full rounded border border-brand/20 px-3.5 py-2.5 text-sm outline-none focus:border-brand-bright focus:ring-4 focus:ring-brand-bright/20">{{ old('short_content', $article->short_content) }}</textarea>
        <p class="mt-1 text-xs text-secondary-text/60">A short summary shown in article lists.</p>
        @error('short_content')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
    </div>

    <div>
        <label class="mb-2 block text-sm font-medium text-brand" for="article-content-editor">Content</label>
        <div id="article-content-editor" data-quill-editor data-input="content" data-content="{{ old('content', $article->content) }}" class="min-h-64 rounded-b-lg bg-white"></div>
        <input type="hidden" id="content" name="content" value="{{ old('content', $article->content) }}">
        @error('content')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
    </div>

    <div>
        <label for="image" class="mb-2 block text-sm font-medium text-brand">Image <span class="font-normal text-secondary-text/60">(optional, max 5 MB)</span></label>
        <img
            id="article-image-preview"
            src="{{ $article->image ? asset('storage/'.$article->image) : '' }}"
            alt="Article image preview"
            @if (! $article->image) hidden @endif
            class="mb-3 max-h-64 w-auto max-w-full rounded-lg border border-brand/10 object-contain"
        >
        <input id="image" name="image" type="file" accept="image/*" data-preview-target="article-image-preview" class="block w-full text-sm text-secondary-text file:mr-4 file:rounded file:border-0 file:bg-secondary-soft file:px-4 file:py-2 file:font-medium file:text-brand hover:file:bg-secondary-soft/80">
        @error('image')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
    </div>

    <div>
        <label for="status" class="mb-2 block text-sm font-medium text-brand">Status</label>
        <select id="status" name="status" required class="w-full rounded border border-brand/20 bg-white px-3.5 py-2.5 text-sm outline-none focus:border-brand-bright focus:ring-4 focus:ring-brand-bright/20 sm:max-w-xs">
            <option value="draft" @selected(old('status', $article->status ?: 'draft') === 'draft')>Draft</option>
            <option value="published" @selected(old('status', $article->status) === 'published')>Publish</option>
        </select>
        @error('status')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
    </div>

    <div class="flex justify-end gap-3 border-t border-brand/10 pt-5">
        <a href="{{ route('admin.articles.index') }}" class="rounded border border-brand/20 px-4 py-2.5 text-sm font-medium text-brand hover:bg-secondary-surface">Cancel</a>
        <button type="submit" @disabled($categories->isEmpty()) class="rounded bg-brand px-4 py-2.5 text-sm font-semibold text-secondary-surface hover:bg-brand/90 disabled:cursor-not-allowed disabled:opacity-50">{{ $article->exists ? 'Save changes' : 'Create article' }}</button>
    </div>
</form>
