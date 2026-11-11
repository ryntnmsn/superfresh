@extends('layouts.site')

@section('title', 'Tips & advies')

@section('content')
    <main class="flex-1" aria-label="Tips en advies">
        <section class="bg-secondary-surface">
            <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-28">
                <div class="mx-auto max-w-3xl text-center">
                    <p class="font-subheading text-sm uppercase tracking-[0.16em] text-brand/75">Tips &amp; advies</p>
                    <h1 class="font-heading mt-4 text-4xl font-extrabold tracking-tight text-brand sm:text-5xl">Tips en advies van Superfresh</h1>
                    <p class="mt-6 text-lg leading-8 text-secondary-text/75">Lees onze artikelen over professionele schoonmaak en het verzorgen van zakelijke en verhuurlocaties.</p>
                </div>

                <div class="mt-14 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    @forelse ($articles as $article)
                        <article class="flex flex-col rounded-md border border-brand/10 bg-white p-7 shadow-sm">
                            @if ($article->category)
                                <p class="font-subheading text-sm text-brand/70">{{ $article->category->name }}</p>
                            @endif
                            <h2 class="font-heading mt-2 text-xl font-extrabold text-brand">{{ $article->title }}</h2>
                            <p class="mt-3 flex-1 leading-7 text-secondary-text/75">{{ $article->short_content }}</p>
                            <a href="{{ route('tips-advies.show', $article) }}" class="font-subheading mt-6 inline-flex items-center text-sm text-brand hover:underline focus:outline-none focus:ring-4 focus:ring-brand-bright/30">
                                Lees artikel <span aria-hidden="true" class="ml-1">→</span>
                            </a>
                        </article>
                    @empty
                        <p class="rounded-md border border-brand/10 bg-white p-8 text-center leading-7 text-secondary-text/70 sm:col-span-2 lg:col-span-3">Er zijn op dit moment nog geen artikelen. Kom later terug voor tips en advies.</p>
                    @endforelse
                </div>

                @if ($articles->hasPages())
                    <div class="mt-10">{{ $articles->links() }}</div>
                @endif
            </div>
        </section>
    </main>
@endsection
