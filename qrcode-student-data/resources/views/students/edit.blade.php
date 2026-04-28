<!DOCTYPE html>
<html>

<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="form-container">

        <h2>Edit Student</h2>

        <a href="{{ route('students.index') }}">← Back</a>

        <form method="POST" action="{{ route('students.update', $student) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label>Name</label>
            <input type="text" name="name" value="{{ $student->name }}">

            <label>Student ID</label>
            <input type="text" name="student_id" value="{{ $student->student_id }}">

            <label>Course</label>
            <input type="text" name="course" value="{{ $student->course }}">

            <label>Year</label>
            <input type="text" name="year" value="{{ $student->year }}">

            <label>Email</label>
            <input type="email" name="email" value="{{ $student->email }}">

            <label>Photo</label>
            <input type="file" name="photo">

            <button type="submit">Update Student</button>

        </form>

    </div>

</body>

</html>