 <?php

$item = $_POST['item'];
$qty = $_POST['qty'];

include 'db.php';


$sql = "INSERT INTO shopping_list
			(Item, Quanity, Buy)
		VALUE
			('$_POST[item]', '$_POST[qty]', '1')";



	if ($conn->query($sql) === TRUE) {
    echo 
		header('Location: ../index.php?');
				
		} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}	
?>

