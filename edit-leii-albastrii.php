<?php
include "functions.php";
if (!administrator()) {
    header('location: login.php');
}
$id = $_GET["id"];

if (isset($_POST["submit"])) {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $specialization = $_POST['specialization'];
    $date = $_POST['date'];
    $hour = $_POST['hour'];
    $location = $_POST['location'];
    $sql = "UPDATE `leiialbastrii` SET `lastname`='$lastname',`firstname`='$firstname',`specialization`='$specialization',`date`='$date',`hour`='$hour', `location`='$location' WHERE id = $id";

    $result = mysqli_query($db, $sql);

    if ($result) {
        header("Location: leii-albastrii-admin.php?");
    } else {
        echo "Failed: " . mysqli_error($db);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>UMFST Connect - Editeaza echipa Leii Albastrii</title>
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #f97b22;">
        <h2> Editeaza echipa Leii Albastrii </h2>
    </nav>
    <div class="container">

        <?php
        $sql = "SELECT * FROM `leiialbastrii` WHERE id = $id LIMIT 1";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Nume:</label>
                        <input type="text" class="form-control" name="lastname" value="<?php echo $row['lastname'] ?>">
                    </div>

                    <div class="col">
                        <label class="form-label">Prenume:</label>
                        <input type="text" class="form-control" name="firstname" value="<?php echo $row['firstname'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Specializare:</label>
                        <input type="text" class="form-control" name="specialization" value="<?php echo $row['specialization'] ?>">
                    </div>

                    <div class="col">
                        <label class="form-label">Data:</label>
                        <input type="text" class="form-control" name="date" value="<?php echo $row['date'] ?>">
                    </div>
                </div>
                <div class="mb-3">

                    <div class="col">
                        <label class="form-label">Ora:</label>
                        <input type="text" class="form-control" name="hour" value="<?php echo $row['hour'] ?>">
                    </div>
                </div>

                <div class="mb-3">

                    <div class="col">
                        <label class="form-label">Locatia:</label>
                        <input type="text" class="form-control" name="location" value="<?php echo $row['location'] ?>">
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Update</button>
                    <a href="leii-albastrii-admin.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>