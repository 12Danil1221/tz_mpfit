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

    .back {
        color: black;
    }

    a {
        text-decoration: none;
        color: white;
    }

    .button_2 {
        position: relative;
        width: 10rem;
        height: 2rem;
        border: 0px;
        border-radius: 1rem;
        background-color: #efbcd5;
        color: white;
        bottom: 0.2rem;
    }

    .headline_card {
        text-align: center;
        color: white;
        background-color: #3185fc;
        border-radius: 1rem;
    }

    .orders_image {
        width: 20rem;
    }
    </style>
</head>

<body>
    <a class="back" href="{{ route('dashboard') }}">Назат</a>

    <div class="hero">
        <h1>Все заказы</h1>
    </div>
    <div class="headline">
        @foreach ($orders as $order)
        <div class="headline_card">
            <img class="orders_image" src="{{ $order->image }}" alt="Image">
            <h1>Товар: {{ $order->post_title }}</h1>
            <h2>Заказ №{{ $order->id }}</h2>
            <p>{{ $order->created_at }}</p>
            <p>Клиент: {{ $order->FIO }}</p>
            <p>Статус: {{ $order->order_status }}</p>
            <p>Количество: {{ $order->order_quantity }}</p>
            <p>Цена: {{ $order->order_price }}</p>
            <a href="{{ route('orders.edit', $order) }}">Изменение заказа</a>
            <hr>
            <a href="{{ route('orders.order_show_id', $order) }}">Просмотр заказа</a>
            <hr>
            <form action="{{ route('orders.delete', $order) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="button_2" type="submit">Удалить заказ</button>

            </form>
        </div>
        @endforeach
    </div>
</body>

</html>