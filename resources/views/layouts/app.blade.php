<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpConstruction - @yield('title', 'News Management')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>
<body>
    <header class="bg-light py-3 mb-4">
        <div class="container">
            <h3 class="text-center">UpConstruction News</h3>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-light py-3 mt-4">
        <div class="container text-center">
            <p>&copy; {{ date('Y') }} UpConstruction. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>