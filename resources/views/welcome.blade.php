<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        html {
            background: url(https://www.ultraimagehub.com/wallpapers/tr:flp-false,gx-1,gy-1,q-75,rh-3264,rw-5824,th-1080,tw-1920/1227187375927722034.jpeg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        body {
            background: none;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <header class="text-center mb-4">
            <h1 class="display-4">Investigación</h1>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{ route('login') }}"
                                class="nav-link text-sm text-gray-700 dark:text-gray-500 underline">Ingresar</a></li>
                        <li class="nav-item"><a href="{{ route('register') }}"
                                class="nav-link ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrarse</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            <section class="content text-center">
                <h2 class="mb-4">Investigación Formativa</h2>
                <p>Consumo de una API con implementación en Laravel.<br>
                    Realizado por: Andrés Castro
                </p>
            </section>
        </main>

        <footer class="text-center mt-5 py-3 bg-dark text-white">
            <p>&copy; 2024 Your Company. All rights reserved.</p>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
