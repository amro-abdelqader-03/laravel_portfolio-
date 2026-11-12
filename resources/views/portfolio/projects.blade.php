<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>

<body>
    @include('partials.navbar')
    <h1>My Projects</h1>
    <div>
        <p>add new project</p>
        <button><a href="{{ route('portfolio.create') }}">Add new</a></button>
    </div>
    <ul>
        @foreach ($projects as $project)
        <li>
            <h3>{{ $project->title }}</h3>
            <p>{{ $project->description }}</p>
            <p>Assigned to: {{ $project->user->name ?? 'Unknown' }}</p>
            <button><a href="{{ route('portfolio.edit', $project->id) }}">Edit</a></button>

            <form action="{{ route('portfolio.destroy', $project->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>

        </li>
        @endforeach
    </ul>
</body>

</html>