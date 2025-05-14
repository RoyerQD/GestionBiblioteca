<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Biblioteca</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav>
        <a href="{{ route('books.index') }}">Libros</a> |
        <a href="{{ route('loans.index') }}">Préstamos</a> |
        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir</a>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</body>
</html>
