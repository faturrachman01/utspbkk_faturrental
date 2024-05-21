<!DOCTYPE html>
<html>
<head>
    <title>Orders</title>
</head>
<body>
    <h1>Orders</h1>
    <a href="{{ route('orders.create') }}">Create Order</a>
    <ul>
        @foreach ($orders as $order)
            <li>{{ $order->product->name }} - Quantity: {{ $order->quantity }}</li>
        @endforeach
    </ul>
</body>
</html>
