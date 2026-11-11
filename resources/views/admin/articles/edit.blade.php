@extends('layouts.admin')

@section('title', 'Edit article')

@section('content')
    <div class="mb-6">
        <a href="{{ route('admin.articles.index') }}" class="text-sm font-medium text-brand hover:underline">Articles</a>
        <h1 class="font-heading mt-2 text-2xl font-extrabold tracking-tight text-brand">Edit article</h1>
    </div>
    @include('admin.articles._form')
@endsection
