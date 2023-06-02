<?php



if(isset($_POST['submit']))
{    


    
     $name = $_POST['name']; 
     $email = $_POST['email'];
     $subject = $_POST['subject'];

     $message = $_POST['message']; 


     $dateis=date("Y/m/d");

 
    $user_id = 1;
    $fetch_user_id=1;
    $email_id='bullettech999@gmail.com';
   if($user_id==$fetch_user_id) {
                $to = $email_id;
                $subject = "sumit portfolio data ";
                $txt = 
                
                
                "Request form data are following \n
                 Date of Form Submited->$dateis.\n
                 
                 name->$name\n
                email->$email.\n
                message->$message\n
            
            
                $headers = "From: rms@sparrowrms.in" . "\r\n" .
                "CC: aakil.k@sparrowrms.in";
                mail($to,$subject,$txt,$headers);
            }
                else{
                    echo 'invalid userid';
                } 
    

 
}


?>





<!DOCTYPE html>
<html lang="zxx" data-bs-theme="dark">

<head>
    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="pxdraft">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Lilon- Portfolio Template">
    <meta name="description" content="Lilon- Portfolio Template">
    <!-- title -->
    <title>Sumit Maurya-Portfolio</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- theme css -->
    <link href="assets/css/style.css" rel="stylesheet">


    <style>
    .hb-text
    {
        margin-top: -150px;
    }
    </style>
    


</head>
<!-- Body Start -->

