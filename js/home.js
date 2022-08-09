mediumZoom('.zoom',{
    margin:50
})



// navbar scrol animation
window.addEventListener("scroll", function(event) {

    var scroll_y = this.scrollY;
    var scroll_x = this.scrollX;

    if (scroll_y >= 800 && scroll_y <= 1500) {
      const counters = document.querySelectorAll('.count');
     
      counters.forEach((counter) => {
      const updateCount = () => {
        const target = parseInt(counter.getAttribute('data-target'));
        const count = parseInt(counter.innerText);
        if (count < target) {
          counter.innerText = count + 1;
          setTimeout(updateCount, 50);
        } else {
          counter.innerText = target;
        }
      };
      updateCount();
      });
   
    }else{
      const counters = document.querySelectorAll('.count');
      counters.innerText = 0;
   
    }

  if(scroll_y >= 800){
    var footer = document.getElementById("footer");
    footer.classList.add("unhide");
    footer.classList.remove("hide");
  }

  if(scroll_y >= 20){
    var navigation = document.getElementById("navigation");
    navigation.classList.add("navigation_shadow");
    navigation.classList.remove("navigation_shadow_remove");
  }else{
    var navigation = document.getElementById("navigation");
    navigation.classList.remove("navigation_shadow");
    navigation.classList.add("navigation_shadow_remove");
    
  }
});
// typedjs animation
 



// update btn
function showBtn(e) {
    var btnupdate = document.getElementById('updateBtn').innerHTML;
  
    if (btnupdate == "Update"){
        document.getElementById('updateBtn').innerHTML = "Close";
        document.getElementById('updateBtn').classList.remove("btn-success");
        document.getElementById('updateBtn').classList.add("btn-danger");

        var buttons = document.getElementsByClassName('btnshow');
        for(var i=0; i< buttons.length; i++){
            buttons[i].classList.remove("hide");
            
        }
    }else{
        document.getElementById('updateBtn').innerHTML = "Update";
        document.getElementById('updateBtn').classList.remove("btn-danger");
        document.getElementById('updateBtn').classList.add("btn-success");

        var buttons = document.getElementsByClassName('btnshow');

        for(var i=0; i< buttons.length; i++){
            buttons[i].classList.add("hide");
            
        }
    }
}

// See More
var see = document.getElementById("see_more");
  see.onclick = function() {
    if (see.innerHTML == "See More") {
      var project = document.getElementById("project_container"); 
      project.classList.remove("project_container");
      project.classList.add("project_container_expand");
      see.innerHTML ="Less";

    }else{
      var project = document.getElementById("project_container");
      project.classList.remove("project_container_expand");
      project.classList.add("project_container");
      see.innerHTML="See More";
    }
  };

// Add career
function careerAdd(){
    $("#exampleModal").modal('show');
}
// save
$('#btnSave').on('click', function() {
    console.log("aye")
    $("#btnSave").attr("disabled", "disabled");
    var type = $('#type').val();
    var career = $('#career').val();
    console.log(type+career)
    if(type != '' && career !=''){
    $.ajax({
        url: "ajax/careerAddBtn.php",
        type: "POST",
        data: { 
            type : type,
            career :career
        },
        cache:false,
        success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
				$("#btnSave").removeAttr("disabled");
				$('#myForm').find('input:text').val('');
                alert("Successfully Added");
                $("#exampleModal").modal('hide');
                if(type == 1){
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
                }else{
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
                }
			else if(dataResult.statusCode==201){
				alert("Fill up the required filled");
                $("#btnSave").removeAttr("disabled");
			}
			
		}
    });
    }else{
        alert('please fill up the required filled');
        $("#btnSave").removeAttr("disabled");
        
        
    }

 });

//  fetch career

$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "ajax/careerShortFetch.php",
        dataType: "html",
        success: function (data) {
            $("#short").html(data);
             
            
        }
    });
});

$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "ajax/careerLongFetch.php",
        dataType: "html",
        success: function (data) {
            $("#long").html(data);

        }
    });
});

// delete
$('#careerDelete').on('click', function() {
    var deleteID = document.getElementById('idD').value; 
    $.ajax({
        type: "POST",
        data: { id : deleteID},
        url: "ajax/careerShortDelete.php",
        cache:false,
        success: function(msg){   
            alert("Succesfully Deleted");
            $("#deletemodal").modal('hide');
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
    });

});
