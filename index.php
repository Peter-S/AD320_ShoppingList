<!--This is going to be your index page-->

<!--When you add data it will send you to insert.php with a post-->
<!--You then add that information to the URL in insert.php as a get variable
redirecting you to the index page where you can use that variable in the list-->




<?php $item = $_GET['item'] ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="includes/add.php" method="post">
    <input type="text" name="item">
    <input type="text" name="qty">
    <input type="submit" name="submit" value="Add">
</form>

<p>Stuff to get</p>
<?php include 'includes/body2.php'; ?>
<p>Stuff got</p>
<?php include 'includes/body3.php'; ?>

</body>
</html>