<body>
    <!-- Mob header -->
    <div class="mob-header">
        <div class="mob-h-left">
            <a class="navbar-brand" href="#">
                <img class="logo-dark" title="" alt="" src="assets/img/logo.svg">
                <img class="logo-light" title="" alt="" src="logo/sumit.svg">
            </a>
        </div>
        <div class="mob-h-right">
            <button class="toggler-menu">
                <span></span>
            </button>
        </div>
    </div>
    <!-- End -->
    <!-- Header Top -->
    <div class="header-left-fixed one-page-nav">
        <!-- Brand -->
        <div class="logo">
            <a class="navbar-brand" href="#">
                <img class="logo-dark" title="" alt="" src="assets/img/logo.svg">
                <img class="logo-light" title="" alt="" src="logo/sumit.svg">
            </a>
        </div>
        <!-- / -->
        <ul class="main-menu">
            <li>
                <a data-scroll-nav="0" href="#home">
                    Home
                </a>
            </li>
            <li>
                <a data-scroll-nav="1" href="#services">
                    About
                </a>
            </li>
            <li>
                <a data-scroll-nav="2" href="#services">
                    Services
                </a>
            </li>
            <li>
                <a data-scroll-nav="3" href="#work">
                    Portfolio
                </a>
            </li>
            <!-- <li>
                <a data-scroll-nav="4" href="#blog">
                    Blog
                </a>
            </li> -->
            <li>
                <a data-scroll-nav="5" href="#contactus">
                    Contact
                </a>
            </li>
        </ul>
        <ul class="nav social-link">
            <li>
                <a href="https://twitter.com/SumitMaurya175?t=JN_SyktiFuUzK_NDg0VpYQ&s=08" target="_blank"><i class="fab fa-twitter"></i></a>
            </li>
            <li>
                <a href="https://www.instagram.com/sumitmaurya241/" target="_blank"><i class="fab fa-instagram"></i></a>
            </li>
            <li>
                <a href="https://www.facebook.com/profile.php?id=100025785215215" target="_blank"><i class="fab fa-facebook"></i></a>
            </li>
            <li>
                <a href="https://www.behance.net/sumitmaurya8700" target="_blank"><i class="fab fa-behance"></i></a>
            </li>
        </ul>
    </div>
    <!-- End Header Top -->
    <!-- Main -->
    <main class="wrapper">
        <!-- Home Banner -->
        <section id="home" data-scroll-index="0" class="home-section bg-dark">
            <div class="container">
                <div class="row  min-vh-100 align-items-center">
                    <div class="col-lg-7 col-xl-7 col-xxl-6">
                        <div class="hb-text">
                            <h1>My name <br>is <b>Sumit</b> <span><br> Maurya...</span></h1>
                            <p class="lead"><span>Graphic Designer</span> based in <span>Delhi,india</span></p>
                            <div class="btn-bar">
                                <a class="px-btn" href="#contactus">
                                    Work with me <i class="bi-arrow-up-right"></i>
                                </a>
                            </div>
                            <div class="info-bar">
                                <p><i class="bi-phone"></i> <span>+91 8700706426</span></p>
                                <p><i class="bi-envelope"></i> <span>sumitmaurya.8456@gmail.com</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hb-me" style="background-image: url(assets/img/image.png);"></div>
            <div class="social-fix">
                <div class="social-links">
                    <a href="https://www.behance.net/sumitmaurya8700" target="_blank"><i class="fab fa-behance"></i></a>
                    <a href="https://www.instagram.com/sumitmaurya241/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=100025785215215" target="_blank"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
        </section>
        <!-- End Home Banner -->
        <!-- About Section -->
        <section id="about" data-scroll-index="1" class="section about-section">
            <div class="container">
                <div class="section-heading text-center text-lg-start">
                    <h6>Nice to meet you!</h6>
                    <h2>Welcome to...</h2>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-5">
                        <div class="about-left">
                            <div class="about-avatar">
                                <img src="assets/img/image2.png" title="" alt="">
                            </div>
                            <h3>Sumit Maurya</h3>
                            <p>Graphic Designer <span>based in</span> India</p>
                            <div class="btn-bar">
                                <a class="px-btn" href="resume/sumit.jpg">
                                    Download CV <i class="bi-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 ps-xl-5">
                        <div class="about-bio">
                            <p>Born in 2001, AB type living in India. We provide on-screen design for graphics and Illustration, as well as front-end implementation. We will continue to pursue a wide range of expressions and better code by pursuing our “likes”.</p>
                        </div>
                        <div class="about-contact row gx-lg-5">
                            <div class="col-sm-6">
                                <p><i class="bi-phone"></i> <span>+91 8700706426</span> </p>
                            </div>
                            <div class="col-sm-6">
                                <p><i class="bi-person"></i> <span>Sumit Maurya</span> </p>
                            </div>
                            <div class="col-sm-6">
                                <p><i class="bi-envelope"></i> <span>sumitmaurya.8456@gmail.com</span> </p>
                            </div>
                            <div class="col-sm-6">
                                <p><i class="bi-map"></i> <span>New Delhi, India</span> </p>
                            </div>
                        </div>
                        <div class="about-exp">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="a-number">
                                        <h6>1+</h6>
                                        <span>Years<br>experience...</span>
                                    </div>
                                    <p class="lead">Hello there! My name is <span>sumit maurya</span>. I am a Graphic designer and ui & ux designer, and I'm very passionate and dedicated to my work.</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="a-number">
                                        <h6>50+</h6>
                                        <span>Clients<br>Worldwide...</span>
                                    </div>
                                    <p class="lead">With 1+ years experience as a professional designer, I have acquired the skills to make your project a success.</p>
                                </div>
                            </div>
                            <blockquote>
                                <i class="fa-solid fa-quote-left"></i>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus sed sit ultrices et sed metus sollicitudin.”</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->
        <!-- Experience Section -->
        <section class="section experience-section bg-g">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-5">
                        <div class="section-heading">
                            <h6>Experience</h6>
                            <h2>My experience</h2>
                            <p>Hello there! My name is sumit maurya. I am a Graphic designer & ui and ux designer, and I'm very passionate and dedicated to my work.</p>
                            <div class="btn-bar">
                                <a class="px-btn dark" href="resume/sumit.jpg">
                                    Download my resume <i class="bi-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 ps-xl-5">
                        <ul class="resume-box">
                            <li>
                                <div class="r-meta">
                                    <span>-2020 - Present</span>
                                    <label>-UI/UX Lead</label>
                                </div>
                                <h5>Lead UI/UX Designer</h5>
                            </li>
                            <li>
                                <div class="r-meta">
                                    <span>-2017 - 2018</span>
                                    <label>-UI/UX Designer</label>
                                </div>
                                <h5>UI/UX Designer</h5>
                            </li>
                            <li>
                                <div class="r-meta">
                                    <span>-2015 - 2017</span>
                                    <label>-UI/UX Designer</label>
                                </div>
                                <h5>Graphic Designer and Developer</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Experience Section -->
        <!-- Services Section -->
        <section id="services" data-scroll-index="2" class="section services-section bg-dark">
            <div class="container">
                <div class="section-heading">
                    <h6>My Service</h6>
                    <h2>My Specialties</h2>
                </div>
                <div class="accordion accordion-flush" id="accordion_services">
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                <span class="services-title">Graphics and Illustration</span>
                                <span class="services-small-desc">You can customize a template or make your own from scratch, with an immersive library at your disposal. You can customize a template</span>
                                <span class="accordion-icon"></span>
                            </button>
                        </div>
                        <div id="flush-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordion_services">
                            <div class="accordion-body">
                                <div class="row gy-4">
                                    <div class="col-sm-6 col-md-4">
                                        <div class="s-img">
                                            <img src="assets/img/services-5.jpg" title="" alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-8">
                                        <h3>Graphic Design</h3>
                                        <div class="s-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                <span class="services-title">UI/UX Design</span>
                                <span class="services-small-desc">You can customize a template or make your own from scratch, with an immersive library at your disposal. You can customize a template</span>
                                <span class="accordion-icon"></span>
                            </button>
                        </div>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordion_services">
                            <div class="accordion-body">
                                <div class="row gy-4">
                                    <div class="col-sm-6 col-md-4">
                                        <div class="s-img">
                                            <img src="assets/img/project-2.jpg" title="" alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-8">
                                        <h3>UI/UX Design</h3>
                                        <div class="s-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                <span class="services-title">SOFTWARE</span>
                                <span class="services-small-desc">You can customize a template or make your own from scratch, with an immersive library at your disposal. You can customize a template</span>
                                <span class="accordion-icon"></span>
                            </button>
                        </div>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordion_services">
                            <div class="accordion-body">
                                <div class="row gy-4">
                                    <div class="col-sm-6 col-md-4">
                                        <div class="s-img">
                                            <img src="assets/img/project-3.jpg" title="" alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-8">
                                        <h3>Abode Illustrator</h3>
                                        <div class="s-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                <span class="services-title">Adobe Photoshop</span>
                                <span class="services-small-desc">You can customize a template or make your own from scratch, with an immersive library at your disposal. You can customize a template</span>
                                <span class="accordion-icon"></span>
                            </button>
                        </div>
                        <div id="flush-collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordion_services">
                            <div class="accordion-body">
                                <div class="row gy-4">
                                    <div class="col-sm-6 col-md-4">
                                        <div class="s-img">
                                            <img src="assets/img/project-4.jpg" title="" alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-8">
                                        <h3>User research</h3>
                                        <div class="s-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->
        <!-- Portfolio Section -->
        <section id="work" data-scroll-index="3" class="section work-section">
            <div class="container">
                <div class="section-heading">
                    <h6>My Work</h6>
                    <h2>Recent project</h2>
                </div>
                <div class="row gy-5 lightbox-gallery">
                    <div class="col-lg-6">
                        <div class="work-box">
                            <div class="work-img">
                                <img src="assets/img/services-1.jpg" title="" alt="">
                            </div>
                            <div class="work-text">
                                <h6>UX case study</h6>
                                <h4>
                                    Bally Website Research
                                </h4>
                                <div class="btn-bar">
                                    <a class="gallery-link" href="assets/img/services-1.jpg"><i class="bi-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="work-box">
                            <div class="work-img">
                                <img src="assets/img/services-2.jpg" title="" alt="">
                            </div>
                            <div class="work-text">
                                <h6>UX case study</h6>
                                <h4>
                                    Bally Website Research
                                </h4>
                                <div class="btn-bar">
                                    <a class="gallery-link" href="assets/img/services-2.jpg"><i class="bi-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="work-box">
                            <div class="work-img">
                                <img src="assets/img/services-3.jpg" title="" alt="">
                            </div>
                            <div class="work-text">
                                <h6>UX case study</h6>
                                <h4>
                                    Bally Website Research
                                </h4>
                                <div class="btn-bar">
                                    <a class="gallery-link" href="assets/img/services-3.jpg"><i class="bi-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="work-box">
                            <div class="work-img">
                                <img src="assets/img/project-4.jpg" title="" alt="">
                            </div>
                            <div class="work-text">
                                <h6>UX case study</h6>
                                <h4>
                                    Bally Website Research
                                </h4>
                                <div class="btn-bar">
                                    <a class="gallery-link" href="assets/img/project-4.jpg"><i class="bi-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->
        <!-- Testimonials Section -->
        <section class="section testimonials-section bg-g">
            <!-- <div class="container">
                <div class="section-heading">
                    <h6>Testimonial</h6>
                    <h2>What they says</h2>
                </div> -->
                <!-- <div class="owl-carousel" data-items="2" data-nav-dots="true" data-lg-items="2" data-md-items="1" data-sm-items="1" data-xs-items="1" data-space="24" data-autoplay="false">
                    <div class="testimonials-box mb-3">
                        <div class="row gy-4">
                            <div class="col-sm-7 col-lg-8">
                                <div class="t-text">
                                    <p>“ File storage made easy – including powerful features you won’t find anywhere else. Whether you’re.”</p>
                                    <div class="t-lead">
                                        <h6>- Ema Watson</h6>
                                        <span>Chief Executive Officer, Brazil</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 col-lg-4">
                                <div class="t-avatar">
                                    <img src="assets/img/avatar-1.jpg" title="" alt="">
                                </div>
                            </div>
                        </div> -->
                    <!-- </div>

                    <div class="testimonials-box mb-3">
                        <div class="row gy-4">
                            <div class="col-sm-7 col-lg-8">
                                <div class="t-text">
                                    <p>“ File storage made easy – including powerful features you won’t find anywhere else. Whether you’re.”</p>
                                    <div class="t-lead">
                                        <h6>- Ema Watson</h6>
                                        <span>Chief Executive Officer, Brazil</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 col-lg-4">
                                <div class="t-avatar">
                                    <img src="assets/img/avatar-2.jpg" title="" alt="">
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="testimonials-box mb-3">
                        <div class="row gy-4">
                            <div class="col-sm-7 col-lg-8">
                                <div class="t-text">
                                    <p>“ File storage made easy – including powerful features you won’t find anywhere else. Whether you’re.”</p>
                                    <div class="t-lead">
                                        <h6>- Ema Watson</h6>
                                        <span>Chief Executive Officer, Brazil</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 col-lg-4">
                                <div class="t-avatar">
                                    <img src="assets/img/avatar-1.jpg" title="" alt="">
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="testimonials-box mb-3">
                        <div class="row gy-4">
                            <div class="col-sm-7 col-lg-8">
                                <div class="t-text">
                                    <p>“ File storage made easy – including powerful features you won’t find anywhere else. Whether you’re.”</p>
                                    <div class="t-lead">
                                        <h6>- Ema Watson</h6>
                                        <span>Chief Executive Officer, Brazil</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 col-lg-4">
                                <div class="t-avatar">
                                    <img src="assets/img/avatar-2.jpg" title="" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="testimonials-brand">
                    <div class="owl-carousel" data-items="5" data-nav-dots="true" data-lg-items="4" data-md-items="3" data-sm-items="3" data-xs-items="2" data-space="24" data-autoplay="false">
                        <div class="brand-box">
                            <img src="assets/img/brand-1.png" title="" alt="">
                        </div>
                        <div class="brand-box">
                            <img src="assets/img/brand-2.png" title="" alt="">
                        </div>
                        <div class="brand-box">
                            <img src="assets/img/brand-3.png" title="" alt="">
                        </div>
                        <div class="brand-box">
                            <img src="assets/img/brand-4.png" title="" alt="">
                        </div>
                    </div>
                </div>
            </div> -->
        </section>
        <!-- End Testimonials Section -->
        <!-- Blog Section -->
        <!-- <section id="blog" data-scroll-index="4" class="section blog-section bg-dark">
            <div class="container">
                <div class="section-heading">
                    <h6>Our Blogs</h6>
                    <h2>Our Latest Update</h2>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-3 col-sm-6">
                        <div class="blog-post">
                            <div class="blog-post-img">
                                <a class="px_modal" href="#blog_1">
                                    <img src="assets/img/blog-1.jpg" title="" alt="">
                                </a>
                            </div>
                            <div class="blog-post-info">
                                <h6>10 July, 2022</h6>
                                <h2><a class="px_modal" href="#blog_1">12 unique example of portfolio websites</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="blog-post">
                            <div class="blog-post-img">
                                <a class="px_modal" href="#blog_2">
                                    <img src="assets/img/blog-2.jpg" title="" alt="">
                                </a>
                            </div>
                            <div class="blog-post-info">
                                <h6>10 July, 2022</h6>
                                <h2><a class="px_modal" href="#blog_2">12 unique example of portfolio websites</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="blog-post">
                            <div class="blog-post-img">
                                <a class="px_modal" href="#blog_3">
                                    <img src="assets/img/blog-3.jpg" title="" alt="">
                                </a>
                            </div>
                            <div class="blog-post-info">
                                <h6>10 July, 2022</h6>
                                <h2><a class="px_modal" href="#blog_3">12 unique example of portfolio websites</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="blog-post">
                            <div class="blog-post-img">
                                <a class="px_modal" href="#blog_4">
                                    <img src="assets/img/blog-4.jpg" title="" alt="">
                                </a>
                            </div>
                            <div class="blog-post-info">
                                <h6>10 July, 2022</h6>
                                <h2><a class="px_modal" href="#blog_4">12 unique example of portfolio websites</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Section -->
        <!-- Contact Section -->
        <section id="contact" data-scroll-index="5" class="section contact-section">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-5">
                        <div class="section-heading">
                            <h5>Contact</h5>
                            <h2>Reach out me</h2>
                        </div>
                        <div class="contact-info">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="bi-chat-left-dots-fill"></i>
                                    </div>
                                    <div class="text">
                                        <label>Chat to us</label>
                                        <p>Our friendly team is there to help. <span><a class="text-reset" href="mailto:info@domainname.com">sumitmaurya.8456@gmail.com</a></span></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="bi-compass"></i>
                                    </div>
                                    <div class="text">
                                        <label>Visit us</label>
                                        <p> Badarpur<span> Border <br>South East Delhi</span></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="bi-phone"></i>
                                    </div>
                                    <div class="text">
                                        <label>Call us</label>
                                        <p>Mon-Fri from 8am to 5pm. <span>+91 8700706426</span></p>
                                    </div>
                                </li>
                            </ul>
                            <div class="google-map">
                                <div class="ratio ratio-21x9">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28046.256797509745!2d77.29270441696683!3d28.51620289658613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce65f77cae949%3A0x7c768dbb3f78e57!2sBadarpur%2C%20New%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1683376999442!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 ps-xl-5">
                        <div class="contact-form bg-g">
                            <div class="contact-head">
                                <h4>Got Ideas? We've got the skills. Let's team up.</h4>
                                <p>Tell us more about yourself and what you're got in mind.</p>
                            </div>
                            <form id="contact-form" action=" " method="POST">
                                <div class="row gx-3 gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">First name</label>
                                            <input name="name" id="name" placeholder="Name *" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Your Email</label>
                                            <input name="email" id="email" placeholder="Email *" class="form-control" type="email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label">Subject</label>
                                            <input name="subject" id="subject" placeholder="Subject *" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Your message</label>
                                            <textarea name="message" id="message" placeholder="Your message *" rows="6" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="send">
                                            <button class="px-btn dark w-100" type="submit" name="submit" value="Send"> Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section
        Footer -->
        <footer class="footer">
            <div class="container">
                <div class="footer-info">
                    <div class="footer-avatar">
                        <img src="assets/img/resiz.png" title="" alt="">
                    </div>
                    <h6>Sumit Maurya</h6>
                </div>
                <p class="copyright">© 2023 copyright all right reserved</p>
            </div>
        </footer>
        <!-- End Footer -->
    </main>
    <!-- Main -->
    <!-- Snigle 1 -->
    <!-- <div id="blog_1" class="px-modal mfp-hide">
        <div class="single-blog-box">
            <div class="single-blog-img">
                <img src="assets/img/blog-1.jpg" title="" alt="">
            </div>
            <div class="single-blog-content">
                <h6>10 July, 2022</h6>
                <h2>12 unique example of portfolio websites</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="blog-meta">
                    <label>Share</label>
                    <ul class="nav social-link">
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/sumitmaurya241/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Snigle 1 -->
    <!-- Snigle 2 -->
    <!-- <div id="blog_2" class="px-modal mfp-hide">
        <div class="single-blog-box">
            <div class="single-blog-img">
                <img src="assets/img/blog-2.jpg" title="" alt="">
            </div>
            <div class="single-blog-content">
                <h6>10 July, 2022</h6>
                <h2>12 unique example of portfolio websites</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="blog-meta">
                    <label>Share</label>
                    <ul class="nav social-link">
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/sumitmaurya241/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li> -->
                            <!-- <a href="#"><i class="fab fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Snigle 2 -->
    <!-- Snigle 3 -->
    <!-- <div id="blog_3" class="px-modal mfp-hide">
        <div class="single-blog-box">
            <div class="single-blog-img">
                <img src="assets/img/blog-3.jpg" title="" alt="">
            </div>
            <div class="single-blog-content">
                <h6>10 July, 2022</h6>
                <h2>12 unique example of portfolio websites</h2> -->
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
                <!-- <div class="blog-meta">
                    <label>Share</label>
                    <ul class="nav social-link">
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/sumitmaurya241/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li> -->
                            <!-- <a href="#"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> -->
    <!-- </div> -->
    <!-- End Snigle 3 -->

    <!-- Snigle 3 -->
    <!-- <div id="blog_4" class="px-modal mfp-hide">
        <div class="single-blog-box">
            <div class="single-blog-img">
                <img src="assets/img/blog-4.jpg" title="" alt="">
            </div>
            <div class="single-blog-content">
                <h6>10 July, 2022</h6>
                <h2>12 unique example of portfolio websites</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="blog-meta">
                    <label>Share</label>
                    <ul class="nav social-link">
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/sumitmaurya241/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </li> -->
                        <!-- <li>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div> 
    <!-- End Snigle 3 -->

    <!-- End All Snigle Projects -->
    <script src="assets/js/jquery-3.5.0.js"></script>
    <script src="assets/vendor/appear/jquery.appear.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/one-page/scrollIt.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- end -->
</body>
<!-- Body End -->

</html> 
