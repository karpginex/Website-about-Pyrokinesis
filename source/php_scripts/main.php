<?php>

include 'query.php';


$array=selectFrom("news", NULL, array('id', 'author_id', 'text', 'date', 'image'));
$array_authors=selectFrom("news", NULL, array('id', 'author_id', 'text', 'date', 'image'));




?>