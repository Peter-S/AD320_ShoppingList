
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Meal Ticket - Shopping Lists Made Easy</title>
	<link rel="stylesheet" href="css/styles.css" type="text/css">

    
</head>
<body>

	<div container class="container">
		<div class="d1"><img src="http://themcmorrislife.com/AD320_ShoppingList-master/AD320_ShoppingList-master/images/mealticket.png">

<div class="d2">
	<h1>Welcome to Meal Ticket<br>Where Grocery Lists Are Made Easy</h1>
	<form action="includes/add.php" method="post">
    <p>Item Name:</p><input type="text" name="item">
   <p>Item Quantity:</p> <input type="text" name="qty">
    <input type="submit" name="submit" value="Add">
</form>

<h1>Stuff to get</h1>
<?php include 'includes/body2.php'; ?>

<h1>Stuff got</h1>
<?php include 'includes/body3.php'; ?>

		</div>
		
<div class="d3"></div>
			<div class="d4"><p>Meal Ticket: Grocery List Made Easy<br>&copy; 2019</p></div>
		
		

	</div>
	</div>
</body>
</html>