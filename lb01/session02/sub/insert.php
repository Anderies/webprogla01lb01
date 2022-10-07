<?php

require('config.php');

// if ($checkdata !== '') {
$kode_matkul =  $_REQUEST['kode_matkul'];
$nama_matkul = $_REQUEST['nama_matkul'];
$jam_matkul =  $_REQUEST['jam_matkul'];
$ruang_kelas = $_REQUEST['ruang_kelas'];
$sql = "INSERT INTO mata_kuliah  VALUES ('$kode_matkul',
            '$nama_matkul','$jam_matkul','$ruang_kelas')";
if (mysqli_query($conn, $sql)) {
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

    header('Location: select.php');
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
// }


// Close connection
mysqli_close($conn);
