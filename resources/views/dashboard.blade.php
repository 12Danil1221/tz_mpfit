<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @livewire('main-style')
    @livewireStyles
</head>
<header class="header">
    <nav>
        <ul>
            <a href="{{ route('dashboard') }}">Главная</a>
            <a href="{{ route('orders.order_show') }}">Все заказы</a>
            <a href="">О нас</a>
            <div class="menu-container">
                <button class="menu-button">Меню</button>
                <nav class="menu">
                    <ul>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit">Выход</button>
                        </form>
                    </ul>
                </nav>
            </div>
        </ul>
    </nav>
    <hr>
</header>
<main>
    <section class="content">
        <h1>Приветствуем {{ Auth::user()->name }} на главной странице!</h1>
        @livewire('post-list')

        @livewire('flex-box')

        @livewireScripts
    </section>
</main>
<footer class="footer">
    @livewire('footer')
    <p>&copy; 2025 My Web Site</p>
</footer>
@livewire('main-script')

</html>