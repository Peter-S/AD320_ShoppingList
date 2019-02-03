 <?php

include 'db.php';

$query = "SELECT * FROM shopping_list where Buy = 1";

$result = $conn->query($query);

	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()){
			echo
				"CB "
				. "Item: "
				. $row["Item"]
				. "   Quantity: "
				. $row["Quanity"]
				. " DELETE"
				. " EDIT"
				. "<br>";
			}
		} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
