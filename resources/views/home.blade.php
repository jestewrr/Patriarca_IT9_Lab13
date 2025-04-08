@extends('layout')

@section('title', 'Welcome')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Jester's Blog App</h1>
    <div class="text-center mt-4">
        <a href="{{ route('posts.index') }}" class="btn btn-primary">
            View All Posts
        </a>
        <a href="{{ route('posts.create') }}" class="btn btn-success">
            Create a New Post
        </a>
    </div>
</div>
@endsection