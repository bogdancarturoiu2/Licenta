<?php
include('functions.php');
$id = $_GET["id"];
$sql = "DELETE FROM `football` WHERE id = $id";
$result = mysqli_query($db, $sql);

if ($result) {
    header("Location: football-admin.php?");
} else {
    echo "Failed: " . mysqli_error($db);
}
