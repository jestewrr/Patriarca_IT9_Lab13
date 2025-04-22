<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex justify-content-center align-items-center vh-100">

    <div class="card w-50">
        <div class="card-body">
            <h1 class="text-center">Edit Post</h1>
            <form action="{{ route('posts.update', $post->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}" required>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Content:</label>
                    <textarea name="body" id="body" class="form-control" required>{{ $post->body }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Update</button>
            </form>
            <a href="{{ route('posts.index') }}" class="d-block text-center mt-3">Back to Posts</a>
        </div>
    </div>

    <!-- Add Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>