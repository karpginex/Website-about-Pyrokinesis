<?php
include "query.php";
$author_id = $_POST["author_id"];
$text = $_POST["text"];
$login = $_POST["login"];
$password = $_POST["password"];

$authors__array = array();

$authors__array = selectFrom("authors", NULL, array('id', 'name', 'login', 'password'));
$succesful = FALSE;

foreach($authors__array as $author)
{
    if($author['login'] == $login and $author['password'] == $password)
    {
        insert("news", $author_id, $text);
        $succesful = TRUE;
        header("Location: ../../admin_panel.php");
    }
    else{
        $succesful = FALSE;
    }
}
if($succesful == TRUE){
    echo "Succesful addition";
}
else{
    header("Location: ../../admin_panel.php");
    echo "Failed";
    
}
