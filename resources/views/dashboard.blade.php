<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<div class="container mt-5">
    <div class="card">
        <div class="card-body text-center">
            <h1>Welcome, {{ auth()->user()->name }}!</h1>
            <p>You are logged in as {{ auth()->user()->email }}</p>
            <div class="text-center mt-4">
        <a href="{{ route('posts.index') }}" class="btn btn-primary">
            View All Posts
        </a>
        <a href="{{ route('posts.create') }}" class="btn btn-success">
            Create a New Post
        </a>

            <form method="POST" action="/logout" class="mt-3">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
    </div>
</div>