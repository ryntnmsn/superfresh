<aside class="border-b border-brand bg-brand lg:min-h-screen lg:w-64 lg:shrink-0 lg:border-b-0 lg:border-r">
    <div class="flex h-16 items-center px-6">
        <a href="{{ route('admin.dashboard') }}" aria-label="Super Fresh admin home">
            <img src="{{ asset('images/super-fresh-logo-light.png') }}" alt="Super Fresh" class="h-auto w-40 max-w-full">
        </a>
    </div>
    <nav aria-label="Admin menu" class="flex gap-2 overflow-x-auto px-4 pb-4 lg:flex-col lg:px-3 lg:py-5">
        <a href="{{ route('admin.dashboard') }}"
            @class([
                'flex shrink-0 items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium transition',
                'bg-brand-bright text-brand' => request()->routeIs('admin.dashboard'),
                'text-secondary-surface hover:bg-secondary-surface/10' => ! request()->routeIs('admin.dashboard'),
            ])>
            <x-heroicon-o-home class="size-5 shrink-0" aria-hidden="true" />
            <span>Dashboard</span>
        </a>
        <a href="{{ route('admin.articles.index') }}"
            @class([
                'flex shrink-0 items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium transition',
                'bg-brand-bright text-brand' => request()->routeIs('admin.articles.*'),
                'text-secondary-surface hover:bg-secondary-surface/10' => ! request()->routeIs('admin.articles.*'),
            ])>
            <x-heroicon-o-newspaper class="size-5 shrink-0" aria-hidden="true" />
            <span>Articles</span>
        </a>
        <a href="{{ route('admin.article-categories.index') }}"
            @class([
                'flex shrink-0 items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium transition',
                'bg-brand-bright text-brand' => request()->routeIs('admin.article-categories.*'),
                'text-secondary-surface hover:bg-secondary-surface/10' => ! request()->routeIs('admin.article-categories.*'),
            ])>
            <x-heroicon-o-tag class="size-5 shrink-0" aria-hidden="true" />
            <span>Article categories</span>
        </a>
        <a href="{{ route('admin.bookings.index') }}"
            @class([
                'flex shrink-0 items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium transition',
                'bg-brand-bright text-brand' => request()->routeIs('admin.bookings.*'),
                'text-secondary-surface hover:bg-secondary-surface/10' => ! request()->routeIs('admin.bookings.*'),
            ])>
            <x-heroicon-o-calendar-days class="size-5 shrink-0" aria-hidden="true" />
            <span>Bookings</span>
        </a>
        <a href="{{ route('admin.subscriptions.index') }}"
            @class([
                'flex shrink-0 items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium transition',
                'bg-brand-bright text-brand' => request()->routeIs('admin.subscriptions.*'),
                'text-secondary-surface hover:bg-secondary-surface/10' => ! request()->routeIs('admin.subscriptions.*'),
            ])>
            <x-heroicon-o-envelope class="size-5 shrink-0" aria-hidden="true" />
            <span>Subscriptions</span>
        </a>
        @if (auth()->user()->isAdministrator())
            <a href="{{ route('admin.users.index') }}"
                @class([
                    'flex shrink-0 items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium transition',
                    'bg-brand-bright text-brand' => request()->routeIs('admin.users.*'),
                    'text-secondary-surface hover:bg-secondary-surface/10' => ! request()->routeIs('admin.users.*'),
                ])>
                <x-heroicon-o-users class="size-5 shrink-0" aria-hidden="true" />
                <span>Users</span>
            </a>
        @endif
    </nav>
</aside>
