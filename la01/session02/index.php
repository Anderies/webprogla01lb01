<?php
$server = "localhost";
$db_username = "root";
$db_password = "";
$database = "publications";

$conf = mysqli_connect($server, $db_username, $db_password, $database);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php
    if (mysqli_connect_error()) {
        throw new Exception("MySQL connection error " . mysqli_connect_error());
    } else {
        echo '<h1>Berhasil Connect</h1>';
    }


    echo '<form method="post" action="">';
    echo '<button type="submit" class="btn btn-primary"  name="submit">Insert</button>';
    echo '</form>';
    // do what you need
    // insert or what ever
    // don't forget validation check of input data

    if (isset($_POST['submit'])) {
        $sql = "INSERT INTO classics(author, title, type, year)
         VALUES('Charles Dickens','Little Dorrit','Fiction','1857');";
        if (mysqli_query($conf, $sql)) {
            echo "Records inserted successfully.";
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conf);
        }
    }


    // echo '';

    ?>




</body>

</html>