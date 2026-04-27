<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background: #eee;
        }
    </style>
</head>

<body>
    <h1>All Users</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Student No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
                <th>Year Level</th>
                <th>Section</th>
                <th>Contact No</th>
                <th>Address</th>
                <th>Birthdate</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->student_no }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->course }}</td>
                <td>{{ $user->year_level }}</td>
                <td>{{ $user->section }}</td>
                <td>{{ $user->contact_no }}</td>
                <td>{{ $user->address }}</td>
                <td>{{ $user->birthdate }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>