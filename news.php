<?php 
      include 'source/php_scripts/main.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="source/css/style.css" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title> News </title>
</head>
<body>

<div class="header">
      <div class="container">
            <div class="header__inner">
                  <div class="header__logo">
                      <a class="header__link" href="/">KARPGINEX</a>
                    </div>
                  <nav class="nav">
                        <a class="nav__link" href="news.php">News</a>
                        <a class="nav__link" href="../#about__link">About</a>
                        <a class="nav__link" href="../#section__tour__link">Tour</a>
                        <a class="nav__link" href="../#section__contact__link">Contact</a>
                  </nav>
            </div>
      </div>
</div>

<div class="intro">
      <div class="container">
            <div class="intro__inner">

            <h1 class="intro__title__news">NEWS</h1>
      </div>
      <!-- нужно генерировать новости в отдельном php и вызывать в цикле здесь-->
      <div class="news">
            
            <?php
                  printNews("0","2");

            ?>

      </div>


       
      <!--echo '<div class="news__php">';    
      echo '<div class="author__name">';
      echo '</div>'
      echo '</div>'-->

      
      

            
            
                  
            
            
      
            
      
</div>
</div>

</body>
</html>