<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class UserController extends Controller
{
    private const ROLES = ['Administrator', 'Editor'];

    public function index(): View
    {
        return view('admin.users.index', [
            'users' => User::query()->orderBy('name')->paginate(10),
        ]);
    }

    public function create(): View
    {
        return view('admin.users.create', ['managedUser' => new User()]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'role' => ['required', Rule::in(self::ROLES)],
            'password' => ['required', 'string', 'min:12', 'confirmed'],
        ]);

        User::query()->create([
            ...collect($validated)->only(['name', 'email', 'role'])->all(),
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()->route('admin.users.index')->with('success', 'User created.');
    }

    public function edit(User $user): View
    {
        return view('admin.users.edit', ['managedUser' => $user]);
    }

    public function update(Request $request, User $user): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')->ignore($user->id)],
            'role' => ['required', Rule::in(self::ROLES)],
            'password' => ['nullable', 'string', 'min:12', 'confirmed'],
        ]);

        if ($user->isAdministrator() && $validated['role'] !== 'Administrator' && User::query()->where('role', 'Administrator')->count() <= 1) {
            return back()->withErrors(['role' => 'At least one administrator account must remain.'])->withInput();
        }

        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->role = $validated['role'];

        if (filled($validated['password'] ?? null)) {
            $user->password = $validated['password'];
        }

        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'User updated.');
    }

    public function destroy(Request $request, User $user): RedirectResponse
    {
        if ($request->user()->is($user)) {
            return back()->withErrors(['user' => 'You cannot delete your own account.']);
        }

        if ($user->isAdministrator() && User::query()->where('role', 'Administrator')->count() <= 1) {
            return back()->withErrors(['user' => 'At least one administrator account must remain.']);
        }

        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'User deleted.');
    }
}
