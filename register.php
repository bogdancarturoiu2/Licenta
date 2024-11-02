<?php include('functions.php'); ?>
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
            <div class="logo"><a href="index.php">UMFST <span>Connect</span><strong> .</strong></a></div>
            <ul class="nav-menu">
                <li><a href="login.php" class="login-register-btn">Login</a></li>
                <li><a href="register.php" class="login-register-btn">Signup</a></li>
            </ul>
            <div class="toggle-button">
                <i class="fa-solid fa-bars-progress"></i>
            </div>
        </div>
    </nav>

    <!--- ========== Register Form ========== --->
    <div class="container-login">
        <div class="container">
            <form method="post" action="register.php">
                <div class="wrapper-login">
                    <h1>Înregistrare</h1>
                    <div class="input-group">
                        <input type="text" name="name" placeholder="Nume" required />
                    </div>
                    <div class="input-group">
                        <input type="email" name="email" placeholder="Email" required />
                    </div>
                    <div class="input-group">
                        <input type="tel" name="phone_number" placeholder="Telefon" required />
                    </div>
                    <div class="input-group">
                        <input type="text" name="username" placeholder="Username" required />
                    </div>
                    <div class="input-group">
                        <input type="password" name="password_1" placeholder="Parola" required />
                    </div>
                    <div class="input-group">
                        <input type="password" name="password_2" placeholder="Confirmă parola" required />
                    </div>
                    <?php if (isset($_SESSION['success'])) : ?>
                        <div class="error success">
                            <?php
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                            ?>
                        </div>
                    <?php endif ?>
                    <?php echo show_error(); ?>
                    <div class="input-group">
                        <button type="submit" class="btn" name="reg_user">Înregistrare</button>
                    </div>
                    <div class="new-member">
                        Ai deja cont? <a href="login.php">Conectează-te aici.</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!--- ========== Footer Section ========== --->
    <footer class="footer">

        <div class="footer-left">
            <div class="logo"><a href="index.php">UMFST <span>Connect.</span></a></div>

            <p class="footer-links">
                <a href="login.php">Acasă</a>
                |
                <a href="login.php">Activități</a>
                |
                <a href="login.php">Calendar</a>
                |
                <a href="login.php">Noutăți</a>
                |
                <a href="login.php">Contact</a>
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

    <!--- ========== JS Script========== --->
    <script src="javascript/script.js"></script>
</body>

</html>