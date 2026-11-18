@extends('layouts.site')

@section('title', $article->title)
@section('seo_title', $article->title.' | Superfresh tips & advies')
@section('meta_description', \Illuminate\Support\Str::limit(trim(strip_tags($article->short_content ?: $articleContent)), 160, ''))
@section('og_type', 'article')
@section('twitter_card', $article->image ? 'summary_large_image' : 'summary')
@section('social_image')
    @if ($article->image)
        <meta property="og:image" content="{{ asset('storage/'.$article->image) }}">
        <meta property="twitter:image" content="{{ asset('storage/'.$article->image) }}">
    @endif
@endsection
@section('structured_data')
    @php($articleStructuredData = [
        '@context' => 'https://schema.org',
        '@type' => 'Article',
        'headline' => $article->title,
        'description' => trim(strip_tags($article->short_content ?: $articleContent)),
        'image' => $article->image ? [asset('storage/'.$article->image)] : null,
        'datePublished' => $article->created_at?->toAtomString(),
        'dateModified' => $article->updated_at?->toAtomString(),
        'author' => ['@type' => 'Organization', 'name' => 'Superfresh'],
        'publisher' => ['@type' => 'Organization', 'name' => 'Superfresh', 'logo' => ['@type' => 'ImageObject', 'url' => asset('favicon.png')]],
        'mainEntityOfPage' => route('tips-advies.show', $article),
    ])
    <script type="application/ld+json">@json($articleStructuredData)</script>
@endsection

@section('content')
    <main class="flex-1" aria-label="{{ __('Artikel') }}">
        <article class="bg-secondary-surface">
            <div class="mx-auto max-w-4xl px-6 py-16 lg:px-8 lg:py-24">
                <a href="{{ route('tips-advies') }}" class="font-subheading text-sm text-brand hover:underline">{{ __('← Alle tips & advies') }}</a>
                @if ($article->image)
                    <img src="{{ asset('storage/'.$article->image) }}" alt="{{ $article->title }}" class="mt-10 aspect-video w-full rounded-md object-cover shadow-sm">
                @endif
                @if ($article->category)
                    <p class="font-subheading mt-10 text-sm text-brand/70">{{ $article->category->name }}</p>
                @endif
                <h1 class="font-heading mt-3 text-4xl font-extrabold tracking-tight text-brand sm:text-5xl">{{ $article->title }}</h1>
                <p class="mt-5 text-lg leading-8 text-secondary-text/75">{{ $article->short_content }}</p>
                <div class="mt-10 whitespace-pre-line break-words leading-8 text-secondary-text/80">{{ $articleContent }}</div>
            </div>
        </article>
    </main>
@endsection
