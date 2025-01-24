<?php
include_once './includes/auth-functions.php';

if(!isCustomer()){
    header('Location: index.php');
}