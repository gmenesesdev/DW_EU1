<!DOCTYPE html>
<html>
<head>
    <title>Delete Project</title>
</head>
<body>
    <h1>Delete Project</h1>
    <p>Are you sure you want to delete the project <strong>{{ $project['name'] }}</strong>?</p>
    <form action="/projects/{{ $project['id'] }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Yes, Delete</button>
    </form>
    <a href="/projects">No, Go Back</a>
</body>
</html>
