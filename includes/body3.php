 <?php

include 'db.php';

$query = "SELECT * FROM shopping_list where buy = 0";

$result = $conn->query($query);

	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()){
			echo
				"Item: "
				. $row["Item"]
				. "    Quantity: "
				. $row["Quanity"]
				. "<br>";
			}
		} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}