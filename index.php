<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Pimpri Chinchwad College of Engineering</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="images/pccoe-logo.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="css/animate.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="css/header.css">

    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="css/nice-select.css">

    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="css/jquery.nice-number.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="css/style.css">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="css/responsive.css">

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

    <style>
        .ltdwidth{
            max-width:600px;
        }
        .back-to-top {
            position: fixed;
            left: 20px;

        }
        
        .values{
            padding-top:100px;
        }

        @media (max-width: 568px){
            .values{
            padding-top:0px;
        }
        }

        
    @media (min-width: 570px){
        .feature ul li .singel-feature .cont {
        width: 70%;
        float: left;
        overflow: hidden;
    }

        }

        .sticky-side{
            position: fixed !important;
            top:0;
            left:0;
            transition: 2s;
        }

        .sidebar1 a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
            text-align:center;
        }

        .sidebar1 a:hover:not(.active) {
            background-color: #07294d;
            color: white;
            }

            .dropbtn {
                width:100%;
                text-align:center;
                background-color: white;
                color: black;
                padding: 16px;
                font-size: 16px;
                border: none;
                cursor: pointer;
                }

                .dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
/* .dropdown:hover .dropdown-content {display: block;} */

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #07294d;
        color:white;
}

        .dropbtn:hover {
        background-color: #07294d;
        color:white;
        }

        .dropdown {
        width:100%;        
        position: relative;
        display: inline-block;
        }

        .dropdown-content {
        display: none;
        position: relative;
        background-color: white;
        min-width: 160px;
        overflow: auto;
        
        right: 0;
        z-index: 1;
        }

        .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        }

        .dropdown a:hover {background-color: #ddd;}

        .show {display: block;}

        /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 5000; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.youtube-vdo{
    height:400px;
    width:710px;
}
@media (max-width: 768px){
    .youtube-vdo{
    height:100%;
    width:100%;
}
}

        
    @media (max-width: 570px){
        .youtube-vdo{
    height:300px;
    width:100%;
}

        }


          /*Curtain Animation */
          .overlay {
    height: 100%;
    width: 100%;
    position: fixed;
    z-index: 10000 !important;
    top: 0;
    left: 0;
    background:url('images/curtain.png') no-repeat;
    background-size: cover;
    overflow-x: hidden;
    transition: 4.5s;
  }
  
  .overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
  }
  
  .overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
  }
  
  .overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
  }
  
  .overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
  }
  
  @media screen and (max-height: 450px) {
    .overlay a {font-size: 20px}
    .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
    }
  }
  
  .animate-left {
      position: fixed;
      -webkit-animation: animateleft 0.4s;
      animation: animateleft 0.4s;
  }
  @-webkit-keyframes animateleft {
      from {
          top: -300px;
          opacity: 0;
      }
      to {
          bottom: 0;
          opacity: 1;
      }
  }
  @keyframes animateleft {
      from {
          top: -300px;
          opacity: 0;
      }
      to {
          bottom: 0;
          opacity: 1;
      }
  }



        .launch-btn {
    position: relative;
    border: none;
    border-radius: 0px;
    padding: 1rem 1rem;
    font-size: 1rem;
    font-weight: 500;
    letter-spacing: 0.25px;
    line-height: 1.5rem;
    cursor: pointer;
    overflow: hidden;
    transition: all .3s, outline 0s;
    transition: all .3s, outline 0s;
    width: 150px;
    font-family: 'Orbitron', sans-serif;
}
    </style>
</head>

<body>

<div class="preloader">
    <div class="loader rubix-cube">
        <div class="layer layer-1"></div>
        <div class="layer layer-2"></div>
        <div class="layer layer-3 color-1"></div>
        <div class="layer layer-4"></div>
        <div class="layer layer-5"></div>
        <div class="layer layer-6"></div>
        <div class="layer layer-7"></div>
        <div class="layer layer-8"></div>
    </div>
