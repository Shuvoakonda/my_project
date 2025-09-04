<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts & Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- App CSS/JS -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
    @endif
</head>

<body class="bg-light text-dark d-flex flex-column min-vh-100">

    {{-- Header Navigation --}}
    @if (Route::has('login'))
        <header class="container py-3">
            <div class="d-flex justify-content-end gap-2">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-outline-dark">
                        <i class="fas fa-tachometer-alt me-1"></i> Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-dark">
                        <i class="fas fa-sign-in-alt me-1"></i> Log in
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-dark text-white">
                            <i class="fas fa-user-plus me-1"></i> Register
                        </a>
                    @endif
                @endauth
            </div>
        </header>
    @endif

    {{-- Main Content --}}
    <main class="container d-flex flex-column flex-lg-row align-items-center justify-content-center flex-grow-1 py-5">
        <div class="card shadow-sm w-100 w-lg-75">
            <div class="card-body">
                <h1 class="card-title mb-3">Let's get started</h1>
                <p class="text-secondary mb-4">Laravel has an incredibly rich ecosystem.<br>We suggest starting with the
                    following.</p>

                <ul class="list-unstyled mb-4">
                    <li class="mb-2 d-flex align-items-center">
                        <i class="fas fa-circle text-secondary me-2" style="font-size: 0.5rem;"></i>
                        <a href="https://laravel.com/docs" target="_blank"
                            class="text-danger text-decoration-underline">
                            Documentation <i class="fas fa-arrow-up-right-from-square ms-1"></i>
                        </a>
                    </li>
                </ul>

                <a href="https://cloud.laravel.com" target="_blank" class="btn btn-dark text-white"><i
                        class="fas fa-cloud-upload-alt me-1"></i> Deploy now</a>
            </div>
        </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

</body>

</html>
