<!DOCTYPE html>
<html>

<head>
    <title>All Books</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f7fa;
            padding: 20px;
        }

        .container {
            max-width: 700px;
            margin: auto;
        }

        h1 {
            color: #333;
        }

        a {
            text-decoration: none;
            color: #3498db;
        }

        .add-btn {
            display: inline-block;
            margin-bottom: 15px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            background: #fff;
            margin-top: 10px;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .actions {
            margin-top: 10px;
        }

        button {
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
        }

        .delete-btn {
            background-color: red;
        }

        .edit-link {
            margin-right: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>All Books</h1>

        <a href="{{ route('books.create') }}" class="add-btn">+ Add New Book</a>

        <ul>
            @foreach ($books as $book)
            <li>
                <strong>{{ $book->title }}</strong><br>
                <small>by {{ $book->author }} ({{ $book->published_date }})</small>

                <div class="actions">
                    <a href="{{ route('books.edit', $book->id) }}" class="edit-link">Edit</a>

                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-btn">Delete</button>
                    </form>
                </div>
            </li>
            @endforeach
        </ul>
    </div>

</body>

</html>