<?php
include('functions.php');
$id = $_GET["id"];
$sql = "DELETE FROM `leiialbastrii` WHERE id = $id";
$result = mysqli_query($db, $sql);

if ($result) {
    header("Location: leii-albastrii-admin.php?");
} else {
    echo "Failed: " . mysqli_error($db);
}
