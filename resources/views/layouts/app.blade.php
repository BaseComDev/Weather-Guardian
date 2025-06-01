<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Weather Guardian</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        body {
            background-image: url('https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1400&q=80');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            color: white;
        }

        .navbar {
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }

        .hero-section {
            padding-top: 100px;
            padding-bottom: 50px;
        }

        .hero-title {
            font-size: 2.8rem;
            font-weight: 700;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .btn-sky {
            background-color: #03a9f4;
            color: white;
        }

        .btn-weather {
            background-color: #ff9800;
            color: white;
        }

        .stats-card {
            background-color: rgba(255, 255, 255, 0.85);
            color: #333;
            border-radius: 0.75rem;
            padding: 1.2rem;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .stat-title {
            font-size: 1rem;
            font-weight: 500;
        }

        .stat-value {
            font-size: 1.4rem;
            font-weight: bold;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold text-white" href="#">☁️ WeatherGuardian</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link text-white" href="#">Features</a></li>
                <!-- <li class="nav-item"><a class="nav-link text-white" href="#">Pricing</a></li> -->
                <!-- <li class="nav-item"><a class="nav-link text-white" href="#">Changelog</a></li> -->
                <li class="nav-item"><a class="nav-link text-white" href="#">Contact</a></li>

                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero-section text-center container">
    <h1 class="hero-title mb-3">Live. Alert. Protect.<br>Gujranwala's Weather, Simplified.</h1>
    <p class="mb-4 fs-5">Your journey to hyperlocal weather safety starts here.</p>
    <div class="d-flex justify-content-center gap-3">
        <form action="/weather" method="GET">
    <input type="text" name="city" placeholder="Enter City">
    <button type="submit">Check Weather</button>
</form>

        <!-- <button class="btn btn-sky px-4 py-2">Get Started</button>
        <button class="btn btn-weather px-4 py-2">Learn More</button> -->
    </div>
</section>

<!-- Stats Cards -->
<section class="container pb-5">
    <!-- <div class="row g-4 justify-content-center">
        <div class="col-md-3 col-sm-6">
            <div class="stats-card">
                <div class="stat-title">Current Temp</div>
                <div class="stat-value">41°C</div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="stats-card">
                <div class="stat-title">Humidity</div>
                <div class="stat-value">38%</div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="stats-card">
                <div class="stat-title">Wind</div>
                <div class="stat-value">13 km/h</div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="stats-card">
                <div class="stat-title">Air Quality</div>
                <div class="stat-value">Moderate</div>
            </div>
        </div>
    </div> -->
    <div>
        @yield('content')
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
