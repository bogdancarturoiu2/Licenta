<?php
session_start();

// Se inițializează sesiunea pentru a permite utilizarea sesiunilor în aplicație.

$db = mysqli_connect('localhost', '2022.carturoiu.bogdan-marian', 'Nadgob02022000', '2022.carturoiu.bogdan-marian');

// Se realizează conexiunea la baza de date MySQL. Sunt furnizate următoarele informații de conexiune:
// - 'localhost' reprezintă adresa serverului MySQL
// - '2022.carturoiu.bogdan-marian' reprezintă numele de utilizator pentru conexiunea la baza de date
// - 'Nadgob02022000' reprezintă parola pentru conexiunea la baza de date
// - '2022.carturoiu.bogdan-marian' reprezintă numele bazei de date


// Se definesc variabilele pentru nume de utilizator, parolă, adresă de email și erori.
// Variabilele pot fi ulterior utilizate în diferite funcții.
$username = "2022.carturoiu.bogdan-marian";
$password = "Nadgob02022000";
$errors   = array();


// ========= REGISTER ======= //

// Dacă se primește o cerere POST pentru înregistrarea unui utilizator prin intermediul formularului, se apelează funcția register().
if (isset($_POST['reg_user'])) {
    register();
}


// Funcția register() înregistrează un utilizator în baza de date. Verifică dacă parolele coincid și criptează parola înainte de a o salva în baza de date.
// În funcție de tipul de utilizator selectat, se inserează datele în baza de date și se redirecționează utilizatorul către paginile corespunzătoare.
function register()
{
    // Se definesc variabilele globale pentru a le face disponibile în interiorul funcției.
    global $db, $errors, $username;

    // Se preiau valorile introduse în formular pentru nume, email, număr de telefon, nume de utilizator și parole.
    $name    =  ($_POST['name']);
    $email       =  ($_POST['email']);
    $phone_number       =  ($_POST['phone_number']);
    $username    =  ($_POST['username']);
    $password_1  =  ($_POST['password_1']);
    $password_2  =  ($_POST['password_2']);



    // Verifică dacă numele de utilizator există deja în baza de date
    $user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) {
        if ($user['username'] === $username) {
            array_push($errors, "Numele de utilizator există deja!");
        }
    }

    // Verifică dacă adresa de email există deja în baza de date
    $email_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($db, $email_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) {
        if ($user['email'] === $email) {
            array_push($errors, "Adresa de mail există deja!");
        }
    }

    // Se verifică dacă parolele introduse nu corespund, iar în caz afirmativ se adaugă un mesaj de eroare în array-ul de erori.
    if ($password_1 != $password_2) {
        array_push($errors, "Parolele nu corespund!");
    }

    // Dacă nu există erori în formular, se criptează parola utilizând md5().
    if (count($errors) == 0) {
        $password = md5($password_1);


        if (isset($_POST['user_type'])) {
            $user_type = ($_POST['user_type']);
            $query = "INSERT INTO users (name, email, phone_number,username, user_type, password) 
                      VALUES('$name','$email','$phone_number','$username', '$user_type', '$password')";
            mysqli_query($db, $query);

            $_SESSION['success']  = "User creat cu succes!";
            header('location: create-user.php');
        } else {
            $query = "INSERT INTO users (name, email, phone_number,username, user_type, password) 
                      VALUES('$name','$email','$phone_number','$username', 'user', '$password')";
            mysqli_query($db, $query);

            // Se obține ID-ul utilizatorului creat
            $logged_in_user_id = mysqli_insert_id($db);

            $_SESSION['user'] = userid($logged_in_user_id);
            header('location: login.php');
        }
    }
}


// Funcția userid() primește un ID de utilizator și returnează un array cu datele utilizatorului din baza de date.
function userid($id)
{
    global $db;
    $query = "SELECT * FROM users WHERE id=" . $id;
    $result = mysqli_query($db, $query);

    $user = mysqli_fetch_assoc($result);
    return $user;
}


// Funcția show_error() afișează erorile din array-ul de erori, dacă există.
function show_error()
{
    global $errors;

    if (count($errors) > 0) {
        echo '<div class="error">';
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
        echo '</div>';
    }
}



// Funcția forcelogin() verifică dacă utilizatorul este autentificat prin verificarea existenței unei variabile de sesiune.
function forcelogin()
{
    if (isset($_SESSION['user'])) {
        return true;
    } else {
        return false;
    }
}

// Dacă se primește o cerere GET pentru deconectarea utilizatorului, se distruge sesiunea și se redirecționează către pagina de autentificare.
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: login.php");
}


// ========= LOGIN ======= //

// Dacă se primește o cerere POST pentru autentificarea utilizatorului prin intermediul formularului, se apelează funcția login().
if (isset($_POST['login_user'])) {
    login();
}

// Funcția login() verifică dacă utilizatorul există în baza de date și are combinația corectă de utilizator și parolă. Dacă autentificarea este reușită, utilizatorul este stocat în variabila de sesiune și redirecționat către pagina principală corespunzătoare (admin sau utilizator).
function login()
{
    global $db, $username, $errors;

    $username = ($_POST['username']);
    $password = ($_POST['password']);

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results) == 1) { // Verifică dacă utilizatorul există în baza de date
            $logged_in_user = mysqli_fetch_assoc($results);
            if ($logged_in_user['user_type'] == 'admin') { // Verifică dacă utilizatorul este de tip administrator

                $_SESSION['user'] = $logged_in_user;
                header('location: main-admin.php'); // Redirecționează utilizatorul către pagina principală a administratorului
            } else {
                $_SESSION['user'] = $logged_in_user;
                header('location: main-user.php'); // Redirecționează utilizatorul către pagina principală a utilizatorului obișnuit
            }
        } else {
            array_push($errors, "User sau parolă incorectă!"); // Adaugă o eroare în array-ul de erori dacă combinația de utilizator și parolă nu este corectă
        }
    }
}

// Funcția administrator() verifică dacă utilizatorul autentificat este de tip administrator.
function administrator()
{
    if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin') {
        return true;
    } else {
        return false;
    }
}
