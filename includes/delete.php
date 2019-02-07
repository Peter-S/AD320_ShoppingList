<?php
// Check if delete button active, start this 
if(isset($_POST['delete'])){
 for($i=0;$i<$count;$i++){
    if(isset($_POST['checkbox[]']))
 {$del_id = $bid[$i];
 echo $del_id;
 $sql = "DELETE FROM r_textbook_info WHERE ID='$del_id'";
 $result = mysql_query($sql);}
 }