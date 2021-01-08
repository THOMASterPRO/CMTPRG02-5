<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Game Database</title>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body id="main">
    <header>
        <div>
            <nav class="navbar navbar-inverse border-radius:none">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a class="{{ Request::path() === '/' ? 'current_page_item' : ''}}" href="/">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="{{ Request::path() === 'games' ? 'current_page_item' : ''}}" href="games">Games</a>
                        </li>

                        <li class="nav-item">
                            <a class="{{ Request::path() === 'profile' ? 'current_page_item' : ''}}" href="profile">Profile</a>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>
    </header>

    <main class="py-4">
        @yield ('content')

    </main>
</body>
</html>
