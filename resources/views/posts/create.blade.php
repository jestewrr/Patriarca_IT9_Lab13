<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Create Post</title>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">

    <div class="card w-50">
        <div class="card-body">
            <h1 class="text-center">Create New Post</h1>
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Content:</label>
                    <textarea name="body" id="body" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Create</button>
            </form>
            <a href="{{ route('posts.index') }}" class="d-block text-center mt-3">Back to Posts</a>
        </div>
    </div>

</body>

</html>