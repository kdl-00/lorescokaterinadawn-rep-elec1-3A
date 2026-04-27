<!DOCTYPE html>
<html>

<head>
    <title>Edit Book</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f7fa;
            padding: 20px;
        }

        .container {
            max-width: 500px;
            margin: auto;
        }

        h1 {
            color: #333;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            margin-top: 15px;
            padding: 10px;
            width: 100%;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }

        a {
            text-decoration: none;
            color: #3498db;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Edit Book</h1>

        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label>Title:</label>
            <input type="text" name="title" value="{{ $book->title }}" required>

            <label>Author:</label>
            <input type="text" name="author" value="{{ $book->author }}" required>

            <label>Published Date:</label>
            <input type="date" name="published_date" value="{{ $book->published_date }}" required>

            <button type="submit">Save Changes</button>
        </form>

        <br>
        <a href="{{ route('books.index') }}">← Back to List</a>
    </div>

</body>

</html>