<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>My Resume</title>
</head>
<body>
    <div class="container">
        @foreach($resumes as $resume)
        <div class="header">
            <h1>{{ $resume->name }}</h1>
            <p>Email: {{ $resume->email }}</p>
            <p>Phone: {{ $resume->phone }}</p>
        </div>
        <hr>
        <p>{{ $resume->summary }}</p>

        <h2>Education</h2>
        <ul>
            @foreach(explode(';', $resume->education) as $edu)
            <li>{{ trim($edu) }}</li>
            @endforeach
        </ul>

        <h2>Experience</h2>
        <ul>
            <li>{{ $resume->experience }}</li>
        </ul>

        <h2>Skills</h2>
        <ul>
            @foreach(explode(',', $resume->skills) as $skill)
            <li>{{ trim($skill) }}</li>
            @endforeach
        </ul>
        @endforeach
    </div>
</body>
</html>
