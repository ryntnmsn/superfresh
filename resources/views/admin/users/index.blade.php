@extends('layouts.admin')

@section('title', 'Users')

@section('content')
    <div class="flex flex-wrap items-center justify-between gap-4">
        <div>
            <h1 class="font-heading text-2xl font-extrabold tracking-tight text-brand">Users</h1>
            <p class="mt-1 text-sm text-secondary-text/70">Manage administrator and editor accounts.</p>
        </div>
        <a href="{{ route('admin.users.create') }}" class="rounded bg-brand px-4 py-2.5 text-sm font-semibold text-secondary-surface hover:bg-brand/90">New user</a>
    </div>

    @if (session('success'))
        <div class="mt-6 rounded-lg border border-brand-bright/50 bg-secondary-soft px-4 py-3 text-sm text-brand">{{ session('success') }}</div>
    @endif
    @error('user')
        <div class="mt-6 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800">{{ $message }}</div>
    @enderror

    <div class="mt-6 overflow-hidden rounded-md border border-brand/10 bg-white">
        <table class="w-full text-left text-sm">
            <thead class="bg-secondary-surface text-xs uppercase tracking-wide text-secondary-text/60">
                <tr><th class="px-5 py-3 font-medium">Name</th><th class="px-5 py-3 font-medium">Email</th><th class="px-5 py-3 font-medium">Role</th><th class="px-5 py-3 text-right font-medium">Actions</th></tr>
            </thead>
            <tbody class="divide-y divide-brand/10">
                @forelse ($users as $managedUser)
                    <tr>
                        <td class="px-5 py-4 font-medium text-brand">{{ $managedUser->name }}</td>
                        <td class="px-5 py-4 text-secondary-text/70">{{ $managedUser->email }}</td>
                        <td class="px-5 py-4 text-secondary-text/70">{{ $managedUser->role }}</td>
                        <td class="px-5 py-4">
                            <div class="flex justify-end gap-3">
                                <a href="{{ route('admin.users.edit', $managedUser) }}" class="font-medium text-brand hover:underline">Edit</a>
                                @if (! auth()->user()->is($managedUser))
                                    <form method="POST" action="{{ route('admin.users.destroy', $managedUser) }}" onsubmit="return confirm('Delete this user?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="font-medium text-red-700 hover:underline">Delete</button>
                                    </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="px-5 py-12 text-center text-sm text-secondary-text/60">No users yet.</td></tr>
                @endforelse
            </tbody>
        </table>
        @if ($users->hasPages())
            <div class="border-t border-brand/10 px-5 py-4">{{ $users->links() }}</div>
        @endif
    </div>
@endsection
