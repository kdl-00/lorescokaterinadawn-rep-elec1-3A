<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Student System</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="header">
        <h1>Student Records System</h1>

        <form method="GET" class="search-box">
            <input type="text" name="search" value="{{ $search }}" placeholder="Search student...">
            <button>Search</button>
        </form>

        <a href="{{ route('students.create') }}" class="add-btn">+ Add Student</a>
    </div>

    <div class="container">

        <div class="grid">

            @foreach($students as $student)
            <div class="card">

                @if($student->photo)
                <img src="{{ asset('storage/'.$student->photo) }}">
                @else
                <img src="https://via.placeholder.com/80">
                @endif

                <h3>{{ $student->name }}</h3>
                <p>{{ $student->student_id }}</p>

                <div class="qr">
                    {!! QrCode::size(80)->generate(
                    "Name: {$student->name}\n" .
                    "ID: {$student->student_id}\n" .
                    "Course: {$student->course}\n" .
                    "Year: {$student->year}\n" .
                    "Email: {$student->email}"
                    ) !!}
                </div>

                <div class="actions">
                    <a href="{{ route('students.edit', $student) }}" class="edit">Edit</a>

                    <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="delete" onclick="return confirm('Delete this student?')">Delete</button>
                    </form>
                </div>

            </div>
            @endforeach

        </div>

    </div>

</body>

</html>