<?php 
include "../dbconnection.php";
    $email = $_POST['email'];
    $pword = $_POST['pword'];
    $sql = "SELECT * FROM `tbl_user` WHERE EMAIL ='$email' AND PASSWORD = '$pword'";
    if ($result=mysqli_query($conn,$sql)) {
        $rowcount=mysqli_num_rows($result);
        if($rowcount > 0){
            echo $rowcount;
        }
    }
?>