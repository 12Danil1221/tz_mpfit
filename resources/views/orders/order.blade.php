<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        background-color: rgba(17, 17, 17, 0.3);

    }

    .close_popup {
        display: flex;
        justify-content: end;
    }

    a {
        color: black;
        text-decoration: none;
    }

    .popup_order {
        position: relative;
        display: flex;
        justify-content: center;
        top: 10rem;

    }

    .hero {}

    .orders_image {
        width: 20rem;
        height: 22rem;
    }

    .headline {
        display: grid;
        padding: 1rem;
        height: 20rem;
        background-color: whitesmoke;
    }

    .button_2 {
        background-color: black;
        color: white;
    }
    </style>
</head>

<body>

    <section class="popup_order">
        <section class="hero">
            <img class="orders_image" src="{{ asset('image/orders_image') }}" alt="Logo">
        </section>
        <section class="headline">

            <div class="close_popup">
                <a href="{{ route('dashboard') }}">Назат</a>
            </div>
            <h1>Оформление заказа товара</h1>
            <form action="{{ route('orders.store') }}" method="POST">
                <p>Товар: <input type="text" name="post_title" value="{{ $post->title }}" readonly>
                </p>
                <input type="hidden" name="image" value="{{ $post->image }}">
                @csrf
                <input type="text" name="FIO" placeholder="ФИО">
                <br>
                <input type="number" name="order_quantity" value="1">
                <br>
                <input type="text" name="order_status" placeholder="Статус заказа" value="новый" readonly>
                <br>
                <input type="text" name="comment" placeholder="Комментарий" value="Заказ №1">
                <br>
                <input type="number" name="order_price" value="{{ $post->price }}" readonly>
                <br>
                <br>
                <button type="submit" class="button_2">Оформить заказ</button>
            </form>
        </section>
    </section>
</body>

</html>