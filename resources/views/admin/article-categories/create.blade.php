@extends('layouts.admin')

@section('title', 'New article category')

@section('content')
    <div class="mb-6">
        <a href="{{ route('admin.article-categories.index') }}" class="text-sm font-medium text-brand hover:underline">Article categories</a>
        <h1 class="font-heading mt-2 text-2xl font-extrabold tracking-tight text-brand">New category</h1>
    </div>
    @include('admin.article-categories._form')
@endsection
