<?php 
    include "../dbconnection.php";

    $id= $_POST['id'];

    
    $results =  $conn->query("SELECT * FROM `tbl_career` WHERE ID='$id'");
    while ($data = $results->fetch_assoc()): 
        ?>

        <!-- Modal update -->
        <div class="modal fade" id="modalUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Update Career Goal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="myForm">
                    <div class="modal-body">
                    <input type="hidden" class="form-control" id="idU"  value="<?php echo"".$id ?>" required>
                            <br>
                            <select class="form-select" id="typeU" aria-label="Default select example" required focus>
                                <option value="<?php echo"".$data['type'] ?>"> <?php if($data['type'] == 1){ echo"Short Term"; }else{ echo"Long Term";}  ?></option>
                                <option value="1">Short Term</option>
                                <option value="2">Long Term</option>
                            </select>
                            <br>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="careerU" placeholder="Career Goal" value="<?php echo"".$data['career'] ?>" required>
                            </div> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success" id="btnSaveUpdate">Update</button>
                    </div>
                </form>
                </div>
            </div>
        </div>

        
        <script>
            $('#btnSaveUpdate').on('click', function() {
            
                $("#btnSaveUpdate").attr("disabled", "disabled");
                var type = $('#typeU').val();
                var career = $('#careerU').val();
                var id = $('#idU').val();
                
                if(type!="" && career!="" && id!=""){
                    $.ajax({
                        url: "ajax/careerUpdate.php",
                        type: "POST",
                        data: {
                            id:id,
                            type: type,
                            career: career
                        },
                        cache: false,
                        success: function(dataResult){
                            var dataResult = JSON.parse(dataResult);
                            if(dataResult.statusCode==200){
                                $("#btnSaveUpdate").removeAttr("disabled");
                                alert("Successfully Updated");
                                $("#modalUpdate").modal('hide');
                                
                                    $.ajax({
                                        type: "GET",
                                        url: "ajax/careerShortFetch.php",
                                        dataType: "html",
                                        success: function (data) {
                                            $("#short").html(data);
                                            var buttons = document.getElementsByClassName('btnshow');
                                            for(var i=0; i< buttons.length; i++){
                                                buttons[i].classList.remove("hide");
                                                
                                            }
                                        }
                                    });	
                              
                                    $.ajax({
                                        type: "GET",
                                        url: "ajax/careerLongFetch.php",
                                        dataType: "html",
                                        success: function (data) {
                                            $("#long").html(data);
                                            var buttons = document.getElementsByClassName('btnshow');
                                            for(var i=0; i< buttons.length; i++){
                                                buttons[i].classList.remove("hide");
                                                
                                            }
                                        }
                                    });	
                              
                            }
                            else if(dataResult.statusCode==201){
                                alert("Error occured !");
                                $("#btnSaveUpdate").removeAttr("disabled");
                            }                          
                        }
                    });
                    }else{
                        alert('Please fill all the field !');
                        $("#btnSaveUpdate").removeAttr("disabled");
                    }

            });
        </script>
        
        <?php 
            endwhile;
        ?>
