<?php
include "functions.php";

if (!administrator()) {
    header('location: login.php');
}

if (isset($_POST["submit"])) {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $specialization = $_POST['specialization'];
    $date = $_POST['date'];
    $hour = $_POST['hour'];
    $location = $_POST['location'];

    $sql = "INSERT INTO `vulturiialbastrii`(`id`, `lastname`, `firstname`, `specialization`, `date`,`hour`,`location`) VALUES (NULL,'$lastname','$firstname','$specialization','$date','$hour','$location')";
    $result = mysqli_query($db, $sql);

    if ($result) {

        $_SESSION['success']  = "User creat cu succes!";
        header('location: vulturii-albastrii-admin.php');
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
    <title>UMFST Connect - Platformă multifuncțională activități extracurriculare pentru studenți</title>

    <!--- === CSS Stylesheet === --->
    <link rel="stylesheet" href="css/style.css">

    <!--- === FontAwesome Library === --->
    <script src="https://kit.fontawesome.com/cb3f20e303.js" crossorigin="anonymous"></script>

    <!--- === JQuerry Library === --->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!--- === OwlCarousel Library === --->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
</head>

<body>
    <!--- ========== NavBar Menu ========== --->
    <nav class="navbar-menu">
        <div class="container">
            <div class="logo"><a href="main-admin.php">UMFST <span>Connect</span><strong> .</strong></a></div>
            <ul class="nav-menu">
                <li><a href="main-admin.php">Acasă</a></li>
                <li><a href="activities-admin.php">Activități</a></li>
                <li><a href="calendar-admin.php">Calendar</a></li>
                <li><a href="create-user.php">Creare User</a></li>
                <li><a href="index.php?logout='1'" class="login-register-btn">Logout</a>
            </ul>
            <div class="toggle-button">
                <i class="fa-solid fa-bars-progress"></i>
            </div>
        </div>
    </nav>

    <!--- ========== Register User in Team ========== --->
    <section class="reg-team">
        <div class="registration-in-team">
            <header>Înscrie-te în echipă</header>
            <form action="vulturii-albastrii-admin.php" method="post" class="form">
                <div class="input-box">
                    <input type="text" placeholder="Nume" name="lastname" required />
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Prenume" name="firstname" required />
                </div>
                <div class="input-box">
                    <div class="select-box">
                        <select name="specialization">
                            <option hidden>Facultate</option>
                            <option>Facultatea de Medicină</option>
                            <option>Facultatea de Medicină Dentară</option>
                            <option>Facultatea de Farmacie</option>
                            <option>Facultatea de Inginerie</option>
                            <option>Facultatea de Științe și Litere</option>
                            <option>Facultatea de Economie și Drept</option>

                        </select>
                    </div>
                </div>
                <div class="column">
                    <div class="input-box">
                        <div class="select-box">
                            <select name="date">
                                <?php
                                $sql = "SELECT * FROM `football`";
                                $result = mysqli_query($db, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <option hidden>Data</option>
                                    <option><?php echo $row["data"] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="input-box">
                        <div class="select-box">
                            <select name="hour">
                                <?php
                                $sql = "SELECT * FROM `football`";
                                $result = mysqli_query($db, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <option hidden>Ora</option>
                                    <option><?php echo $row["ora"] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="input-box">
                    <div class="select-box">
                        <select name="location">
                            <?php
                            $sql = "SELECT * FROM `football`";
                            $result = mysqli_query($db, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <option hidden>Locația</option>
                                <option><?php echo $row["locatia"] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <?php if (isset($_SESSION['success'])) : ?>
                    <div class="error success">
                        <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        ?>
                    </div>
                <?php endif ?>
                <button type="submit" name="submit">Înscrie-te</button>
            </form>
        </div>

        <!--- Tabel Add User --->
        <div class="admin-pannel-match">
            <div class="container">
                <h2>Listă colegi înscriși</h2>
                <table class="content-table">
                    <thead>
                        <tr>
                            <th>Nume</th>
                            <th>Prenume</th>
                            <th>Specializare</th>
                            <th>Data</th>
                            <th>Ora</th>
                            <th>Locația</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `vulturiialbastrii`";
                        $result = mysqli_query($db, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row["lastname"] ?></td>
                                <td><?php echo $row["firstname"] ?></td>
                                <td><?php echo $row["specialization"] ?></td>
                                <td><?php echo $row["date"] ?></td>
                                <td><?php echo $row["hour"] ?></td>
                                <td><?php echo $row["location"] ?></td>
                                <td><a href="edit-vulturii-albastrii.php?id=<?php echo $row["id"] ?>"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a> &nbsp;
                                    <a href="delete-vulturii-albastrii.php?id=<?php echo $row["id"] ?>"><i class="fa-solid fa-trash fs-5"></i></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!--- ========== Footer Section ========== --->
    <footer class="footer">

        <div class="footer-left">
            <div class="logo"><a href="main-admin.php">UMFST <span>Connect.</span></a></div>

            <p class="footer-links">
                <a href="main-admin.php">Acasă</a>
                |
                <a href="activities-admin.php">Activități</a>
                |
                <a href="calendar-admin.php">Calendar</a>
                |
                <a href="create-user.php">Creare User</a>
            </p>

            <p class="footer-copyright">Copyright © 2023 <strong>Cărturoiu Bogdan</strong> All rights reserved</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa-sharp fa-solid fa-location-dot"></i>
                <p><span>Str. Nicolae Iorga</span>
                    Târgu-Mureș, Mureș</p>
            </div>

            <div>
                <i class="fa-solid fa-phone"></i>
                <p><a href="tel:+40265-233212">+40265-233212</a></p>
            </div>
            <div>
                <i class="fa-solid fa-envelope"></i>
                <p><a href="mailto:contact@umfstconnect.ro">contact@umfstconnect.ro</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-about">
                <span>Despre noi</span>
                <strong>UMFST Connect</strong> este o platformă dedicată special studenților care fac parte
                din cadrul UMFST Târgu-Mureș și vor să participe la activități sportive în afară orelor de curs.
            </p>
            <div class="footer-icons">
                <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://www.google.com/" target="_blank"><i class="fa-brands fa-google"></i></a>
            </div>
        </div>
    </footer>

    <!--- ========== JS Script ========== --->
    <script src="javascript/script.js"></script>

</body>

</html>