@extends('layouts.site')

@section('title', __('Tips & advies'))

@section('content')
    <main class="flex-1" aria-label="{{ __('Tips en advies') }}">
        <section class="bg-secondary-surface">
            <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-28">
                <div class="mx-auto max-w-3xl text-center">
                    <p class="font-subheading text-sm uppercase tracking-[0.16em] text-brand/75">{{ __('Tips & advies') }}</p>
                    <h1 class="font-heading mt-4 text-4xl font-extrabold tracking-tight text-brand sm:text-5xl">{{ __('Tips en advies van Superfresh') }}</h1>
                    <p class="mt-6 text-lg leading-8 text-secondary-text/75">{{ __('Lees onze artikelen over professionele schoonmaak en het verzorgen van zakelijke en verhuurlocaties.') }}</p>
                </div>

                <nav aria-label="{{ __('Filter op categorie') }}" class="mx-auto mt-12 flex max-w-5xl flex-wrap justify-center gap-3">
                    <a href="{{ route('tips-advies') }}" @class([
                        'rounded-full border px-4 py-2 text-sm font-medium transition focus:outline-none focus:ring-4 focus:ring-brand-bright/30',
                        'border-brand bg-brand text-white' => $selectedCategoryId === null,
                        'border-brand/20 bg-white text-brand hover:border-brand hover:bg-brand/5' => $selectedCategoryId !== null,
                    ]) @if ($selectedCategoryId === null) aria-current="true" @endif>{{ __('Alle categorieën') }}</a>
                    @foreach ($categories as $category)
                        <a href="{{ route('tips-advies', ['category' => $category->id]) }}" @class([
                            'rounded-full border px-4 py-2 text-sm font-medium transition focus:outline-none focus:ring-4 focus:ring-brand-bright/30',
                            'border-brand bg-brand text-white' => $selectedCategoryId === $category->id,
                            'border-brand/20 bg-white text-brand hover:border-brand hover:bg-brand/5' => $selectedCategoryId !== $category->id,
                        ]) @if ($selectedCategoryId === $category->id) aria-current="true" @endif>{{ $category->name }}</a>
                    @endforeach
                </nav>

                <div class="mt-8 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    @forelse ($articles as $article)
                        <article class="overflow-hidden rounded-md border border-brand/10 bg-white shadow-sm transition hover:shadow-md">
                            <a href="{{ route('tips-advies.show', $article) }}" class="group flex h-full flex-col focus:outline-none focus-visible:ring-4 focus-visible:ring-inset focus-visible:ring-brand-bright/40">
                                @if ($article->image)
                                    <img src="{{ asset('storage/'.$article->image) }}" alt="{{ $article->title }}" class="aspect-video w-full object-cover">
                                @endif
                                <div class="flex flex-1 flex-col p-7">
                                    @if ($article->category)
                                        <p class="font-subheading text-sm text-brand/70">{{ $article->category->name }}</p>
                                    @endif
                                    <h2 class="font-heading mt-2 text-xl font-extrabold text-brand">{{ $article->title }}</h2>
                                    <p class="mt-3 flex-1 leading-7 text-secondary-text/75">{{ $article->short_content }}</p>
                                    <span class="font-subheading mt-6 inline-flex items-center text-sm text-brand group-hover:underline">{{ __('Lees artikel') }}</span>
                                </div>
                            </a>
                        </article>
                    @empty
                        <p class="rounded-md border border-brand/10 bg-white p-8 text-center leading-7 text-secondary-text/70 sm:col-span-2 lg:col-span-3">{{ __('Er zijn op dit moment nog geen artikelen. Kom later terug voor tips en advies.') }}</p>
                    @endforelse
                </div>

                @if ($articles->hasPages())
                    <div class="mt-10">{{ $articles->links() }}</div>
                @endif
            </div>
        </section>
    </main>
@endsection
