

var deleteBtn = document.querySelectorAll(".certDelete");

for (var i = 0; i < deleteBtn.length; i++) {
    deleteBtn[i].onclick = function(e) {
       
        $tr = $(this).closest('.card-body');
        var data = $tr.children("p").map(function(){
           return $(this).text();
         }).get();
        console.log(data);
        $("#deletemodalCertificate").modal('show');
        document.getElementById('idDcertificate').value = data[1];
        
     
   
     }
}

var updateBtn = document.querySelectorAll(".certUpdate");

for (var i = 0; i < updateBtn.length; i++) {
    updateBtn[i].onclick = function(e) {
   
        $tr = $(this).closest('.card-body');
        var data = $tr.children("p").map(function(){
           return $(this).text();
         }).get();
        console.log(data);
        $("#updatecertificate").modal('show');
        $("#updateID").val(data[1]);
        $("#updatetitle").val(data[3]);
        $("#updateimage").val(data[2]);
        document.getElementById("updateDescription123").value = data[0];
     
        
     
   
     }
}
