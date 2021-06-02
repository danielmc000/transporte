<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "adminpanel");

if (isset($_POST['login_btn'])) {
    $email_login = $_POST['emaill'];
    $password_login = $_POST['passwordd'];

    $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login' LIMIT 1";
    $query_run = mysqli_query($connection, $query);

    if (mysqli_fetch_array($query_run)) {
        $_SESSION['username'] = $email_login;
        header('Location: ../admin.php');
    } else {
        $_SESSION['status'] = "Email / Contraseña invalido";
        header('Location: login.php');
    }
}

if (isset($_POST['logout_btn'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location: ../index.html');
}

if (isset($_POST['guardar'])) {
    $imagen = $_POST['imagen'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $RFC = $_POST['RFC'];
    $nombreempresa = $_POST['nombreempresa'];
    $calle = $_POST['calle'];
    $numero = $_POST['numero'];
    $cuidad = $_POST['cuidad'];
    $pais = $_POST['pais'];
    $password = $_POST['password'];
    $password1 = $_POST['password1'];

    if ($password === $password1) {
        $query = "INSERT INTO transportista ()VALUES()";
        $query_run($connection,$query);

        if ($query_run) {
            echo "save";
            $_SESSION['success'] =  "Registro existos";
            header('Location: register.php');
        } else {
            echo "not save";
            $_SESSION['status'] =  "No se pudo registrar";
            header('Location: register.php');
        }
    } else {
        echo "pass no match";
        $_SESSION['status'] =  "la contraseña no coinside";
        header('Location: register.php');
    }
}
if (isset($_POST['guardar2'])) {
    $imagen = $_POST['imagen'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $RFC = $_POST['RFC'];
    $nombreempresa = $_POST['nombreempresa'];
    $calle = $_POST['calle'];
    $numero = $_POST['numero'];
    $cuidad = $_POST['cuidad'];
    $pais = $_POST['pais'];
    $password = $_POST['password'];
    $password1 = $_POST['password1'];

    if ($password === $password1) {
        $query = "INSERT INTO transportista ()VALUES()";
        $query_run($connection, $query);

        if ($query_run) {
            echo "save";
            $_SESSION['success'] =  "Registro existos";
            header('Location: register.php');
        } else {
            echo "not save";
            $_SESSION['status'] =  "No se pudo registrar";
            header('Location: register.php');
        }
    } else {
        echo "pass no match";
        $_SESSION['status'] =  "la contraseña no coinside";
        header('Location: register.php');
    }
}


?>