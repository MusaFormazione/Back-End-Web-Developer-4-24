<?php
include_once './includes/auth-functions.php';

if(isLoggedIn()){
    if(isAdmin()){
        header('Location: admin-dashboard.php');
    }
    if(isCustomer()){
        header('Location: dashboard.php');
    }
}