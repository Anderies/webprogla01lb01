<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div style="width:50%" class="mx-auto">
        <nav class="navbar navbar-dark bg-dark d-flex justify-content-around mx-auto mt-3">
            <a href="/exhome" class="nav-link active" style="color:white;">Home</a>
            <a href="/ex-profile" class="nav-link" style="color:white;">Profile</a>
            <a href="/ex-contact" class="nav-link" style="color: white;">Contact US</a>
        </nav>

        <h3>Mahasiswa Profile : </h3>
        <div class="flexing">
            <a href="/mahasiswa/anderies">Anderies</a>
            <a href="/mahasiswa/joko">Joko</a>
        </div>
    </div>

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>