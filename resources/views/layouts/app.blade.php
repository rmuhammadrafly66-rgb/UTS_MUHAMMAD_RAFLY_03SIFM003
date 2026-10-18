<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MÖBEL & CO - Katalog Furniture Skandinavia</title>
    <!-- CSS Bootstrap Lokal -->
    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">
    <style>
        :root {
            --ikea-blue: #0058a3;
            --ikea-yellow: #ffda1a;
            --bg-neutral: #f4f4f4;
        }

        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            background-color: var(--bg-neutral);
            color: #111;
        }

        .navbar-ikea {
            background-color: var(--ikea-blue);
        }

        .ikea-logo {
            background-color: var(--ikea-yellow);
            color: var(--ikea-blue);
            font-weight: 900;
            letter-spacing: -1px;
            padding: 4px 16px;
            border-radius: 4px;
            font-size: 1.5rem;
        }

        .ikea-card {
            border: none;
            border-radius: 16px;
            background: #ffffff;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }
        .ikea-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 32px rgba(0,0,0,0.12) !important;
        }

        .ikea-price-badge {
            background-color: var(--ikea-yellow);
            color: #000;
            font-weight: 900;
            font-size: 1.25rem;
            padding: 4px 12px;
            border-radius: 4px;
            display: inline-block;
        }

        .category-badge {
            background-color: #111;
            color: #fff;
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            padding: 4px 10px;
            border-radius: 4px;
        }

        .btn-ikea-blue {
            background-color: var(--ikea-blue);
            color: #fff;
            font-weight: 700;
            border: none;
            border-radius: 50px;
            padding: 8px 20px;
            transition: all 0.2s;
        }
        .btn-ikea-blue:hover {
            background-color: #00437d;
            color: #fff;
        }

        .btn-ikea-yellow {
            background-color: var(--ikea-yellow);
            color: #111;
            font-weight: 800;
            border: none;
            border-radius: 50px;
            padding: 12px 28px;
            transition: all 0.2s;
        }
        .btn-ikea-yellow:hover {
            background-color: #e5c310;
            color: #000;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Header Navbar -->
    <nav class="navbar navbar-dark navbar-ikea py-3 shadow-sm sticky-top">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand d-flex align-items-center gap-2 text-decoration-none" href="{{ route('furniture.index') }}">
                <span class="ikea-logo">MÖBEL</span>
                <span class="text-white fw-bold fs-5 tracking-wide">DESIGN</span>
            </a>
            <span class="text-white-50 small d-none d-md-inline fw-semibold">Inspirasi Perabot Rumah Skandinavia</span>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow-1">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center text-md-start d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
            <div>
                <h6 class="fw-bold text-warning mb-1">MÖBEL DESIGN SWEDEN</h6>
                <p class="small text-secondary mb-0">Solusi perabot fungsional, estetik, dan terjangkau.</p>
            </div>
            <p class="small text-secondary mb-0">&copy; 2026 MÖBEL Design. All rights reserved.</p>
        </div>
    </footer>

    <!-- JS Bootstrap Lokal -->
    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>