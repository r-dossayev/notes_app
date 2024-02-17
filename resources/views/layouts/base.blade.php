<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Notes</title>
    <style>
        body {
            background-color: #FFEBEE
        }

        .card {
            width: 400px;
            background-color: #fff;
            border: none;
            border-radius: 12px
        }

        label.radio {
            cursor: pointer;
            width: 100%
        }

        label.radio input {
            position: absolute;
            top: 0;
            left: 0;
            visibility: hidden;
            pointer-events: none
        }

        label.radio span {
            padding: 7px 14px;
            border: 2px solid #eee;
            display: inline-block;
            color: #039be5;
            border-radius: 10px;
            width: 100%;
            height: 48px;
            line-height: 27px
        }

        label.radio input:checked + span {
            border-color: #039BE5;
            background-color: #81D4FA;
            color: #fff;
            border-radius: 9px;
            height: 48px;
            line-height: 27px
        }

        .form-control {
            margin-top: 10px;
            height: 48px;
            border: 2px solid #eee;
            border-radius: 10px
        }

        .form-control:focus {
            box-shadow: none;
            border: 2px solid #039BE5
        }

        .agree-text {
            font-size: 12px
        }

        .terms {
            font-size: 12px;
            text-decoration: none;
            color: #039BE5
        }

        .confirm-button {
            height: 50px;
            border-radius: 10px
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">Register</a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('notes.create')}}">Notes create</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <button class="nav-link btn" type="submit">Logout</button>
                        </form>
                    </li>
                @endauth
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
@yield('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>
</html>
