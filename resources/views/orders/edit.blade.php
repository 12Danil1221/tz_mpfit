<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Post</title>
    @livewire('main-style')
    <style>
    .hero {
        position: relative;
        display: flex;
        justify-content: center;
        top: 20rem;
    }

    .hero_content {
        display: grid;
    }
    </style>
</head>

<body>
    <div class="hero">
        <div class="hero_content">
            <a href="{{ route('orders.order_show') }}">Назад</a>
            <br>
            <form action="{{ route('orders.update_full', $order) }}" method="POST">
                @csrf
                @method('PUT')

                <label>ФИО:</label>
                <input type="text" name="FIO" value="{{ $order->FIO }}" required>
                <br>
                <label>Количество:</label>
                <textarea name="order_quantity" required>{{ $order->order_quantity }}</textarea>
                <br>
                <label>Статус:</label>
                <textarea name="order_status" required>{{ $order->order_status }}</textarea>
                <br>
                <label>Комментарий:</label>
                <textarea name="comment" required>{{ $order->comment }}</textarea>
                <br>
                <label>Цена:</label>
                <textarea name="order_price" required>{{ $order->order_price }}</textarea>
                <br>
                <br>
                <button type="submit">Обновить данные заказа</button>
            </form>
        </div>
    </div>
</body>

</html>