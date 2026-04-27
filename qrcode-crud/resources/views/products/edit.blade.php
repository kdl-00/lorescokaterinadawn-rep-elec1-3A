<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>

<body>
    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ $product->name }}" required><br><br>

        <label>Price:</label><br>
        <input type="number" name="price" value="{{ $product->price }}" step="0.01" required><br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('products.index') }}">Back</a>
</body>

</html>