<?php 

include 'query.php';
include 'printNews.php';
//name, avatarka, text, image, date
function getNews(){

    $news_array = selectFrom("news", NULL, array('id', 'author_id', 'text', 'date', 'image'));
    //$authors_array = selectFrom("authors", $array[1]["id"], array('id', 'name', 'image_url'));

    $result_array = array();
    $final_arr = array();
    
    foreach($news_array as $news){
        $author = selectFrom("authors", $news["author_id"], array('name', 'image_url'));
        $final_arr["name"] = $author[0]['name'];
        $final_arr["avatar"] = $author[0]['image_url'];
        $final_arr["text"] = $news["text"];
        $final_arr["image"] = $news["image"];
        $final_arr["date"] = $news["date"];
        array_push($result_array, $final_arr);
    }

    return $result_array;

}

?>