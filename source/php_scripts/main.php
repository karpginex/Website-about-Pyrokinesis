<?php 

include 'query.php';

//name, avatarka, text, image, date
function getNews(){

    $news_array = selectFrom("news", NULL, array('id', 'author_id', 'text', 'date', 'image'));
    //$authors_array = selectFrom("authors", $array[1]["id"], array('id', 'name', 'image_url'));

    $result_array = array();


    foreach($news as $news_array){
        $author = selectFrom("authors", $news["author_id"], array('name', 'image_url'));
        $final_row["name"] = $author["name"];
        $final_row["avatar"] = $author["image_url"];
        $final_row["text"] = $news["text"];
        $final_row["image"] = $news["image"];
        $final_row["date"] = $news["date"];
        array_push($result_array, $final_row);
    }

    return $result_array;

}

?>