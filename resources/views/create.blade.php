<!DOCTYPE html>
<html>
<head>
    <title>Create Project</title>
</head>
<body>
    <h1>Create Project</h1>
    <form action="/projects" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date"><br><br>
        <label for="status">Status:</label>
        <input type="text" id="status" name="status"><br><br>
        <label for="responsible">Responsible:</label>
        <input type="text" id="responsible" name="responsible"><br><br>
        <label for="amount">Amount:</label>
        <input type="text" id="amount" name="amount"><br><br>
        <input type="submit" value="Create Project">
    </form>
</body>
</html>
