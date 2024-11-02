<?php
include('./functions.php');
if (!forcelogin()) {
    header('location: login.php');
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
            <div class="logo"><a href="main-user.php">UMFST <span>Connect</span><strong> .</strong></a></div>
            <ul class="nav-menu">
                <li><a href="main-user.php">Acasă</a></li>
                <li><a href="activities-user.php">Activități</a></li>
                <li><a href="calendar-user.php">Calendar</a></li>
                <li><a href="news.php">Noutăți</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php?logout='1'" class="login-register-btn">Logout</a>
            </ul>
            <div class="toggle-button">
                <i class="fa-solid fa-bars-progress"></i>
            </div>
        </div>
    </nav>

    <!--- ========== Teams Football Section ========== --->
    <section class="teams" id="teams">
        <div class="container">
            <h2 class="title">Echipe de fotbal</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="https://cdn-icons-png.flaticon.com/128/1540/1540498.png" alt="">
                        <div class="text">Vulturii Albaștrii</div>
                        <a href="vulturii-albastrii-user.php" class="btn">Înscrie-te</a>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="https://cdn-icons-png.flaticon.com/128/919/919459.png" alt="">
                        <div class="text">Vulturii Roșii</div>
                        <a href="" class="btn">Înscrie-te</a>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="https://cdn-icons-png.flaticon.com/128/899/899924.png" alt="">
                        <div class="text">Vulturii Verzi</div>
                        <a href="" class="btn">Înscrie-te</a>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="https://cdn-icons-png.flaticon.com/128/2718/2718324.png" alt="">
                        <div class="text">Șoimii Albaștrii</div>
                        <a href="" class="btn">Înscrie-te</a>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="https://cdn-icons-png.flaticon.com/128/919/919408.png" alt="">
                        <div class="text">Șoimii Roșii</div>
                        <a href="" class="btn">Înscrie-te</a>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="https://cdn-icons-png.flaticon.com/128/899/899921.png" alt="">
                        <div class="text">Șoimii Verzi</div>
                        <a href="" class="btn">Înscrie-te</a>
                    </div>
                </div>
            </div>
        </div>
        <!--- Tabel View Match --->
        <div class="admin-pannel-match">
            <div class="container">
                <h2>Calendar Competiții Fotbal</h2>
                <table class="content-table">
                    <thead>
                        <tr>
                            <th>Echipa 1</th>
                            <th>VS</th>
                            <th>Echipa 2</th>
                            <th>Data</th>
                            <th>Ora</th>
                            <th>Locația</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `football`";
                        $result = mysqli_query($db, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row["echipa1"] ?></td>
                                <td>VS</td>
                                <td><?php echo $row["echipa2"] ?></td>
                                <td><?php echo $row["data"] ?></td>
                                <td><?php echo $row["ora"] ?></td>
                                <td><?php echo $row["locatia"] ?></td>
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
            <div class="logo"><a href="main-user.php">UMFST <span>Connect.</span></a></div>

            <p class="footer-links">
                <a href="main-user.php">Acasă</a>
                |
                <a href="activities-user.php">Activități</a>
                |
                <a href="calendar-user.php">Calendar</a>
                |
                <a href="news.php">Noutăți</a>
                |
                <a href="contact.php">Contact</a>
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