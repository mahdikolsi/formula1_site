<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formula 1 Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    @vite(['resources/css/custom-theme.css', 'resources/js/app.js'])
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('storage/logoo.png') }}" alt="F1 Logo" class="navbar-logo">
            </a>
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
                <a class="nav-link" href="{{ route('drivers') }}">Drivers</a>
                <a class="nav-link" href="{{ route('teams') }}">Teams</a>
                <a class="nav-link" href="{{ route('schedule') }}">Schedule</a>
                <a class="nav-link" href="{{ route('contact.index') }}">Contact</a>
                <a class="nav-link" href="{{ route('standings.index') }}">Standings</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer class="footer">
        <div class="container">
            <div class="footer-nav">
                <span>&copy; {{ date('Y') }} Formula 1 Website. All rights reserved.</span>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</body>

</html>
