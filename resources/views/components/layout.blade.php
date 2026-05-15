<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nalar Muda</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-50 text-slate-800">

    <x-navbar />

    @isset($judul)
        <x-header>{{ $judul }}</x-header>
    @endisset

    <div class="max-w-6xl mx-auto px-6 pb-20">
        {{ $slot }}
    </div>

    <x-footer />

</body>
</html>