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

    body {
        background-color: rgba(17, 17, 17, 0.3);

    }

    .close_popup {
        display: flex;
        justify-content: end;
    }

    .headline_top {
        display: flex;
        height: 5rem;
    }

    .back {
        height: 1rem;
    }

    a {
        color: black;
        text-decoration: none;
    }

    h1 {
        margin: 3rem;
    }

    .popup_order {
        position: relative;
        display: flex;
        justify-content: center;
        top: 10rem;

    }

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
    <div class="hero">
        <div class="hero_content">
            <div class="headline">
                <div class="headline_top">
                    <a class="back" href="{{ route('dashboard') }}">Назад</a>
                    <h1>Изменить товар</h1>
                </div>
                <form action="{{ route('posts.update', $post) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <label>Название:</label>
                    <input type="text" name="title" value="{{ $post->title }}" required>
                    <br>
                    <label>Цена:</label>
                    <input type="float" name="price" value="{{ $post->price }}" required>
                    <br>
                    <label>Описание:</label>
                    <textarea name="content" required>{{ $post->content }}</textarea>
                    <br>
                    <br>
                    <button type="submit">Обновить товар</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>