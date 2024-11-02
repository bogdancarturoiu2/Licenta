<?php
include('functions.php');

if (!administrator()) {
    header('location: login.php');
}

if (isset($_POST["submit"])) {
    $echipa1 = $_POST['echipa1'];
    $echipa2 = $_POST['echipa2'];
    $data = $_POST['data'];
    $ora = $_POST['ora'];
    $locatia = $_POST['locatia'];

    $sql = "INSERT INTO `football`(`id`, `echipa1`, `echipa2`, `data`, `ora`,`locatia`) VALUES (NULL,'$echipa1','$echipa2','$data','$ora','$locatia')";

    $result = mysqli_query($db, $sql);

    if ($result) {
        header("Location: football-admin.php?W");
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

    <title>UMFST Connect - Adaugă Eveniment de Fotbal</title>
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #f97b22;">
        <h2> Adaugă Eveniment Fotbal </h2>
    </nav>
    <div class="container">
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:750px; min-width:300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Echipa 1:</label>
                        <input type="text" class="form-control" name="echipa1">
                    </div>

                    <div class="col">
                        <label class="form-label">Echipa 2:</label>
                        <input type="text" class="form-control" name="echipa2">
                    </div>
                </div>
                <div class=" row mb-3">
                    <div class="col">
                        <label class="form-label">Data:</label>
                        <input type="date" class="form-control" name="data">
                    </div>

                    <div class="col">
                        <label class="form-label">Ora:</label>
                        <input type="time" class="form-control" name="ora">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="col">
                        <label class="form-label">Locația:</label>
                        <input type="text" class="form-control" name="locatia">
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="football-admin.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>