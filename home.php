<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <!-- data aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- My CSS -->
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- CodingNepal jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Cienzo</title>
  </head>
  <body>
<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light" id="navigation">
  <div class="container-fluid">
    <a class="navbar-brand disabled" href="#">Cienzo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav" > 
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link  nav-tex" href="#">Introduction</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-tex" href="#project">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-tex" href="#skills" tabindex="-1" aria-disabled="true">Language</a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-tex"  href="#certificates" >Certificates</a>
        </li>
      </ul>
    </div>
    <a class="navbar-brand " onclick="showBtn()" ><button class="btn btn-success" id="updateBtn">Update</button></a>
  </div>
</nav>
<!-- Paralax -->

<div id="particles-js"  style="padding:0;">
  <div class="actual-content-container" >
      <center>
        <p class="text-slogan"> Live what you love</p> 
        <a class="btn-explore button" href="https://jehuzzz143.github.io/jehu.github.io/Jehu_CV.pdf" download="Jehu_CV" role="button" target="_blank">Download CV</a>
      </center>
  </div>

</div>
<!-- Introduction -->
<div class="container " data-aos="fade-up">
  <div class="row" >
    <div class=" col-md-3 order-md-1 ">
      <img class="img_profile img-thumbnail" src="pictures/me.jpg" alt="My Formal Picture"/>
    </div>
    <div class=" col-md-9 order-md-2">
      <p class="p_information_head"  >Hello I'm Jehu and I do <span class="auto-type" style="text-transform: uppercase;color:red;"></span></p>
      <p class="p_information " id="project">
        
        I started loving technology when I was a child. I did many stuff like troubleshooting, photo and video editing for free  and it gives my teenage life  purposeful. As a result, I became technophile and I pursued Information Technology in college and now I love coding and I think it runs through my blood. When I perform coding, it excites me to solve problem, learn new algorithm and  hopefully I can use it when I'm given a chance to work with known companies or people in the future.
      </p>
      
    </div>
  </div>
</div>


<!-- career goal -->
<!-- add modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> New Career Goal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="myForm">
        <div class="modal-body">
                <br>
                <select class="form-select" id="type" aria-label="Default select example" required focus>
                    <option selected>Select Career Category</option>
                    <option value="1">Short Term</option>
                    <option value="2">Long Term</option>
                </select>
                <br>
                <div class="mb-3">
                    <input type="text" class="form-control" id="career" placeholder="Career Goal" required>
                </div> 
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="btnSave">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal delete -->
<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="" method="POST" id="myFormUpdate">
                <input type="hidden" id="idD" name="idD"  />
                <h3>Are you sure you want to delete this data?</h3>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-danger" id="careerDelete">Delete</button>
        </div>
        </div>
    </div>
</div>
<!-- Modal Update -->
<div id="Umodal">
</div>


<div class="container">
  <div class="container ">
      <center>
        <p class="title_header" >>>  Career Goals  <<</p>
      </center>
  </div>
  
  <div class="row">
    <button class="btn btn-primary hide btnshow" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="careerAdd()" > <i class="far fa-plus-circle"></i> Add New Career Goal</button>
    <div class="col-md-6 shadow main_info"  style="text-align:center;"><b class="p_information_head">SHORT TERM</b>
      <p style="text-align: justify"> My short term career goal is to find a position where I can use the knowledge and strengths that i have. I learned the fundamentals of web development materials during my bachelor's degree, so I want to expand and improve my skills and knowledge by doing the following;
      </p>
      <div class="container" id="short"></div>
    </div>
    <div class="col-md-6 shadow main_info"  style="text-align:center;"><b class="p_information_head">LONG TERM</b>
      <p style="text-align: justify; ">My long-term professional ambition is to work as a freelancer and earn enough money to support my family. This is my ultimate career goal, where I will be able to work whenever I want and earn a lot of money. But that is not my only long-term goal; I have several others; 
      </p> 
      <div class="container" id="long">
      </div> 
    </div>
  </div>
