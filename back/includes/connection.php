<?php
$connection=mysqli_connect('127.0.0.1','root','','connection_db');
if ($connection == false){
    echo 'connection failed';
    exit();
}

