<?php
include('functions.php');
$id = $_GET["id"];
$sql = "DELETE FROM `basket` WHERE id = $id";
$result = mysqli_query($db, $sql);

if ($result) {
    header("Location: basket-admin.php?");
} else {
    echo "Failed: " . mysqli_error($db);
}
