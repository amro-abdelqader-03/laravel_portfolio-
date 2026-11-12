<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit a skill</title>
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body>
    @include('partials.navbar')
    <h1>Edit a skill</h1>
    <form method="POST" action="{{ route('skills.update', $skill->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Skill Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $skill->name }}" required>
        </div>
        <div class="form-group">
            <label for="level">Skill Level</label>
            <textarea class="form-control" id="level" name="level" rows="3" required>{{ $skill->level }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
</body>
</html>
