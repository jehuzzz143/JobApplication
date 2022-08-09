<?php 
    include "../dbconnection.php";

    $type = $_POST['type'];
    $career = $_POST['career'];
    

    $sql = "INSERT INTO `tbl_career`( `career`, `type`) 
	VALUES ('$career',$type)";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);

?>