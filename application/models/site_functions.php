<?php

$user = "root";
$password = "root";
$host = "localhost";
$db = "ci_db";
$dberror1 = "database connection failed.";
$connect = mysqli_connect($host,$user,$password,$db) or die ($dberror1);

function login_check($database, $username, $password)
{
    $query = "SELECT *
              FROM users
              WHERE username = '" .$username ."'AND password = '" .$password ."'";
    $result = mysqli_query($database, $query);
    $count = mysqli_num_rows($result);

    if ($count != 1)
    {
        return "Incorrect username/password.";
    } else
    {
        return "verified";
    }
}