</div>

<!-- Projects -->
<br><br>
<!-- <div class="container project_container " id="project_container">
  <div class="container ">
    <center>
    <p class="title_header" >>>  ACADEMIC PROJECTS  <<</p>
    </center>
  </div>
  <div class="row" >
    <div class="col-md-6   no-padding" data-aos="fade-right">  
      <div class="videoWrapper">
        <iframe src="https://www.youtube.com/embed/gozZTajwUn0?start=78" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
    <div class="col-md-6   text-wrap no-padding" data-aos="fade-left"> 
      <h5 class="project_header" style="text-align:center;">
        Online Booking and Information ManagementSystem with SMS Notification for Ridges and Clouds
      </h5>
      <p class="project_body">
        This is a web application where you can manage the booking of customers and the information of the company. It provide easy access to the information of customers and a booking system which they can monitor the bookings status in one system only. The system can provide sales report, Calendar of the company and Notifications through email and phone number.
        The project is available online with this link <a href="https://www.ridgeclouds.site/"></a>
      </p>
    </div>
  </div>
  <div class="row ">
    <div class="col-xs-6 col-md-6  order-xs-1  order-sm-1 order-md-2 order-lg-2 text-wrap no-padding"  data-aos="fade-left">
      <div class="videoWrapper">
        <iframe style="float:right;"src="https://www.youtube.com/embed/iuWQQwfP99g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
    <div class="col-xs-6 col-md-6  order-xs-2 order-sm-2 order-md-1 order-lg-1 no-padding" data-aos="fade-right" > 
      <h5 class="project_header" style="text-align:center;">
        ADHOME MANILA WEBSITE WITH SQL DATABASE USING PHP
      </h5>
      <p class="project_body">This is my second year website project. The project goal is to promote Adhome Aanila tutoring service through online. The website use MySQL as database and PHP for the functionalities. It simply allows the students or potential customers to apply online for the tutoring service and the adhome of the website can confirm the students and monitor their records. For beginners the project has positive feedback because the design wasn't bad and the functionality is working although there's a lot of missing function.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6   no-padding" data-aos="fade-right" >   
      <div class="videoWrapper">
        <iframe  src="https://www.youtube.com/embed/IUzz-owV8PM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
    <div class="col-md-6   text-wrap no-padding" data-aos="fade-left">
      <h5 class="project_header" style="text-align:center;">ADHOME MANILA APPLICATION USING JAVA WITH DATABASE CONNECTION</h5>
       <p class="project_body">This project is created when im second year college. The project is to create a java application with database connection which is for us is so hard to do because our time is too little and we also have to selfstudy java database connection syntax. This is the output of our project which includes text field restrinction, transaction report, schedule, and record of a students. Afterall, the project looks goods and correctly working .Actually it's beyond from the code that our professor teach.</p>
    </div>
  </div>
  <div class="row ">
    
    <div class="col-xs-6 col-md-6  order-xs-1  order-sm-1 order-md-2 order-lg-2 text-wrap no-padding"  data-aos="fade-left">
      <div class="videoWrapper">
        <iframe src="https://www.youtube.com/embed/I4p_h8ottT0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
    <div class="col-xs-6 col-md-6  order-xs-2 order-sm-2 order-md-1 order-lg-1 no-padding" data-aos="fade-right" > 
      <h5 class="project_header" style="text-align:center;">
       STOP MOTION ANIMATION USING ADOBE ANIMATE
      </h5>
      <p class="project_body">My second-year project was to use Adobe Animate to create a stop motion animation. It was my first time making animation; the tale was true to life, but the predominant language was Tagalog. On every frame, I used the mouse to sketch. This project has made me realize that I'm not very good at sketching, therefore I'll have to stick with coding.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6   no-padding" data-aos="fade-right">  
      <div class="videoWrapper">
        <iframe  src="https://www.youtube.com/embed/nD0QO74jKnM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
    <div class="col-md-6   text-wrap no-padding" data-aos="fade-left"> 
      <h5 class="project_header" style="text-align:center;">
        HTML AND CSS BEGINNERS PROJECT: LOGITECH WEBSITE
      </h5>
      <p class="project_body">
       This project is created when im in first year college. The goal of the project is to create basic static website using HTML and CSS. I did this with my groupmate and we decided to make our own logitech website since that time we love logitech projects.
      </p>
    </div>
  </div>
  
