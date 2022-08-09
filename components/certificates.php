<!-- Modal -->
<div class="modal fade" id="addcertificate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Certificates</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" id="cform" enctype="multipart/form-data">
      <div class="modal-body">
        
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="cTitle" name="Title" placeholder="First Certificate">
            <label for="floatingInput">Title</label>
        </div>
        <div class="input-group mb-3">
            <input type="file" accept="image/png, image/gif, image/jpeg" name="image" id="cimg" class="form-control" >
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div>
        <div class="form-floating">
            <textarea rows="5" style="height:30%;" class="form-control" placeholder="Leave a comment here" name="description" id="cDescription"></textarea>
            <label for="floatingTextarea">Description/Comments</label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="cAdd" name="cAdd" >Add</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal delete -->
<div class="modal fade" id="deletemodalCertificate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form  method="POST" id="myFormUpdateCertificate">
            <div class="modal-body">
                
                    <input type="hidden" id="idDcertificate" name="idDCertificate"  />
                    <h3>Are you sure you want to delete this data?</h3>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger" id="careerDelete" name="deleteCertificate">Delete</button>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- Modal update -->
<div class="modal fade" id="updatecertificate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Certificates</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" id="cformUpdate" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-floating mb-3">
            <input type="hidden" class="form-control" id="updateID" name="updateID" >
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="updatetitle" name="updatetitle" >
            <label for="floatingInput">Title</label>
        </div>
        <div class="form-floating mb-3">
            <input type="hidden" class="form-control" id="updateimage" name="updateimage" >
            
        </div>
        <div class="form-floating">
            <textarea rows="5" style="height:30%;" class="form-control"  name="updateDescription123" id="updateDescription123"></textarea>
            <label for="floatingTextarea">Description/Comments</label>
        </div> <br>
        <div class="input-group mb-3">
            <input type="file" accept="image/png, image/gif, image/jpeg" value="asdsads" name="updateimagenew" id="updateimagenew" class="form-control" >
            <label class="input-group-text" for="inputGroupFile02">Change Image</label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" id="updateCertificate" name="updateCertificate" >Update</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="container" >
    <div class="container ">
        <center>
            <p class="title_header" >>>  Certificates  <<</p>
        </center>
    </div>
    <button class="btn btn-primary hide btnshow" data-bs-toggle="modal" data-bs-target="#addcertificate" > <i class="far fa-plus-circle"></i> Add New Certificates</button><br>
  <div class="row" data-masonry='{"percentPosition": true }' id="certMasonry">
    <?php 
        include "dbconnection.php";
        $sql = "SELECT * FROM tbl_certificates";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $path = "components/certs/".$row['img'];
            ?>
                <div class="col-sm-3" style="margin-bottom:1%;">
                    <div class="card">
                        <img src="<?php echo"".$path; ?>" class="card-img-top zoom" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo"".$row['title'];?></h5>
                            <p class="card-text"><?php echo"".$row['description'];?></p>
                            <p style="display:none;"><?php echo"".$row['ID'];?></p>
                            <p style="display:none;"><?php echo"".$row['img'];?></p>
                            <p style="display:none;"><?php echo"".$row['title'];?></p>
                            <p style="display:none;"><?php echo"".$row['description'];?></p>
                            <div style="position:relative;height:30px;">
                                <button  style="position: absolute; right: 0px;" class="btn btn-danger hide btnshow certDelete"> <i class="fas fa-trash-alt"></i></button>
                                <button  style="position: absolute; right: 50px;" class="btn btn-success hide btnshow certUpdate" ><i class="fas fa-edit"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }
        } else {
            echo "0 results";
        }
        $conn->close();
    
    ?>
    
  </div>
</div>


<script src="../js/certificate.js">


</script>

<?php 
include "dbconnection.php";
if(isset($_POST['cAdd'])){
    $photo= $_FILES['image']['name'];
    $title= mysqli_real_escape_string($conn, $_POST["Title"]);
    $desc= mysqli_real_escape_string($conn, $_POST["description"]);
    $sql = "INSERT INTO `tbl_certificates`( `img`, `title`, `description`) 
	VALUES ('$photo','$title','$desc')";

    if ($conn->query($sql) === TRUE) {
        move_uploaded_file($_FILES["image"]["tmp_name"],"components/certs/".$_FILES["image"]["name"]);
        echo '<script>alert("Upload Successful") </script>';
        echo("<meta http-equiv='refresh' content='1'>");
        
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
}else if(isset($_POST['deleteCertificate'])){
    $id = $_POST['idDCertificate'];
    
    $sql = "DELETE FROM tbl_certificates WHERE ID='$id'";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Successful Deleted") </script>';
        echo("<meta http-equiv='refresh' content='1'>");
        
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}else if(isset($_POST['updateCertificate'])){
    $id =  $_POST["updateID"];
    $title       = mysqli_real_escape_string($conn, $_POST["updatetitle"]);
    $description = mysqli_real_escape_string($conn, $_POST["updateDescription123"]);
    $photo= $_FILES['updateimagenew']['name'];

    if($photo == ''){
        $photo = $_POST['updateimage'];
    }


    $sql = "UPDATE tbl_certificates SET `img`='$photo', `title`='$title', `description`='$description' WHERE ID=$id";

    if ($conn->query($sql) === TRUE) {
        move_uploaded_file($_FILES["updateimagenew"]["tmp_name"],"components/certs/".$_FILES["updateimagenew"]["name"]);
        echo '<script>alert("Successfully Updated") </script>';
        echo("<meta http-equiv='refresh' content='1'>");
    } else {
    echo "Error updating record: " . $conn->error;
    }


}


?>
