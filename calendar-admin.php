<?php
include('functions.php');

if (!administrator()) {
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

    <!--- ========== Calendar Section ========== --->
    <section class="calendar-section">
        <div class="container">
            <div class="calendar">
                <h2 class="title">Calendar competițional</h2>
                <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Europe%2FBucharest&src=Ym9nZGFuY2FydHVAZ21haWwuY29t&src=cm8ucm9tYW5pYW4jaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%234285F4&color=%237986CB" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
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