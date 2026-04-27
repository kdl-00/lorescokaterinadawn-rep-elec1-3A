<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>

<body>
    <h1>Add Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Price:</label><br>
        <input type="number" name="price" step="0.01" required><br><br>

        <button type="submit">Save</button>
    </form>

    <br>
    <a href="{{ route('products.index') }}">Back</a>
</body>

</html>