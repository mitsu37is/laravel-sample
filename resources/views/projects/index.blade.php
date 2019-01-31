<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title></title>
</head>
<body>
    <h1>Projects</h1>

    @foreach($projects as $project)
        <li>{{ $project->title }}</li>
    @endforeach
</body>
</html>
