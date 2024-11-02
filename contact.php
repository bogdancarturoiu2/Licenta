<?php
include('functions.php');
if (!forcelogin()) {
    header('location: login.php');
}

if(!empty($_POST["sendmessage"])) {
	$lastname = $_POST["lastname"];
    $firstname = $_POST["firstname"];
	$phone = $_POST["phone"];
    $email = $_POST["email"];
	$message = $_POST["message"];
	$toEmail = "bogdancarturoiu2@yahoo.com";
  
	$mailHeaders = "Nume: " . $lastname .
	"\r\n Prenume: ". $firstname  . 
	"\r\n Telefon: ". $phone  . 
    "\r\n Email: ". $email  . 
	"\r\n Mesaj: " . $message . "\r\n";

	if(mail($toEmail, $firstname, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	}
}
?>
<?php

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

    <!--- ========== Page Contact Form Section ========== --->
    <section class="page-contact">
        <div class="container">
            <h1 class="title">Trimite-ne un mesaj!</h1>
            <div class="contact-form-page">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1372.0192604461763!2d24.56733581463339!3d46.546924799999985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474bb799a95cb031%3A0xfb6a4dcbb86689ce!2sFacultatea%20de%20Inginerie%20%C8%99i%20Tehnologia%20Informa%C8%9Biei-%20UMFST%20%22G.%20E.%20Palade%22!5e0!3m2!1sen!2sro!4v1685559816885!5m2!1sen!2sro" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="contact-form">
                    <form action="contact.php" method="post">
                        <input type="text" class="contact-text" name="lastname" placeholder="Nume">
                        <input type="text" class="contact-text" name="firstname" placeholder="Prenume">
                        <input type="text" class="contact-text" name="phone" placeholder="Telefon">
                        <input type="email" class="contact-text" name="email" placeholder="Email">
                        <textarea placeholder="Mesaj" class="contact-textarea" name="message"></textarea>
                        <button type="submit" class="contact-form-btn" name="sendmessage">Trimite</button>
                        <?php if (isset($_SESSION['success'])) : ?>
                        <div class="error success">
                            <?php
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                            ?>
                        </div>
                    <?php endif ?>
                    <?php echo show_error(); ?>
                    </form>
                </div>
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