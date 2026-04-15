<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="auth-card-wrapper">
        <div class="auth-card">
            <h2>Create Account</h2>
            <p>Sign up to continue</p>

            @if($errors->any())
            <ul style="color:red; margin-bottom:15px;">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input type="text" name="student_no" placeholder="Student No" required>
                <input type="text" name="name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="text" name="course" placeholder="Course" required>
                <input type="text" name="year_level" placeholder="Year Level" required>
                <input type="text" name="section" placeholder="Section" required>
                <input type="text" name="contact_no" placeholder="Contact No" required>
                <input type="text" name="address" placeholder="Address" required>
                <input type="date" name="birthdate" placeholder="Birthdate" required>
                <button type="submit">Register</button>
            </form>

            <div class="footer">
                Already have an account? <a href="{{ route('login') }}">Log In</a>
            </div>
        </div>
    </div>
</body>

</html>