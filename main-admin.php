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
    <!--- ========== Scroll Up Button ========== --->
    <div class="up-button">
        <i class="fa-solid fa-circle-up"></i>
    </div>

    <!--- ========== NavBar Menu ========== --->
    <nav class="navbar-menu">
        <div class="container">
            <div class="logo"><a href="#main">UMFST <span>Connect</span><strong> .</strong></a></div>
            <ul class="nav-menu">
                <li><a href="#main">Acasă</a></li>
                <li><a href="#activities">Activități</a></li>
                <li><a href="calendar-admin.php">Calendar</a></li>
                <li><a href="create-user.php">Creare User</a></li>
                <li><a href="index.php?logout='1'" class="login-register-btn">Logout</a>
            </ul>
            <div class="toggle-button">
                <i class="fa-solid fa-bars-progress"></i>
            </div>
        </div>
    </nav>

    <!--- ========== Main Section ========== --->
    <section class="main" id="main">
        <div class="container">
            <div class="main-content">
                <div class="title-text">Un corp sănătos este esențial pentru o minte concentrată!</div>
                <div class="subtitle-text">Suntem o comunitate pasionată de activitățile fizice și credem că
                    acestea sunt esențiale pentru o viață sănătoasă și echilibrată.
                    Încurajăm respectul, fair-play-ul și spiritul de echipă!</div>
                <a href="activities-admin.php">Alătură-te nouă</a>
            </div>
        </div>
    </section>

    <!--- ========== About Section ========== --->
    <section class="about" id="about">
        <div class="container">
            <div class="about-content">
                <div class="column left">
                    <h2 class="title">Despre noi</h2>
                    <p>Știm cât de important este să poți practica un sport atunci când îți place și ai timp liber,
                        chiar dacă nu ai o echipă
                        sau prieteni disponibili în acel moment. De aceea, am creat această platformă care îți oferă
                        posibilitatea de a te
                        înscrie într-o echipă și de a-ți planifica activitățile din afara cursurilor în mod convenabil.
                        <br>
                        Indiferent dacă ești un jucător experimentat sau abia începi să te inițiezi în ale sportului, pe
                        platforma noastră vei
                        găsi o comunitate prietenoasă și deschisă, cu care să îți împărtășești pasiunea și timpul liber.
                        Simplu și rapid, poți
                        accesa platforma noastră, te poți înscrie într-o echipă disponibilă și să stabilești data și ora
                        meciului în funcție de
                        preferințele tale și ale colegilor tăi de echipă.
                    </p>
                </div>
                <div class="column right">
                    <img src="https://img.freepik.com/free-vector/soccer-volleyball-baseball-rugby-equipment_1441-4026.jpg?w=1800&t=st=1683910761~exp=1683911361~hmac=b4297bdd405ec8be12570e9297a7e1d8935202b0cef5b352094bc8f45bbfbc7c" alt="">
                </div>
            </div>
        </div>
    </section>

    <!--- ========== Activities Section ========== --->
    <section class="activities" id="activities">
        <div class="container">
            <h2 class="title">Activități</h2>
            <div class="activities-content">
                <div class="card">
                    <div class="box">
                        <i class="fa-solid fa-futbol"></i>
                        <div class="text">Fotbal</div>
                        <a href="football-admin.php" class="btn">Află mai multe</a>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fa-solid fa-basketball"></i>
                        <div class="text">Basket</div>
                        <a href="basket-admin.php" class="btn">Află mai multe</a>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fa-solid fa-volleyball"></i>
                        <div class="text">Volei</div>
                        <a href="" class="btn">Află mai multe</a>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fa-solid fa-table-tennis-paddle-ball"></i>
                        <div class="text">Ping Pong</div>
                        <a href="" class="btn">Află mai multe</a>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fa-solid fa-baseball"></i>
                        <div class="text">Tenis de câmp</div>
                        <a href="" class="btn">Află mai multe</a>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <i class="fa-solid fa-futbol"></i>
                        <div class="text">Badminton</div>
                        <a href="" class="btn">Află mai multe</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--- ========== Gallery Section ========== --->
    <section class="gallery" id="gallery">
        <div class="container">
            <h2 class="title">Galerie</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="https://img.freepik.com/free-photo/soccer-player-action-stadium_1150-14606.jpg?w=1800&t=st=1683918301~exp=1683918901~hmac=e5db5a9b2db10bfe802d81f58442fcaeef9d977e919ba72e25b5b435abf7b6f9" alt="img" draggable="false">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="https://img.freepik.com/free-photo/smiley-boy-holding-football-outside_23-2148631498.jpg?w=1800&t=st=1683918323~exp=1683918923~hmac=4429f649a26b2c91ffc5fb02c4934480716dfa12712730cee536e82f43216fad" alt="img" draggable="false">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="https://img.freepik.com/free-photo/sideways-kids-playing-doubles-tennis_23-2148218636.jpg?w=1800&t=st=1683918365~exp=1683918965~hmac=f8b62c7f3a3e2658541cd59c357b50692dc7282192cc2be06d8dce991c471f9d" alt="img" draggable="false">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="https://img.freepik.com/free-photo/women-being-happy-after-basketball-game_23-2148773277.jpg?w=2000&t=st=1683918464~exp=1683919064~hmac=3d74dc7542309f0eb4010539ce8e6d398cfcdbd64f21e8918c9e5cbb0e73089b" alt="img" draggable="false">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="https://img.freepik.com/free-photo/black-man-doing-sports-playing-basketball-sunrise-jumping-silhouette_285396-1440.jpg?w=1800&t=st=1683918475~exp=1683919075~hmac=df1a874154707d83fa73c037fa34a636f7fab84ed2610a2fba3655671f17d121" alt="img" draggable="false">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="https://img.freepik.com/free-photo/model-plays-ping-pong-concept-leisure-activity-sport-human-emotions-gameplay-healthy-lifestyle-motion-action-movement_155003-39464.jpg?w=1800&t=st=1683918490~exp=1683919090~hmac=e33cc8d6105039f0606551c0e4e7596053bdc10c44bc5ba6531c81a6934ba2ef" alt="img" draggable="false">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="https://img.freepik.com/free-photo/young-women-playing-badminton-gym_155003-10719.jpg?w=1800&t=st=1683918513~exp=1683919113~hmac=3f445f42925da55fce4cd6a6dd9ed1e3cdec4ba5e99309cb8d6b93069d5ee4c6" alt="img" draggable="false">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--- ========== FAQ's Section ========== --->
    <section class="faq" id="faq">
        <div class="container">
            <h2 class="title">FAQ's</h2>
            <div class="questions-container">
                <div class="question">
                    <button class="faq-btn">
                        <span>Ce vârstă trebuie să aibă participanții pentru a se alătura activităților sportive?</span>
                        <i class="fas fa-chevron-down arrow"></i>
                    </button>
                    <p>Activitățile sportive sunt dedicate în special studenților. În general, aceste activități sunt
                        concepute pentru a fi
                        potrivite pentru participanții cu vârsta cuprinsă între 18 și 25 de ani. Cu toate acestea, ar
                        putea exista anumite
                        excepții sau programe speciale destinate și altor grupe de vârstă. Recomandăm să consultați
                        informațiile specifice
                        despre fiecare activitate sportivă pe site-ul nostru pentru a afla mai multe detalii despre
                        vârsta minimă sau maximă
                        recomandată pentru fiecare program.</p>
                </div>

                <div class="question">
                    <button class="faq-btn">
                        <span>Care sunt avantajele activităților extracurriculare sportive?</span>
                        <i class="fas fa-chevron-down arrow"></i>
                    </button>
                    <p>Activitățile extracurriculare sportive oferă numeroase beneficii, precum îmbunătățirea sănătății
                        și a stării de bine,
                        dezvoltarea abilităților fizice și motorii, învățarea valorilor de echipă, creșterea încrederii
                        în sine și dezvoltarea
                        abilităților sociale.</p>
                </div>
                <div class="question">
                    <button class="faq-btn">
                        <span>Ce echipament este necesar pentru participarea la activități?</span>
                        <i class="fas fa-chevron-down arrow"></i>
                    </button>
                    <p>De obicei, recomandăm participanților să poarte echipament sportiv confortabil și adecvat, cum ar
                        fi tricouri și
                        pantaloni scurți/scurți de sport, adidași cu talpă adecvată și genți de sport pentru a-și
                        transporta echipamentul. În
                        anumite cazuri, putem furniza echipament specific sau puteți achiziționa echipament de la
                        partenerii noștri.</p>
                </div>

                <div class="question">
                    <button class="faq-btn">
                        <span>Unde pot accesa programul activităților?</span>
                        <i class="fas fa-chevron-down arrow"></i>
                    </button>
                    <p>Programul activităților noastre poate fi găsit în secțiunea dedicată Calendarului. Acolo veți
                        găsi un calendar
                        actualizat cu toate activitățile planificate, inclusiv orele și zilele de desfășurare. Vă
                        invităm să verificați această
                        secțiune periodic, deoarece programul nostru poate suferi modificări în funcție de
                        disponibilitatea și cererea
                        participanților. Dacă aveți întrebări suplimentare despre program sau doriți să obțineți
                        informații actualizate, vă
                        rugăm să ne contactați prin intermediul paginii noastre de Contact sau prin numerele de telefon
                        afișate pe site-ul
                        nostru.</p>
                </div>
            </div>
        </div>
    </section>

    <!--- ========== Contact Form Section ========== --->
    <section class="contact-form" id="contact-form">
        <div class="container">
            <h2 class="title">Contactează-ne</h2>
            <div class="contact-form-content">
                <div class="column left">
                    <div class="icons">
                        <div class="row">
                            <i class="fa-sharp fa-solid fa-location-dot"></i>
                            <div class="info">
                                <div class="head">Adresă</div>
                                <div class="sub-title">Str. Nicolae Iorga, Târgu-Mureș, Mureș</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fa-solid fa-phone"></i>
                            <div class="info">
                                <div class="head">Telefon</div>
                                <div class="sub-title">+40265-233212</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fa-solid fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">contact@umfstconnect.ro</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <form action="#">
                        <div class="fields">
                            <div class="field lastname">
                                <input type="text" placeholder="Nume" required>
                            </div>
                            <div class="field firstname">
                                <input type="text" placeholder="Prenume" required>
                            </div>
                        </div>
                        <div class="fields">
                            <div class="field phone">
                                <input type="text" placeholder="Telefon" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Mesaj..." required></textarea>
                        </div>
                        <div class="btn-contact">
                            <button type="submit">Trimite mesaj</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--- ========== Footer Section ========== --->
    <footer class="footer">

        <div class="footer-left">
            <div class="logo"><a href="#">UMFST <span>Connect.</span></a></div>

            <p class="footer-links">
                <a href="#main">Acasă</a>
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