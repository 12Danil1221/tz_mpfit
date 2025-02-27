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

    .img {}

    .headline {
        display: grid;
        padding: 1rem;
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
            <img src="" alt="Logo">
        </section>
        <section class="headline">

            <div class="close_popup">
                <a href="{{ route('dashboard') }}">Назат</a>
            </div>
            <img src="" alt="Logo">
            <h1>Оформление заказа товара</h1>
            <p></p>
            <form action="{{ route('orders.store') }}" method="POST">
                @csrf
                <input type="text" name="FIO" placeholder="ФИО">
                <br>
                <input type="number" name="order_quantity" value="1">
                <br>
                <input type="date" name="order_date" value="27.02.2025">
                <br>
                <input type="text" name="order_status" placeholder="Статус заказа" value="новый">
                <br>
                <input type="text" name="comment" placeholder="Комментарий" value="Заказ №1">
                <br>
                <input type="number" name="order_price" value="1200">
                <br>
                <br>
                <button type="submit" class="button_2">Оформить заказ</button>
            </form>
        </section>
    </section>
</body>

</html>