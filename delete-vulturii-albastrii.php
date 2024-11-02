<?php
include('functions.php');
$id = $_GET["id"];
$sql = "DELETE FROM `vulturiialbastrii` WHERE id = $id";
$result = mysqli_query($db, $sql);

if ($result) {
    header("Location: vulturii-albastrii-admin.php?");
} else {
    echo "Failed: " . mysqli_error($db);
}
