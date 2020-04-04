<?php
include ('includes/connection.php');

$login=$pass="";
$login=$_POST['login'];
$pass=$_POST['pass'];

$query=mysqli_query($connection,"SELECT * FROM `users` WHERE `login`='$login' AND `pass`='$pass'");
if (mysqli_num_rows($query)== 0)
{
    echo "You are not registered";
    echo"<a href=\"https://registration/\">Homepage</a>"."<br>";
} else
{
    echo "Hello, $login";
    echo"<a href=\"https://registration/\">Homepage</a>"."<br>";
}

 mysqli_close($connection);
