<!doctype html>

<html lang="en">
<head>
	<title> login | Account </title>
	 <!-- Required meta tags -->
	<meta charset="utf-8">
	<!-- responsive viewport meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CodingNepal jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<!-- -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <!-- css -->
	<link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Icon -->
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
  	<!-- AOS animation -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Navbar    -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light" id="navigation">
    <div class="container-fluid">
        <a class="navbar-brand disabled" href="#">Cienzo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" > 
        <ul class="navbar-nav">

            <li class="nav-item">
            <a class="nav-link  nav-tex" id="introduction" href="#" >Introduction</a>
            </li>
            <li class="nav-item">
            <a class="nav-link nav-tex" id="Projects" href="#project">Projects</a>
            </li>
            <li class="nav-item">
            <a class="nav-link nav-tex" id="Projects" href="#skills" >Language</a>
            </li>
            <li class="nav-item">
            <a class="nav-link nav-tex" id="certificates" href="#certificates" >Certificates</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <!-- End of Navbar -->
    <form  method=POST data-aos="fade-up" >	
        <div class="background-login">
            <div class="container loginform">
                <h1>User Login </h1>
                <div class="columns is-desktop is-multiline is-gapless">
                    <div class="column is-full">
                            <i class="fas fa-user-circle fa-lg" style="width: 10%;" ></i><input type="email" id="email" name="loginname" placeholder="Email"  required >
                    </div>
                    <div class="column is-full">
                        <i class="fas fa-lock fa-lg" style="width: 10%;"></i><input type="password"  name="loginpassword"  placeholder="Password" id="pword" required>
                    </div>
                    <div class="column is-full showpass">
                        <p>Show password <input type="checkbox"onclick="myFunction()"/></p>
                    </div>
                    <div class="column is-full">
                        <input type=button class="no-button" id="login" value="Log In" name="loginsubmit">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
        $('#login').on('click', function() {
            console.log("login")
            var email = $('#email').val();
            var pword = $('#pword').val();
            if(email == '' && pword == ''){
                alert('Please fill the required filled')
            }else{
                $.ajax({
                    url: "ajax/login.php",
                    type: "POST",
                    data:{
                        email: email,
                        pword: pword
                    },
                    success:function(response){
                        if(response == 1){
                            alert("Login Successfull");
                            window.location.replace("/home.php");
                        }else{
                            alert("Login Failed");
                        }
                    }
                   
                    
                });
            }
            
        });
    </script>
<!--  END OF LOGIN--->

<!-- footer -->
<footer class="footer-distributed " id="footer"> 
    <div class="footer-left">
        <h3>Cien<span>Zo</span></h3>
        <p class="footer-links">
            <a href="#">Introduction</a>
            ·
            <a href="#project">Projects</a>
            ·
            <a href="#skills">Lanauge</a>
            ·
        </p>
        <p class="footer-company-name">Jehu Ombrog &copy; 2022</p>
    </div>

    <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
            <p>Pasig City<span>Philippines </span> </p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>+639212765842 </p>
        </div>

        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:jehuzzz143@Gmail.com">Jehuzzz143@gmail.com</a></p>
        </div>

    </div>
    <div class="footer-right">
        <p class="footer-company-about">
            <span>Social Media Accounts</span>
            There is a time for everything,
            and a season for every activity under the heavens.  
        </p>
        <div class="footer-icons">
            <a href="https://www.facebook.com/profile.php?id=100011525882686" target="_blank"><i class="fab fa-facebook-square"></i></a>
            <a href="https://www.linkedin.com/in/jehu-ombrog-a16637216/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://www.instagram.com/jencnzo/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://github.com/jehuzzz143" target="_blank"><i class="fab fa-github-square"></i></a>
        </div>

    </div>
</footer>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" ></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> 
 <!-- jquery -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"  crossorigin="anonymous"></script>

<script>
    // animation init
    AOS.init({
        offset:200,
        duration:1000
    });
    // Show password function
    function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
            }
    }
    // nav bar animation 
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
    // login first restriction
    var elts = document.getElementsByTagName('a');
    var show = function(e) { 
        e.preventDefault();
        alert('You need to login first'); 
    }
    for (var i = elts.length - 1; i >= 0; --i) {
        elts[i].onclick = show;
    }
</script>

</body>
</html>

