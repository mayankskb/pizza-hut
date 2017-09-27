<?php

    session_start();
    //session_destroy();
    error_reporting(1);
    mysql_connect('localhost','root','');
    mysql_select_db('pizza_db');
    
    
    if(isset($_GET['add'])){
        $_SESSION['cart_'.(int)$_GET['add']] += 1;
        header('Location: orderpizza.php');
    }

    if(isset($_GET['remove'])){
        $_SESSION['cart_'.(int)$_GET['remove']]--;
        header('Location: orderpizza.php');
    }
    
    



?>