</div>
<div style="display:none" id="myNav" class="overlay">
        <div id="myNav1" class="overlay">
        <div class="overlay-content">
            <div class="container">
                <h1 style="font-size: 56px; color: white;font-family: 'Playfair Display', serif;">ENTC Department Website launching ceremony</h1>
               
                <h1 style="font-size: 56px; color: white;font-family: 'Playfair Display', serif;" id="demo"></h1>
                <div style="padding-top:60px;">
                <button style="font-family: 'Playfair Display', serif;color:white;background:black;" class="launch-btn" onclick="dwntime()">Launch</button>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div>
    <!--====== PRELOADER PART START ======-->

    <?php include 'partials/loader.php';?>

    <!--====== PRELOADER PART START ======-->

    <!--====== HEADER PART START ======-->

    <?php include 'partials/header.php';?>
    

    <!--====== HEADER PART ENDS ======-->

    <!--====== SLIDER PART START ======-->

    <section id="slider-part" class="slider-active">
        <div class="single-slider bg_cover pt-150" style="background-image: url(images/clg2.png);height:500px;" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="slider-cont">
                            <center>
                            <div class="ltdwidth">
                                <h3  style="color:white;font-weight:bolder" data-animation="bounceInLeft" data-delay="0.5s">Welcome to Department of Electronics and Telecommunication Engineering</h3>
                                <p data-animation="fadeInUp" data-delay="1.3s"></p>
                                <ul>
                                    <li>
                                        <button data-animation="fadeInUp" data-delay="0.6s"  class="main-btn" id="myBtn">College tour</button>
                                        
                                </ul>
                            </div>
                        </center>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->

        <div class="single-slider bg_cover pt-150" style="background-image: url(images/fes.PNG);background-size:cover;max-height:500px;max-width:80%;" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="slider-cont">
                            <center>
                            <div class="ltdwidth">
                                <h3 style="color:white;font-weight:bolder" data-animation="bounceInLeft" data-delay="0.5s">FestX 2021</h3>
                                <p style="padding-top:20px;" data-animation="fadeInUp" data-delay="0.7s">Department of Electronics and Telecommunications  In Association with ETSA and IETE student forum are thrilled to announce a techfest for you all.</p>
                                 
                                 <a href="https://festx.tech/"> <button data-animation="fadeInUp" data-delay="0.8s"  class="main-btn" >Visit website</button></a>
                            <ul>
                            </ul>
                            </div>
                            </center>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->

        <div class="single-slider bg_cover pt-150" style="background-image: url(images/new3.JPG);height:500px;" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="slider-cont">
                            <center>
                            <div class="ltdwidth">
                                <h3 style="color:white;font-weight:bolder" data-animation="bounceInLeft" data-delay="0.5s">The Exellence at its best !</h3>
                            <p style="padding-top:20px;" data-animation="fadeInUp" data-delay="0.7s">The Department of Electronics and Telecommunication Engineering has been playing a vital role in producing engineers and of highest skills and caliber.</p>
                            <a href="about.php"> <button data-animation="fadeInUp" data-delay="0.8s"  class="main-btn" >About Us</button></a>
                            
                            <ul>
                            </ul>
                            </div>
                            </center>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->

	
    </section>

    <!--====== SLIDER PART ENDS ======-->
   
    <?php include 'partials/sidebar.php';?>
    <!--====== CATEGORY PART START ======-->
    <section style="padding: 20px; background: #07294d; color: white;">
        <div class="container">
        <div class="row">
            <div class="col-md-3 ">
                <a >Upcomming Events:</a>
            </div>
            <div class="col-md-9">
            <marquee onmouseover="this.stop();" onmouseout="this.start();" class="ticker-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">

<span class="notification me-2  mt-0 mb-0 text-primary fw-bold">
    <span class="dot "></span>
    <a style="color:white;"> 1) Event-Name : Fundamentals of Computer Networks |  Date:Second Week of November |   Faculty Co-ordinators:Mrs. Swati Patil &nbsp;
