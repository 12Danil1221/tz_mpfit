<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show on ID Post</title>
    @livewire('main-style')
</head>

<mein>
    <div class="menu-container">
        <button class="menu-button">Меню</button>
        <nav class="menu">
            <ul>
                <li><a href="{{ route('dashboard') }}">Назат</a></li>
            </ul>
        </nav>
    </div>

    <h1>Show page, {{ $post->title }}!</h1>
    <div class="container" style="position:relative; left:2rem; padding:1rem; text-align: center;
    width: 150px; height: 220px;">
        <div style="position:absolute">
            <h2>{{ $post->title }}</h2>
            <img src="{{ $post->image }}" alt="image">
            <hr>
            <p>Цена: {{ $post->price }}$</p>
            <hr>
            <p>Категория: {{ $post->category }}</p>
            <hr>
            <p>Описание: {{ $post->content }}</p>
            <br>
            <button type="submit">Buy</button>
        </div>
    </div>
    <br>
</mein>
<footer style="padding-top: 6rem;">
    <a href="{{ route('dashboard') }}">Main Posts</a>
    <br>
    <hr>
</footer>
@livewire('main-script')

</html>