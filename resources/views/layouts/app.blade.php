<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Prak Web Lanjut' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-lilac {
            background-color: #dcd6f7 !important;
        }
        .bg-lilac-soft {
            background-color: #f4f1de !important;
        }
        .text-lilac-dark {
            color: #4a3e6d !important;
        }
        .navbar-lilac {
            background-color: #b8a7ea !important;
        }
        .btn-lilac {
            background-color: #8a70d6;
            color: white;
            border: none;
        }
        .btn-lilac:hover {
            background-color: #7353c7;
            color: white;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100 bg-light">

    {{-- Memanggil Komponen Navbar --}}
    @include('components.navbar')

    <main class="container my-5 flex-grow-1">
        @yield('content')
    </main>

    {{-- Memanggil Komponen Footer --}}
    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>