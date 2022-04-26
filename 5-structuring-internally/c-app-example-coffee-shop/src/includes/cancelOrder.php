<?php

if (isset($_GET['cancelOrder'])) {
    
    unset($_SESSION['customer']);
    unset($_GET);
    unset($_POST);

    header("Location: ../../index.php");
}