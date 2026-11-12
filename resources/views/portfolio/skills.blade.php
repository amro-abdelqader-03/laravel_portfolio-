<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Skills</title>
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>

<body>

    @include('partials.navbar')

    <h1>My Skills</h1>

    <div>
        <p>add new skill</p>
        <button><a href="{{ route('skills.create') }}">Add new</a></button>
    </div>

    <ul>
        @foreach ($skills as $skill)
        <li>
            <h3>{{ $skill->name }}</h3>
            <p>Level: {{ $skill->level }}</p>
            <p>Assigned to: {{ $skill->user->name ?? 'Unknown' }}</p>
            <button><a href="{{ route('skills.edit', $skill->id) }}">Edit</a></button>

            <form action="{{ route('skills.destroy', $skill->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
        @endforeach
    </ul>
        
    {{ $skills->links() }}

</body>

</html>