</div> -->
<div>
  <center><button type="button" class="btn_see" id="see_more"><center>See More</center></button></center>
</div>
<br><br>
<br><br>

<div class="container-fluid language d-flex align-items-center" id="language">
  <div class="container border-4  vertical-center">
    <div class="row ">
      <div class="col coffee ">
        <h4 data-target="1234" class="count">0</h3>
        <p>CUP OF COFFEE<p>
      </div>
      <div class="col coffee">
        <h4 data-target="6" class="count">0</h3>
        <p>PROJECTS</p>
      </div>
      <div class="col coffee">
        <h4 data-target="100" class="count">0</h3>
        <p>CERTIFICATE</p>
      </div>
      <div class="col coffee">
        <h4 data-target="20" class="count">0</h3>
        <p>SEMINARS</p>
      </div>
    </div>
    
  </div>
</div>
<!--  -->

<!-- CERTIFICATES -->
<div id="certificates"></div>
<?php 
  include "components/certificates.php";
?>



<div class="container-fluid skill_background" id="skills" >
  <div class="container ">
    <center>
    <p class="title_header" >  SKILLS  </p>
    </center>
    <div class="container">
    <center>
      <div class="row gap-4 border-primary justify-content-center">
        <div class="col col-lg-2 border-primary skills_box" data-aos="flip-left">
          <div class="p-2 m-3"  >
            <center>

            <img class="skills_image img-fluid" src="pictures/html.png" alt="html logo">
            <p class="skills_title">HTML</p>
            </center> 
          </div>
        </div>
        <div class="col col-lg-2 border-primary skills_box" data-aos="flip-right">
          <div class="p-2 m-3">
            <center>
            <img class="skills_image" src="pictures/css.png" alt="CSS logo">
            <p class="skills_title">CSS</p>
            </center> 
          </div>
        </div>
        <div class="col col-lg-2 border-primary skills_box" data-aos="flip-left">
          <div class="p-2 m-3">
            <center>
            <div class="" style="width: 130px;">
              <img class="skills_image img-fluid" src="pictures/javascript.png" alt="Javascript logo" style="object-fit: contain;">
            </div>
            <p class="skills_title">Javascript</p>
            </center> 
          </div>
        </div>
        <div class="col col-lg-2 border-primary skills_box" data-aos="flip-right">
          <div class="p-2 m-3">
            <center>
            <img class="skills_image" src="pictures/java.png" alt="html logo">
            <p class="skills_title">Java</p>
            </center> 
          </div>
        </div>
        <div class="col col-lg-2 border-primary skills_box" data-aos="flip-left">
          <div class="p-2 m-3">
            <center>
            <img class="skills_image" src="pictures/php.png" alt="PHP logo">
            <p class="skills_title">PHP</p>
            </center> 
          </div>
        </div>
        <div class="col col-lg-2 border-primary skills_box" data-aos="flip-right">
          <div class="p-2 m-3">
            <center>
            <img class="skills_image" src="pictures/bootstrap.png" alt="Boostrap logo">
            <p class="skills_title">Bootstrap</p>
            </center> 
          </div>
        </div>
        <div class="col col-lg-2 border-primary skills_box" data-aos="flip-left">
          <div class="p-2 m-3">
            <center>
             <div class="" style="width: 150px;padding-bottom: 40px;">
              <img class="skills_image" src="pictures/MySQL.png" alt="PHP logo">
              </div>
            
            <p class="skills_title">MySQL</p>
            </center> 
          </div>
        </div>
        <div class="col col-lg-2 border-primary skills_box" data-aos="flip-right">
          <div class="p-2 m-3">
            <center>
            <img class="skills_image" src="pictures/github.png" alt="CSS logo">
            <p class="skills_title">Github</p>
            </center> 
          </div>
        </div>
        <div class="col col-lg-2 border-primary skills_box" data-aos="flip-right">
          <div class="p-2 m-3">
            <center>
            <img class="skills_image" src="pictures/vue.png" alt="CSS logo">
            <p class="skills_title">Vueks</p>
            </center> 
          </div>
        </div>
        <div class="col col-lg-2 border-primary skills_box" data-aos="flip-right">
          <div class="p-2 m-3">
            <center>
            <img class="skills_image" src="pictures/react.png" alt="CSS logo">
            <p class="skills_title">Reactjs</p>
            </center> 
          </div>
        </div>

      </div>
    </center>
    </div>

  </div>
