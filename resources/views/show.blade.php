<!DOCTYPE html>
<html>
<head>
    <title>View Project</title>
</head>
<body>
    <h1>View Project</h1>
    <p><strong>ID:</strong> {{ $project['id'] }}</p>
    <p><strong>Name:</strong> {{ $project['name'] }}</p>
    <p><strong>Start Date:</strong> {{ $project['start_date'] }}</p>
    <p><strong>Status:</strong> {{ $project['status'] }}</p>
    <p><strong>Responsible:</strong> {{ $project['responsible'] }}</p>
    <p><strong>Amount:</strong> {{ $project['amount'] }}</p>
    <a href="/projects">Back to All Projects</a>
</body>
</html>
