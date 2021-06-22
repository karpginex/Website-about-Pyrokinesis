<?php 
function printNews($news_id_start, $news_id_end)
{
for ($i=$news_id_start; $i <= $news_id_end; $i++)
    {
        echo "<div class = 'new_news'>";
            echo "<div class = 'avatar_and_name'>";
                echo "<div class = 'news__avatar'>";
                    echo "<img src=";
                    echo getNews()[$i]["avatar"];
                    echo " width = '36px' height = '36px' >";
                echo "</div>";
                echo "<div class = 'news__name'>";
                    echo getNews()[$i]["name"];
                echo "</div>";
            echo "</div>";
                echo "<div class = 'news__text'>";
                    echo getNews()[$i]["text"];
                echo "</div>";
                echo "<div class = 'news__date'>";
                    echo getNews()[$i]["date"];
                echo "</div>";


            echo "<br>";
        echo "</div>";


    }
}
?>