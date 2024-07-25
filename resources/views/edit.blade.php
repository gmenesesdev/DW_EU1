<!DOCTYPE html>
<html>
<head>
    <title>Edit Project</title>
</head>
<body>
    <h1>Edit Project</h1>
    <form action="/projects/{{ $project['id'] }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $project['name'] }}"><br><br>
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" value="{{ $project['start_date'] }}"><br><br>
        <label for="status">Status:</label>
        <input type="text" id="status" name="status" value="{{ $project['status'] }}"><br><br>
        <label for="responsible">Responsible:</label>
        <input type="text" id="responsible" name="responsible" value="{{ $project['responsible'] }}"><br><br>
        <label for="amount">Amount:</label>
        <input type="text" id="amount" name="amount" value="{{ $project['amount'] }}"><br><br>
        <input type="submit" value="Update Project">
    </form>
</body>
</html>