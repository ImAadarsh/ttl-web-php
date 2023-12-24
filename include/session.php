<?php
session_start();
include "include/connect.php";
if(!isset($_SESSION['token'])){
    session_destroy();
    header('location: booking-1.php');
}
?>