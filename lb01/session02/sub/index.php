<!DOCTYPE html>
<html lang="en">

<head>
    <title>BINUS University</title>
</head>

<body>
    <center>
        <h1>Storing Form data in Database</h1>
        <form action="insert.php" method="post">

            <p>
                <label for="firstName">Kode Matkul:</label>
                <input type="text" name="kode_matkul" id="kode_matkul">
            </p>


            <p>
                <label for="lastName">Nama Matkul:</label>
                <input type="text" name="nama_matkul" id="nama_matkul">
            </p>


            <p>
                <label for="Gender">Jam Matkul:</label>
                <input type="text" name="jam_matkul" id="jam_matkul">
            </p>


            <p>
                <label for="Address">Ruang Kelas:</label>
                <input type="text" name="ruang_kelas" id="ruang_kelas">
            </p>

            <input type="submit" value="Submit">
        </form>
    </center>
</body>

</html>