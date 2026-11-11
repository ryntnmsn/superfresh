@extends('layouts.admin')

@section('title', 'New user')

@section('content')
    <div class="mb-6">
        <a href="{{ route('admin.users.index') }}" class="text-sm font-medium text-brand hover:underline">Users</a>
        <h1 class="font-heading mt-2 text-2xl font-extrabold tracking-tight text-brand">New user</h1>
    </div>
    @include('admin.users._form')
@endsection
