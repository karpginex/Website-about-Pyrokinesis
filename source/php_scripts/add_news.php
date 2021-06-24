<?php
include "query.php";
$author_id = $_POST["author_id"];
$text = $_POST["text"];
$password = $_POST["password"];
if($password == "123")
    insert("news", $author_id, $text);
else
    header("Location: ../../admin_panel.php");