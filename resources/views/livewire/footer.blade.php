<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="footer">
        <br>
        <footer style="display:flex; justify-content: space-between; grid-template-columns: repeat(3, 1fr); gap: 20px;">
            <a href="{{ route('dashboard') }}">Главная</a>
            <a href="{{ route('orders.order_show') }}">Все заказы</a>
            <a href="{{ route('posts.create') }}">Создать товар</a>
        </footer>
    </div>
</div>