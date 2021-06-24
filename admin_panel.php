<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="source/css/style.css" rel="stylesheet">
    <title>Admin panel</title>
</head>
<body>

<div class="form_news">
<form action="source/php_scripts/add_news.php" method="post">
    <div class="login">Login</div>
   <p><input name="login"></p>
   <div class="password">Password</div>
   <input type="password" name="password">

   <div class="text">News</div>
   <p><input name="text"></p>

   <input type="hidden" name ="author_id" value="0">
   <p><input type="submit"></p>

</form>
</div>
</body>
</html>