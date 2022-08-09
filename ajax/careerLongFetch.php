<?php 
    include "../dbconnection.php";


    $results = $conn->query("SELECT * FROM tbl_career WHERE TYPE = '2'");
    while ($data = $results->fetch_assoc()): 
?>   
    
    <div class="row">
        <div class="col-12" id="career-description">
            <p class="text-left"><i class="fas fa-bullseye "></i><?php echo "   ".$data['career']?> <button id="<?php echo"".$data['ID']?>" style="float:right;" class="btn btn-danger hide btnshow careerBtnDelete"> <i class="fas fa-trash-alt"></i></button><button id="<?php echo"".$data['ID']?>" style="float:right;" class="btn btn-success hide btnshow careerBtnUpdateLong" > <i class="fas fa-edit"></i></button></p>
        </div>
    </div>
    
<?php 
    endwhile;
?>

<script>
    $('.careerBtnDelete').on('click', function() {
        var ids = $(this).map(function() {
        return $(this).attr('id');
        });
        var id = ids[0];
        $("#deletemodal").modal('show'); 
        document.getElementById('idD').value = id; 
    });

    $('.careerBtnUpdateLong').on('click', function() {
        var ids = $(this).map(function() {
        return $(this).attr('id');
        });
        var id = ids[0];
        console.log(id);
        $.ajax({
            type: "POST",
            data: { id : id},
            url: "ajax/careerSelectForUpdate.php",
            cache:false,
            dataType: "html",
            success: function(data){   
                
                $("#Umodal").html(data);
                $("#modalUpdate").modal('show'); 
                           
            }
        });   
    });
</script>