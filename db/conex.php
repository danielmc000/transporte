<?php
session_start();
include('conexcion.php');
if($connection){

}else {
    header("Location:conexcion.php");
}
if (!$_SESSION['username']) {
    header('Location: login.php');
}
?>