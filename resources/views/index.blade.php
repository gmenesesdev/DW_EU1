<!DOCTYPE html>
<html>
<head>
    <title>All Projects</title>
</head>
<body>
    <h1>All Projects</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Start Date</th>
            <th>Status</th>
            <th>Responsible</th>
            <th>Amount</th>
            <th>Actions</th>
        </tr>
        @foreach($projects as $project)
        <tr>
            <td>{{ $project['id'] }}</td>
            <td>{{ $project['name'] }}</td>
            <td>{{ $project['start_date'] }}</td>
            <td>{{ $project['status'] }}</td>
            <td>{{ $project['responsible'] }}</td>
            <td>{{ $project['amount'] }}</td>
            <td>
                <a href="/projects/{{ $project['id'] }}">View</a>
                <a href="/projects/{{ $project['id'] }}/edit">Edit</a>
                <form action="/projects/{{ $project['id'] }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <a href="/projects/create">Create New Project</a>
</body>
</html>