</a>
</span>
<span class="notification me-2 mt-0 mb-0 text-primary fw-bold">
    <span class="dot "></span>
    <a style="color:white;"> 2) Event-Name : Artificial Intelligence based
Algorithm Implementation
using Python. |  Date:Third Week of November  |  Faculty Co-ordinators:Mrs. Swati Patil &nbsp;
</span>
<span class="notification me-2 mt-0 mb-0 text-primary fw-bold">
<span class="dot "></span>
    <a style="color:white;"> 3) Event-Name : Self ideal and pursuing of self ideal |  Date:Forth Week of November  |  Faculty Co-ordinators:Mrs. Swati Patil &nbsp;
</span>

<span class="notification me-2 mt-0 mb-0 text-primary fw-bold">
<span class="dot "></span>
    <a style="color:white;"> 4) Event-Name : IETE awarenes program |  Date:Second Week of November |   Faculty Co-ordinators:Mr. S. D. Nagrale &nbsp;
</span>

</marquee>
            </div>
        </div>
        </div>
    </section>

    <section style="position: relative;" id="category-part">
        <div class="container">
            <div style="margin-top: 100px;" class="category pt-40 pb-80">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="values category-text pt-40">
                            <center>
                                <h2 >Our Values</h2>
                            </center>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-8 offset-2">
                        <div class="row category-slied mt-40">
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-1">
                                        <span class="icon">
                                            <img style="height:100px;width:100px;padding:20px;" src="images/values/ranking.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Project-based <br> Learning</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-2">
                                        <span class="icon">
                                            <img style="height:100px;width:100px;padding:20px;" src="images/values/academic.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Excellent <br>
                                                Academics</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-3">
                                        <span class="icon">
                                            <img style="height:100px;width:100px;padding:20px;" src="images/values/research.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Research <br> Orientation</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-1">
                                        <span class="icon">
                                            <img style="height:100px;width:100px;padding:20px;" src="images/values/bulding.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Good <br> Infrastructure</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-2">
                                        <span class="icon">
                                            <img style="height:100px;width:100px;padding:20px;" src="images/values/graduated.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Top <br> Placements</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            
                        </div> <!-- category slied -->
                    </div>
                </div> <!-- row -->
            </div> <!-- category -->
        </div> <!-- container -->
    </section>
    
    <!--====== CATEGORY PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about-part" class="pt-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>About us</h5>
                        <h2>Electronics and Telecommunication Engineering Department</h2>
                    </div> <!-- section title -->
                    <div class="about-cont">
                        <p style="text-align: justify;">The Department of Electronics and Telecommunication Engineering has been playing a vital role in producing engineers and of highest skills and caliber. Department of E & TC has highly qualified and experienced faculty with expertise in the areas of Digital Image and Signal Processing, VLSI and Embedded System, Communication Engineering and Process Automation etc. The department has defined the programme outcomes and all the good initiatives are undertaken to facilitate and fulfill the same.</p>
                        <a href="about.php" class="main-btn mt-55">Read More</a>
                    </div>
                </div> <!-- about cont -->
                <div class="col-lg-6 offset-lg-1">
                    <div class="about-event mt-50">
                        <div class="event-title">
                            <h3>Highlights</h3>
                        </div> <!-- event title -->
                        <marquee  style="width:100%;" direction="up"  behavior="scroll" scrolldelay="200"  height="300px">
                            <ul class="side-news-data">
                              <li><a style="color:red" href="pdf/Vaccination-Camp-27-Oct.pdf">Notice regarding Vaccination Camp for Covid 19 on 27 Oct 2021</a></li>
                              <li><a style="color:red" href="images/PCCOE-Recruitment.jpg"> PCCOE Appointments </a></li>
                              <li><a style="color:red" href="pdf/PCET-Brochure-2021.pdf">PCET Brochure</a></li>
                              <li><a style="color:red" href="pdf/PCCOE India Today ranking.pdf">Times Engineering Survey 2021 :PCCoE ranked 13th in INDIA among Top 125 Private Engineering Institutes in Times Engineering Survey 2021 </a></li>
                                <li><a style="color:red" href="pdf/all-unipune-10-11-2019-20.pdf">Student Eligibility Number 2010-11 to 2019-20</a></li>
                            </ul>
                      </marquee>
                    </div> <!-- about event -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-bg">
            <img src="images/about/about.png" alt="About">
        </div>
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== APPLY PART START ======-->

    <section id="apply-aprt" class="pb-120">
        <div class="container">
            <div class="apply">
                <div class="row no-gutters">
                    <div class=" col-lg-6">
                        <div class="apply-cont apply-color-1">
                            <h3>FESTX</h3>
                            <p style="text-align: justify;">Department of Electronics and Telecommunications  In Association with ETSA and IETE student forum are thrilled to announce a techfest for you all.</p>
                            <a href="https://festx.tech/" class="main-btn">Click Here</a>
                        </div> <!-- apply cont -->
                    </div>
                    <div class=" col-lg-6">
                        <div class="apply-cont apply-color-2">
                            <h3>Pimpri Chinchwad College of Engineering, Pune</h3>
                            <p>Institute website</p>
                            <a href="http://www.pccoepune.com/" class="main-btn">Click Here</a>
                        </div> <!-- apply cont -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== APPLY PART ENDS ======-->

    <!--====== COURSE PART START ======-->

    <section id="course-part" class="pt-115 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-45">
                        <h5>Electronics Department at Glance</h5>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row course-slied mt-30">
                

		        <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="images/faculty.jpg" alt="Course" width="100%" height="200px;">
                            </div>
                        </div>
                        <div class="cont">
                            <h4>Meet our team</h4>
                            <p style="text-align: justify;">The influence of good <strong>Teacher</strong> can never be <strong>Erased</strong><br/></p>
                            <br/><a href="faculty.php" class="main-btn">Know More</a><br/><br/>
                        </div>
                    </div> <!-- singel course -->
                </div>		        

		        <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="images/entcevents1.jpg" alt="Course" width="100%" height="200px;">
                            </div>
                        </div>
                        <div class="cont">
                            <h4>Student Activities</h4>
                            <p style="text-align: justify;">Our department organizes various actvities for active involvement of students.<br/></p>
                            <br/><a href="stactivities.php" class="main-btn">Know More</a><br/><br/>
                        </div>
                    </div> <!-- singel course -->
                </div>

                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="images/hodk.JPG" alt="Course" width="auto" height="200px;">
                            </div>
                        </div>
                        <div class="cont">
                            <h4>From HOD's Desk</h4>
                            <p style="text-align: justify;">The Goal of Education is advancement of knowledge. The vision of the department<br/></p>
                            <br/><a href="hod.php" class="main-btn">Know More</a><br/><br/>
                        </div>
                    </div> <!-- singel course -->
                </div>

		        <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="images/research.jpg" alt="Course" width="100%" height="200px;">
                            </div>
                        </div>
                        <div class="cont">
                            <h4>Research</h4>
                            <p style="text-align: justify;">Various faculties and students have their journals, research papers published in IEEE, Scopus indexed journals.</p>
                            <br/><a href="researchdev.php" class="main-btn">Know More</a>
                        </div>
                    </div> <!-- singel course -->
                </div>

                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="images/achievements.jpg" alt="Course" width="100%" height="200px;">
                            </div>
                        </div>
                        <div class="cont">
                            <h4>Student Achievements</h4>
                            <p style="text-align: justify;">Our students have participated and won various competitions held across the world.<br/></p>
                            <br/><a href="stachievements.php" class="main-btn">Know More</a><br/><br/>
                        </div>
                    </div> <!-- singel course -->
                </div>

                
            </div> <!-- course slied -->
        </div> <!-- container -->
    </section>

    <!--====== COURSE PART ENDS ======-->

    <!--====== VIDEO FEATURE PART START ======-->

    <section id="video-feature" class="bg_cover pt-60 pb-110" style="background-image: url(images/pccoe.jpg)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-last order-lg-first">
                    <div class="video text-lg-left text-center pt-50">
                    </div> <!-- row -->
                </div>
                <div class="col-lg-5 offset-lg-1 order-first order-lg-last">
                    <div class="feature pt-50">
                        <div class="feature-title">
                            <center><h3>Our Qualities</h3></center>
                        </div>
                        <ul>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <center><img style="padding-top:30px;" src="images/all-icon/f-1.png" alt="icon"></center>
                                    </div>
                                    <div class="cont">
                                        <center><h4>Top Ranked Institute</h4>
                                        <p>India Today Engineering Survey 2021 : 76th among Top 200 private institutes.
					<br/>Times Engineering Survey- 13th among Top 125 Private Engineering Institutes.</p>
                </center>
                </div>
                                </div> <!-- singel feature -->
                            </li>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <center><img src="images/all-icon/f-2.png" alt="icon"></center>
                                    </div>
                                    <div class="cont">
                                        <center><h4>Faculty Support</h4>
                                        <p>Highly qualified faculties having PhD and MTech degrees.</p></center>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <center><img src="images/all-icon/f-3.png" alt="icon"></center>
                                    </div>
                                    <div class="cont">
                                        <center><h4>Books & Library</h4>
                                        <p>Big and ventilated library with more than 25 thousand books from 1000 categories.</p></center>
                                    </div></center>
                                </div> <!-- singel feature -->
                            </li>
                        </ul>
                    </div> <!-- feature -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="feature-bg"></div> <!-- feature bg -->
    </section>

    <!--====== VIDEO FEATURE PART ENDS ======-->

    <!--====== TEACHERS PART START ======-->


    <section>
        <div class="container">
            <div style="padding-top:70px;padding-bottom:70px;padding-left:30px;padding-right:30px;">
                <h1 style="font-family: 'Playfair Display', serif;">All of us do not have equal talent. But, all of us have an equal opportunity to develop our talents.</h1>
            </div>
            <div style="padding:20px;">
                <h5 style="float:right;">- Dr. A.P.J. Abdul Kalam</h5>
            </div>
        </div>
    </section>
    <!--====== TEASTIMONIAL PART START ======-->

    <section id="testimonial" class="bg_cover pt-115 pb-115" data-overlay="8" style="background-image: url(images/clg.png)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-40">
                        <h5>Testimonial</h5>
                        <h2>What they say</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row testimonial-slied mt-40">
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="images/testimonial/1.jfif" style="border-radius: 50%;" alt="Testimonial" width="100" height="100">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p style="text-align: justify;">I am extremely grateful and fortunate to be the part of Pimpri Chinchwad College of engineering where I can grow.
                                 The entire faculty and department leaves no stone unturned to shape one's future.
                                  My three years at PCCOE have been a wonderful experience of learning with prolific exposure to outside. 
                                  Huge respect, love and devotion for entire faculty members and department. </p>
                            <div>
                                <h6>Hiral Bhuptani</h6>
                                <span>ENTC, Engineering</span>
                            </div>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>

		<div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="images/testimonial/2.jpg" style="border-radius: 50%;" alt="Testimonial" width="100" height="100">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p  style="text-align: justify;">It was a great experience studying at Pimpri Chinchwad College of engineering, a memory to cherish lifetime!
                                My experience at Pimpri Chinchwad College of engineering was full of learning and grooming,
                                The faculty and department helped me a lot in not only academics but also shapimg my personality.
                                Thanks a lot Pimpri Chinchwad College of engineering for being unforgettable part of my life! </p>
                            <h6>Darshan Khope</h6>
                            <span>ENTC, Engineering</span>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>

		<div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="images/testimonial/3.jpg" style="border-radius: 50%;" alt="Testimonial" width="100" height="100">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p  style="text-align: justify;"> I am very grateful to study at PCCOE one of the esteemed College of Maharashtra. In PCCOE I came up with great
                                 opportunities and was able to build up my both academic as well as co- curricular skills . 
                                 .The college gave us proper guidance with best mentors to tackle the hurdles and motivated us at every stage . 
                                 It has been a great learning and amazing experience till now in PCCOE.</p>
                            <h6>Madhav Pujari</h6>
                            <span>ENTC, Engineering</span>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>

		

                
            </div> <!-- testimonial slied -->
        </div> <!-- container -->
    </section>

    <!--====== TEASTIMONIAL PART ENDS ======-->

    <!--====== PATNAR LOGO PART START ======-->

    <div id="patnar-logo" class="pt-40 pb-80 gray-bg">
        <div class="container">
	        <div style="padding:40px;">
                <center>
                    <h1 style="font-family: 'Montserrat', sans-serif;font-weight:700px;">Our Major Recruiters</h1>
                </center>
            </div>
            <div class="row patnar-slied">
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="images/vmware.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="images/credit.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="images/adobe.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="images/hsbc.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="images/directi.jpg" alt="Logo">
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>

    <!--====== PATNAR LOGO PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <?php include 'partials/footer.php';?>


    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="container">
                <center>
                <iframe class="youtube-vdo" src="https://www.youtube.com/embed/MI1fzta6abA" frameborder="0" allowfullscreen>
                </iframe>
                </center>
            </div>
        </div>

    </div>





    <!--====== jquery js ======-->
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="js/bootstrap.min.js"></script>

    <!--====== Slick js ======-->
    <script src="js/slick.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="js/jquery.magnific-popup.min.js"></script>

    <!--====== Counter Up js ======-->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>

    <!--====== Nice Select js ======-->
    <script src="js/jquery.nice-select.min.js"></script>

    <!--====== Nice Number js ======-->
    <script src="js/jquery.nice-number.min.js"></script>

    <!--====== Count Down js ======-->
    <script src="js/jquery.countdown.min.js"></script>

    <!--====== Validator js ======-->
    <script src="js/validator.min.js"></script>

    <!--====== Ajax Contact js ======-->
    <script src="js/ajax-contact.js"></script>

    <!--====== Main js ======-->
    <script src="js/main.js"></script>

    <!--====== Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="js/map-script.js"></script>

   
  <script>

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}




    function sticky_relocate() {
    var window_top = $(window).scrollTop();
    var footer_top = $("#footer-part").offset().top;
    var div_top = $('#sticky-anchor').offset().top;
    var div_height = $(".sidebar1").height();

    if (window_top + div_height > footer_top)
        $('.sidebar1').removeClass('sticky-side');    
    else if (window_top > div_top) {
        $('.sidebar1').addClass('sticky-side');
    } else {
        $('.sidebar1').removeClass('sticky-side');
    }
}

$(function () {
    $(window).scroll(sticky_relocate);
    sticky_relocate();
});
  </script>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function sidedrop() { document.getElementById("myDropdown").classList.toggle("show");}
function sidedrop1() { document.getElementById("myDropdown1").classList.toggle("show");}
function sidedrop2() { document.getElementById("myDropdown2").classList.toggle("show");}
function sidedrop3() { document.getElementById("myDropdown3").classList.toggle("show");}
function sidedrop4() { document.getElementById("myDropdown4").classList.toggle("show");}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/614c01abd326717cb682e347/1fg8ed2fb';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();


    //10sec timer
function dwntime(){
var timeleft = 10;
var downloadTimer = setInterval(function(){
  if(timeleft <= 0){
    clearInterval(downloadTimer);
    document.getElementById("demo").innerHTML = "Congratulations";
    document.getElementById("myNav").style.left = "100%";
    document.getElementById("myNav1").style.left = "-100%";
  } else {
    document.getElementById("demo").innerHTML = timeleft ;
    
  }
  timeleft -= 1;
}, 1000);
}

    </script>
    <!--End of Tawk.to Script-->
</body>

</html>
