 <?php

include 'db.php';

$query = "SELECT * FROM shopping_list where Buy = 1";

$result = $conn->query($query);

	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()){
			echo "<div>"
				. "<input type='checkbox'>"
				. "Item: "
				. $row["Item"]
				. "   Quantity: "
				. $row["Quantity"]
				. "<input type='submit' name='edit' value='Edit'> "
				. "<input type='submit' name='edit' value='Delete'>"
				. "</div>";
			}
		} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
