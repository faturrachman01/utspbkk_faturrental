<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>
    <a href="{{ route('products.create') }}">Create Product</a>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product->name }} - ${{ $product->price }}</li>
        @endforeach
    </ul>
</body>
</html>
