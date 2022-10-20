<?php
$server = "localhost";
$db_username = "root";
$db_password = "";
$database = "new_library";

$conf = mysqli_connect(
    $server,
    $db_username,
    $db_password,
    $database
);

// INSERT IN PHP
// $sql = "INSERT INTO books(author, title, type, year)
//  VALUES('Anderies','M2B','Fiction','2011');";
// if (mysqli_query($conf, $sql)) {
//     echo "Records inserted successfully.";
// } else {
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($conf);
// }

// READ IN PHP
// $sql = "SELECT * FROM books";
// $result = mysqli_query($conf, $sql);
// while ($row = mysqli_fetch_array($result)) {
//     // var_dump($row[0]);
//     echo $row['author'];
//     echo '<br>';
//     echo $row['title'];
//     echo '<br>';
//     echo $row['type'];
//     echo '<br>';
//     echo $row['year'];
// }

// update

// $sql = "UPDATE books SET type='Action' WHERE year='1857'";
// if (mysqli_query($conf, $sql)) {
//     echo "Records were update sucessfully";
// } else {
//     echo "Records update failed";
// }

$sql_delete = "DELETE FROM books WHERE year='1857'";
if (mysqli_query($conf, $sql_delete)) {
    echo "Records were delete sucessfully";
} else {
    echo "Records were deleted";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Author</th>
                <th scope="col">Title</th>
                <th scope="col">Type</th>
                <th scope="col">Year</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM books";
            $result = mysqli_query($conf, $sql);


            while ($row = mysqli_fetch_array($result)) {
                //     echo '
                //     <tr>
                //     <th scope="col">{$txt1}</th>
                //     <th scope="col">First</th>
                //     <th scope="col">Last</th>
                //     <th scope="col">Handle</th>
                // </tr>';
                echo "<tr>";
                echo "<th scope='col'>{$row['author']}</th>";
                echo "<th scope='col'>{$row['title']}</th>";
                echo "<th scope='col'>{$row['type']}</th>";
                echo "<th scope='col'>{$row['year']}</th>";
                echo "</tr>";
            }



            ?>
        </tbody>
    </table>
</body>

</html>