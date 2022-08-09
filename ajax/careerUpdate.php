<?php 

include "../dbconnection.php";

    $id = $_POST['id'];
    $type = $_POST['type'];
    $career = $_POST['career'];
   

    $sql = "UPDATE tbl_career SET type='$type',career='$career' WHERE ID= '$id'";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);



?>