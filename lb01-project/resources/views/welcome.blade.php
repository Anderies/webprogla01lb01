<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/app.css">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <a href="/hello" class="nav-link">go to hello page</a>
    <a href="/profile" class="nav-link">go to profile page</a>
    <h1>Hello Class LA01</h1>
    
    <p>List Wisata : </p>
    <div>
        <a href="/wisata/candi-borobudur">Candi Borobudur</a>
        <a href="/wisata/labuan-bajo">Labuan Bajo</a>
    </div>

    <!-- <p>List Mahasiswa : </p>
    <div style="display: flex;flex-direction:column;">
        <a href="/mahasiswa/anderies">Anderies</a>
        <a href="/mahasiswa/joko">Joko</a>
        <a href="/mahasiswa/budi">Budi</a>
    </div> -->

</body>

</html>