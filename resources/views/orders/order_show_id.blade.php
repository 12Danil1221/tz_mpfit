<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Все заказы</title>
    <style>
    .hero {
        text-align: center;
    }

    .headline {
        display: flex;
        justify-content: center;
        gap: 2rem;
    }

    .headline_card {
        display: grid;
    }

    .orders_image {
        width: 20rem;
    }
    </style>
</head>

<body>
    <a href="{{ route('dashboard') }}">Назат</a>

    <div class="hero">
        <h1>Все заказы</h1>
    </div>
    <div class="headline">
        <div class="headline_card">
            <img class="orders_image" src="{{ asset('image/1image.jpg') }}" alt="Image">
            <h1>Товар: {{ $order->post_title }}</h1>

            <h2>Заказ №{{ $order->id }}</h2>
            <p>Дата заказа: {{ $order->created_at }}</p>
            <p>Клиент: {{ $order->FIO }}</p>
            <p>Статус: {{ $order->order_status }}</p>
            <form action="{{ route('orders.update', $order) }}" method="POST">
                @csrf
                @method('PUT')
                <select name="order_status">
                    @foreach ($statuses as $status)
                    <option value="{{ $status->name }}">{{ $status->name }}</option>
                    @endforeach
                </select>
                <button type="submit">Изменить</button>
            </form>
            <p>Цена: {{ $order->order_price }}</p>
        </div>
    </div>
</body>

</html>