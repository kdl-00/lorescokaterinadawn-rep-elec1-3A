<!DOCTYPE html>
<html>

<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="form-container">

        <h2>Add Student</h2>

        @if ($errors->any())
        <div style="background:#ffe6e6; color:#cc0000; padding:10px; margin-bottom:15px; border-radius:6px;">
            <ul style="margin:0; padding-left:20px;">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{ route('students.store') }}" enctype="multipart/form-data">
            @csrf

            <label>Name</label>
            <input type="text" name="name">

            <label>Student ID</label>
            <input type="text" name="student_id">

            <label>Course</label>
            <input type="text" name="course">

            <label>Year</label>
            <input type="text" name="year">

            <label>Email</label>
            <input type="email" name="email">

            <label>Photo</label>
            <input type="file" name="photo">

            <button type="submit">Save Student</button>

        </form>

    </div>

</body>

</html>