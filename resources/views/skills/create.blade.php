<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Skill</title>
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>

<body>
    @include('partials.navbar')
    <h1>Create a skill</h1>
    <form method="POST" action="{{ route('skills.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Skill Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="level">Skill Level</label>
            <textarea class="form-control" id="level" name="level" rows="3" required></textarea>
        </div>
        <input type="number" name="user_id" placeholder="User ID" required>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

</body>

</html>