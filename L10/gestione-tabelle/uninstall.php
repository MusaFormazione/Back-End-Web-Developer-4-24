<?php
require_once 'connection.php';

$sql = "DROP TABLE prodotti";

$query = $db->query($sql);

if($query){
    echo "disinstallazione avvenuta";
}