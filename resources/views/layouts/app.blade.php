<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Site d\'Apprentissage')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Administration</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content') 
    </main>

    <footer>
        
        <p>&copy; 2025 Mon Site d'Apprentissage</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>