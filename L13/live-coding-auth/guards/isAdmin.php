<?php

include_once './includes/auth-functions.php';

if(!isAdmin()){
    header('Location: dashboard.php');
}