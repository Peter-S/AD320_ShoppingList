<?php

$item = $_POST['item'];
$qty = $_POST['qty'];

include 'db.php';


$sql = "INSERT INTO shopping_list
			(Item, Quanity)
		VALUE
			('$_POST[item]', '$_POST[qty]')";

	if ($conn->query($sql) === TRUE) {
    echo 
		header('Location: ../index.php?item='. 'Item: '.$item . '<br>' . 'Quanity: '. $qty );
				
		} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}