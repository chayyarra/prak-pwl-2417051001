<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

    <div class="bg-white p-8 rounded-2xl shadow-md w-full max-w-xs flex flex-col items-center">
        <!-- Lingkaran Avatar Profile -->
        <div class="w-32 h-32 bg-gray-100 rounded-full flex items-center justify-center mb-8 border-2 border-gray-300">
            <svg class="w-20 h-20 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
            </svg>
        </div>

        <!-- Kotak Informasi -->
        <div class="w-full space-y-4">
            <div class="bg-gray-200 py-2.5 px-4 rounded-md text-center font-medium text-gray-800">
                Nama: {{ $nama }}
            </div>
            <div class="bg-gray-200 py-2.5 px-4 rounded-md text-center font-medium text-gray-800">
                Kelas: {{ $kelas }}
            </div>
            <div class="bg-gray-200 py-2.5 px-4 rounded-md text-center font-medium text-gray-800">
                NPM: {{ $npm }}
            </div>
        </div>
    </div>

</body>
</html>