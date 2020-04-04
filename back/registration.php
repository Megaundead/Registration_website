<?php
include ('includes/connection.php');

$login=$pass="";
$login=$_POST['login'];
$pass=$_POST['pass'];
if(mysqli_num_rows(mysqli_query($connection,"SELECT * FROM `users` WHERE `login`='$login' AND `pass`='$pass'"))==0)
{
mysqli_query($connection,"INSERT INTO `users`(login,pass) VALUES('$login','$pass')");
echo"Welcome to our site $login! ";
echo"You can register <a href=\"/back/login.php\">here</a>"."<br>";
echo"<a href=\"https://registration/\">Homepage</a>";
} else {
    echo "You are already registered"."<br>";
    echo"<a href=\"https://registration/\">Homepage</a>";
}
mysqli_close($connection);