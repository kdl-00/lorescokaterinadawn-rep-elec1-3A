<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detauls</title>
</head>

<body>
    <h1>Product Details</h1>

    <p><strong>Name:</strong> {{ $product->name }}</p>
    <p><strong>Price:</strong> {{ $product->price }}</p>

    <h3>QR Code:</h3>
    {!! $qr !!}

    <br><br>
    <a href="{{ route('products.index') }}">Back</a>
</body>

</html>