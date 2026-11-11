@extends('layouts.admin')

@section('title', 'Edit user')

@section('content')
    <div class="mb-6">
        <a href="{{ route('admin.users.index') }}" class="text-sm font-medium text-brand hover:underline">Users</a>
        <h1 class="font-heading mt-2 text-2xl font-extrabold tracking-tight text-brand">Edit user</h1>
    </div>
    @include('admin.users._form')
@endsection
