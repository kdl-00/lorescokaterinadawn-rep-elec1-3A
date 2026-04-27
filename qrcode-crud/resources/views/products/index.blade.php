<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>

<body>
    <h1>Product List</h1>

    @if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('products.create') }}">+ Add Product</a>

    <table border="1" cellpadding="10">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>QR</th>
            <th>Actions</th>
        </tr>

        @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{!! $product->qr !!}</td>
            <td>
                <a href="{{ route('products.show', $product->id) }}">View</a>
                <a href="{{ route('products.edit', $product->id) }}">Edit</a>

                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Delete this product?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>