</div>

<!-- gallery -->
<div class="grid-wrapper" style="padding-bottom:20px; padding-top:20px;">
    <div>
        <img src="pictures/personal/1styear.JPG" alt="" />
    </div>
    <div class="tall">
        <img src="pictures/personal/bike.JPG" alt="" />
    </div>
    <div class="wide">
        <img src="pictures/personal/IMG_8947.JPG" alt="">
    </div>

    <div class="wide">
        <img src="pictures/personal/homie.JPG" alt="" />
    </div>
    <div class="tall">
        <img src="pictures/personal/outing.JPG" alt="" />
    </div>
    <div class="big">
        <img src="pictures/personal/school.JPG" alt="" />
    </div>
    <div>
        <img src="pictures/personal/selfie.JPG" alt="" />
    </div>
    <div class="big">
        <img src="pictures/personal/g2.JPG" alt="" />
    </div>
    <div class="big">
        <img src="pictures/personal/sleep1.JPG" alt="" />
    </div>
    <div class="tall">
        <img src="pictures/personal/selfie3.JPG" alt="" />
    </div>
    <div>
        <img src="pictures/personal/sleep.JPG" alt="" />
    </div>

    <div>
        <img src="pictures/personal/levi.JPG" alt="" />
    </div>
    <div>
        <img src="pictures/personal/IMG_1448.JPG" alt="" />
    </div>

    <div class="wide">
        <img src="pictures/personal/g3.JPG" alt="" />
    </div>
    <div>
        <img src="pictures/personal/g5.JPG" alt="" />
    </div>

</div>


<!-- footer -->
    <footer class="footer-distributed hide" id="footer">
 
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
and a season for every activity under the heavens.  &amp; SEO Learner.
        </p>
        <div class="footer-icons">
 
          <a href="https://www.facebook.com/profile.php?id=100011525882686" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a href="https://www.linkedin.com/in/jehu-ombrog-a16637216/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
          <a href="https://www.instagram.com/jencnzo/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://github.com/jehuzzz143" target="_blank"><i class="fab fa-github-square"></i></a>
 
        </div>
      </div>
    </footer>


<!-- medium zoom -->
<script src="https://cdn.jsdelivr.net/npm/medium-zoom/dist/medium-zoom.min.js"></script>
<!--  -->
<script src="js/home.js"></script>
<script src="particles.js"></script>
<script src="app.js"></script>
<!-- masonry -->
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"  async></script>
<!-- Optional JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    var typed = new Typed(".auto-type",{
        strings: [ "Web Coding", "Create Web  Designs", "Web Hosting", "Programming"],
        typeSpeed: 100,
        backSpeed: 100,
        loop: true,
    })
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    offset:200,
    duration:1000
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>




  
  </body>
</html>