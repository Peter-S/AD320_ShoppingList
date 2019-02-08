<?php


include 'db.php';


 $sql = "DELETE FROM shopping_list WHERE Item = 'pop'";

if ($conn->query($sql) === TRUE) {
    echo 
		header('Location: ../index.php?');
				
		} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>