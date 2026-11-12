<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Porject</title>
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>

<body>
    @include('partials.navbar')
    <h1>Create a project</h1>
    <form method="POST" action="{{ route('portfolio.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Project Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="description">Project Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <input type="number" name="user_id" placeholder="User ID" required>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

</body>

</html>