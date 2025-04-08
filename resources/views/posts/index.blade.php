@extends('layout')

@section('title', 'Posts')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">Posts</h1>

    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="mb-4">
        <a href="{{ route('posts.create') }}" class="btn btn-success btn-lg" role="button">
            <i class="fas fa-plus"></i> Create Post
        </a>
    </div>

    <div class="row g-4">
        @forelse ($posts as $post)
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-body d-flex flex-column flex-md-row align-items-md-center">
                    <div class="flex-grow-1">
                        <h5 class="card-title fw-bold">{{ $post->title }}</h5>
                        <p class="card-text text-muted">{{ Str::limit($post->body, 150, '...') }}</p>
                    </div>
                    <div class="d-flex gap-2 mt-3 mt-md-0">
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-outline-secondary btn-sm" title="View">
                            <i class="fas fa-eye"></i> View
                        </a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-primary btn-sm" title="Edit">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-sm" title="Delete">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="alert alert-info text-center">
                No posts available. <a href="{{ route('posts.create') }}" class="alert-link">Create a new post</a>.
            </div>
        </div>
        @endforelse
    </div>
</div>
@endsection