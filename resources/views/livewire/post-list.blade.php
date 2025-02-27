<div class="container">
    <div style="position:relative; left:1rem; display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 5rem;">
        {{-- In work, do what you enjoy. --}}
        @foreach ($posts as $post)
        <div class="container" style="border: 1px solid rgb(205, 170, 125); text-align: center;
    width: 12rem; height: 20rem;">
            <h2>{{ $post->title }}</h2>
            <img src="{{ $post->image }}" alt="1image">
            <p>{{ $post->price }} руб.</p>
            <br>
            <a href="{{ route('posts.show', $post) }}">Подробнее</a>
            <hr>
            <a href="{{ route('orders.order', $post) }}">Заказать товар</a>
            <hr>
            <a href="{{ route('posts.edit', $post) }}">Изменить</a>
            <br>
            <br>
            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit">Удалить Пост</button>
            </form>
        </div>
        @endforeach
    </div>
</div>