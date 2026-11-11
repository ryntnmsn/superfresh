<form method="POST" action="{{ $managedUser->exists ? route('admin.users.update', $managedUser) : route('admin.users.store') }}" class="max-w-xl space-y-6 rounded-md border border-brand/10 bg-white p-6 shadow-sm">
    @csrf
    @if ($managedUser->exists)
        @method('PUT')
    @endif

    <div>
        <label for="name" class="mb-2 block text-sm font-medium text-brand">Name</label>
        <input id="name" name="name" value="{{ old('name', $managedUser->name) }}" required maxlength="255" autofocus class="w-full rounded border border-brand/20 px-3.5 py-2.5 text-sm outline-none focus:border-brand-bright focus:ring-4 focus:ring-brand-bright/20">
        @error('name')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
    </div>

    <div>
        <label for="email" class="mb-2 block text-sm font-medium text-brand">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email', $managedUser->email) }}" required maxlength="255" class="w-full rounded border border-brand/20 px-3.5 py-2.5 text-sm outline-none focus:border-brand-bright focus:ring-4 focus:ring-brand-bright/20">
        @error('email')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
    </div>

    <div>
        <label for="role" class="mb-2 block text-sm font-medium text-brand">Role</label>
        <select id="role" name="role" required class="w-full rounded border border-brand/20 bg-white px-3.5 py-2.5 text-sm outline-none focus:border-brand-bright focus:ring-4 focus:ring-brand-bright/20">
            @foreach (['Administrator', 'Editor'] as $role)
                <option value="{{ $role }}" @selected(old('role', $managedUser->role ?? 'Editor') === $role)>{{ $role }}</option>
            @endforeach
        </select>
        @error('role')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
    </div>

    <div>
        <label for="password" class="mb-2 block text-sm font-medium text-brand">{{ $managedUser->exists ? 'New password (optional)' : 'Password' }}</label>
        <input id="password" type="password" name="password" @required(! $managedUser->exists) minlength="12" autocomplete="new-password" class="w-full rounded border border-brand/20 px-3.5 py-2.5 text-sm outline-none focus:border-brand-bright focus:ring-4 focus:ring-brand-bright/20">
        @error('password')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
    </div>

    <div>
        <label for="password_confirmation" class="mb-2 block text-sm font-medium text-brand">Confirm password</label>
        <input id="password_confirmation" type="password" name="password_confirmation" @required(! $managedUser->exists) minlength="12" autocomplete="new-password" class="w-full rounded border border-brand/20 px-3.5 py-2.5 text-sm outline-none focus:border-brand-bright focus:ring-4 focus:ring-brand-bright/20">
    </div>

    <div class="flex justify-end gap-3 border-t border-brand/10 pt-5">
        <a href="{{ route('admin.users.index') }}" class="rounded border border-brand/20 px-4 py-2.5 text-sm font-medium text-brand hover:bg-secondary-surface">Cancel</a>
        <button type="submit" class="rounded bg-brand px-4 py-2.5 text-sm font-semibold text-secondary-surface hover:bg-brand/90">{{ $managedUser->exists ? 'Save changes' : 'Create user' }}</button>
    </div>
</form>
