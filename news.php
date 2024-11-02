<?php
include('functions.php');
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
    <!--- ========== Scroll Up Button ========== --->
    <div class="up-button">
        <i class="fa-solid fa-circle-up"></i>
    </div>
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

    <!--- ========== News Section ========== --->
    <div class="blog-container">
        <div class="container">
            <div class="blog-content blog">
                <div class="title-blog">
                    <h2>Noutăți</h2>
                    <p>Află mai multe detalii despre competiții citind noutățile de mai jos</p>
                </div>
                <div class="cards-blog">
                    <div class="card-blog">
                        <div class="image-blog">
                            <img src="https://plus.unsplash.com/premium_photo-1685055940245-0f4b3fb736ce?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8Zm9vdGJhbGx8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=600&q=60">
                        </div>
                        <div class="blog-article">
                            <h4>Titlul unu</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna incididunt ut labore et dolore magna aliqua</p>
                        </div>
                        <div class="blog-view">
                            <a href="" class="button">Citește mai mult</a>
                        </div>
                        <div class="posted-date">
                            <p>Postat la 12 iulie 2023</p>
                        </div>
                    </div>
                    <div class="card-blog">
                        <div class="image-blog">
                            <img src="https://images.unsplash.com/photo-1622279457486-62dcc4a431d6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8dGVubmlzfGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60">
                        </div>
                        <div class="blog-article">
                            <h4>Titlul doi</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna incididunt ut labore et dolore magna aliqua</p>
                        </div>
                        <div class="blog-view">
                            <a href="" class="button">Citește mai mult</a>
                        </div>
                        <div class="posted-date">
                            <p>Postat la 13 iulie 2023</p>
                        </div>
                    </div>
                    <div class="card-blog">
                        <div class="image-blog">
                            <img src="https://images.unsplash.com/photo-1554068865-24cecd4e34b8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dGVubmlzfGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60">
                        </div>
                        <div class="blog-article">
                            <h4>Titlul trei</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna incididunt ut labore et dolore magna aliqua</p>
                        </div>
                        <div class="blog-view">
                            <a href="" class="button">Citește mai mult</a>
                        </div>
                        <div class="posted-date">
                            <p>Postat la 14 iulie 2023</p>
                        </div>
                    </div>
                    <div class="card-blog">
                        <div class="image-blog">
                            <img src="https://images.unsplash.com/photo-1547347298-4074fc3086f0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fHZvbGVpfGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60">
                        </div>
                        <div class="blog-article">
                            <h4>Titlul patru</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna incididunt ut labore et dolore magna aliqua</p>
                        </div>
                        <div class="blog-view">
                            <a href="" class="button">Citește mai mult</a>
                        </div>
                        <div class="posted-date">
                            <p>Postat la 15 iulie 2023</p>
                        </div>
                    </div>
                    <div class="card-blog">
                        <div class="image-blog">
                            <img src="https://images.unsplash.com/photo-1615885656388-e0dc3a53c72d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjd8fHBpbmclMjBwb25nfGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60">
                        </div>
                        <div class="blog-article">
                            <h4>Titlul cinci</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna incididunt ut labore et dolore magna aliqua</p>
                        </div>
                        <div class="blog-view">
                            <a href="" class="button">Citește mai mult</a>
                        </div>
                        <div class="posted-date">
                            <p>Postat la 16 iulie 2023</p>
                        </div>
                    </div>
                    <div class="card-blog">
                        <div class="image-blog">
                            <img src="https://img.freepik.com/free-photo/amateur-football-concept-with-match-scene_23-2147833397.jpg?w=1800&t=st=1685986228~exp=1685986828~hmac=a072dc7e82357eee05b4d7fcb2552d6d87d964036eeecbd415ddde9da5d71076">
                        </div>
                        <div class="blog-article">
                            <h4>Titlul sase</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna incididunt ut labore et dolore magna aliqua</p>
                        </div>
                        <div class="blog-view">
                            <a href="" class="button">Citește mai mult</a>
                        </div>
                        <div class="posted-date">
                            <p>Postat la 17 iulie 2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--- ========== Footer Section ========== --->
    <footer class="footer">

        <div class="footer-left">
            <div class="logo"><a href="#">UMFST <span>Connect.</span></a></div>

            <p class="footer-links">
                <a href="#main">Acasă</a>
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