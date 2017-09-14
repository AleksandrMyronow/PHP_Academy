<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body>
<form action="index.php" method="GET">
    <input type="text" name="name"/><br>
    <input type="email" name="email"/><br>
    <input type="password" name="pass"/><br>
    <input type="submit" class="btn" value="Enter"/>
</form>
<?php
 print_r($_GET);
?>
</body>
</html>