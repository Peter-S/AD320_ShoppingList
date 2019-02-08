 <?php

include 'db.php';

$query = "SELECT * FROM shopping_list where Buy = 1";

$result = $conn->query($query);

	if($result->num_rows > 0)
	{	 
	echo "<form action='includes/delete.php' method='post'>";
	
		while($row = $result->fetch_assoc()){
			echo "<div>"
				. "<h2>"
				. "<input type='checkbox' name='cb'>"
				. "Item: "
				. $row["Item"]
				. "   Quantity: "
				. $row["Quanity"]
				. "<input type='submit' name='edit' value='Edit'> "
				. "<input type='submit' name='delete' value='Delete'>"
				. "</h2>"
				. "</div>";
			}echo "</form>";
		} 
		
else {
    echo "Error: " . $query . "<br>" . $conn->error;
} 

		