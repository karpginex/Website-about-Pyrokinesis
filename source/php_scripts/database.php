<?php


function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "pyro_db";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
    mysqli_set_charset($conn, "utf8");
    return $conn;
}

function CloseCon($conn)
{
    $conn -> close();
}
  

















































































$link = mysqli_connect('localhost', 'root', '', 'pyro_db');
?>