<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
    <title>Challenges</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/">Lista de Desafios</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/challenges">Challenges</a></li>
{{--                <li class="nav-item"><a class="nav-link" href="#!">About</a></li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>--}}
{{--                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                        <li><a class="dropdown-item" href="#!">All Products</a></li>--}}
{{--                        <li><hr class="dropdown-divider" /></li>--}}
{{--                        <li><a class="dropdown-item" href="#!">Popular Items</a></li>--}}
{{--                        <li><a class="dropdown-item" href="#!">New Arrivals</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
            </ul>
            <i class="bi-cart-fill me-1"></i>
            <a target="_blank" href="https://github.com/Gustavo3g"><span class="badge bg-dark text-white ms-1 rounded-pill">Github</span></a>

        </div>
    </div>
</nav>
@yield('content')
</body>
</html>
