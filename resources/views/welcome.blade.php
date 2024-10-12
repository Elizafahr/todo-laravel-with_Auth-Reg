 <!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Мой сайт</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Главная <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <div class="nav-item">
                @if (Auth::check())
                    <!-- Если пользователь авторизован, отображается кнопка "Выход" -->
                    <a href="{{ route('logout') }}" class="btn btn-danger">Выход</a>
                @else
                    <!-- Если пользователь не авторизован, отображается кнопка "Авторизация" или "Регистрация" -->
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary">Регистрация</a>
                    @endif
                    <a href="{{ route('login') }}" class="btn btn-primary">Авторизация</a>
                @endif
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Добро пожаловать в todo-app!</h1>
            <p class="lead">
                <a href="/todos" class="btn btn-primary mt-5">Перейти к списку задач</a>

            </p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>


 