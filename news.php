<?php 
      include 'source/php_scripts/main.php';
      include 'source/php_scripts/query.php';
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
                        <a class="nav__link" href="#">About</a>
                        <a class="nav__link" href="#">Tour</a>
                        <a class="nav__link" href="#">Contact</a>
                  </nav>
            </div>
      </div>
</div>

<div class="intro">
      <div class="container">
            <div class="intro__inner">

            <h1 class="intro__title__news">NEWS</h1>
      </div>

      <div class="news__php">

            <?php 
                  
                  $array=selectFrom("news", NULL, array('id', 'author_id', 'text', 'date', 'image'));
                  $array_authors=selectFrom("authors", $array[1]["id"], array('id', 'name', 'image_url'));

                  $array_authors[0]["name"];
                  $array_authors[0]["image_url"];

            ?>
            <div class="author__name">
                  <?php echo $array_authors[0]["name"]; ?>
            </div>
            <div class="author__text">
                  <img src="<?php echo $array_authors[0]["image_url"]; ?>" </img>
            </div>
      </div>
            
      
</div>
</div>

</body>
</html>