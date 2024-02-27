<?php

// Check if the site is under maintenance

$underMaintenance = false; // Set this to true during maintenance



if ($underMaintenance) {

    include('maintenance.html');

    exit(); // Stop further execution of the PHP code

}





// Set caching headers

$expiry = 31536000; // 1 year in seconds

header('Cache-Control: max-age=' . $expiry);

header('Expires: ' . gmdate('D, d M Y H:i:s', time() + $expiry) . ' GMT');







// Rest of your PHP code goes here

// ...    //, maximum-scale=1, user-scalable=no">



// For example, you might have your HTML content below:

?>

<!--$expiry = 31536000; // 1 year-->

<!--header('Cache-Control: max-age=' . $expiry);-->

<!--header('Expires: ' . gmdate('D, d M Y H:i:s', time() + $expiry) . ' GMT');-->



<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">







    <!-- SEO Meta Tags -->

    <meta name="description" content="Your description">

    <meta name="author" content="Your name">



    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->

    <meta property="og:site_name" content="" /> <!-- website name -->

    <meta property="og:site" content="" /> <!-- website link -->

    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->

    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->

    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->

    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->

    <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->



    <!-- Webpage Title -->

    <title>XcelereX - IT Solutions</title>


    <style>
        .img-area {
            will-change: transform;
            transition: transform 0.5s ease;
        }
        .header-new {
            background: #000 url(../../public/dashboard/assets/images/prograssive.jpg);
            background-size: cover;
        }
        .img-area:hover {
            transform: perspective(1000px) rotateX(-12.44deg) rotateY(9.01deg) scale3d(1, 1, 1);
        }
    </style>


    <!-- Styles -->

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../public/dashboard/css/style.css">

    <link rel="stylesheet" href="../../public/dashboard/css/swiper.css">

    <link rel="stylesheet" href="../../public/dashboard/css/aos.min.css">

    <link rel="stylesheet" href="../../public/dashboard/css/fontawesome-all.min.css">

    <link rel="stylesheet" href="../../public/dashboard/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">







    <!-- Favicon -->

    <link rel="icon" href="../../public/dashboard/assets/images/Logo_Favicon.png">

    <!--<link rel="apple-touch-icon" sizes="180x180" href="../../public/dashboard/assets/images/apple-touch-icon.png">-->

    <!--<link rel="icon" type="image/png" sizes="32x32" href="../../public/dashboard/assets/images/favicon-32x32.png">-->

    <!--<link rel="icon" type="image/png" sizes="16x16" href="../../public/dashboard/assets/images/favicon-16x16.png">-->

    <!--<link rel="manifest" href="../../public/dashboard/assets/images/site.webmanifest">-->





</head>

<body>



    <!-- Navigation -->

    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">

        <div class="container">



            <!-- Image Logo -->

            <!-- <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a> -->



            <!-- Text Logo - Use this if you don't have a graphic logo -->

            <a class="navbar-brand" href="#header">

                <img src="../../public/dashboard/assets/images/whitelogo.png" alt="XcelereX Logo" width="220" height="50">

            </a>



            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>



            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">

                        <a class="nav-link active" aria-current="page" href="#header">Home</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="#about">About</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="#services">Services</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="#plans">Values</a>

                    </li>



                    <li class="nav-item">

                        <a class="nav-link" href="#contact">ContactUs</a>

                    </li>

                </ul>

            </div> <!-- end of navbar-collapse -->

        </div> <!-- end of container -->

    </nav> <!-- end of navbar -->

    <!-- end of navigation -->



    <div class="header-new">

    <!-- Home -->

    <section class="home py-5 d-flex align-items-center" id="header">

        <div class="container text-light py-5 glass" data-aos="fade-right">

            <h1 class="headline">Innovation <span class="home_text">Orchestrators :</span><br>Empowering Business Through Technology</h1>

            <p class="para para-light py-3">Welcome to Xcelerex, where we are dedicated to elevating your business through a strategic focus on advanced engineering solutions. Our commitment is to empower your organization to innovate, automate, and optimize, forging a path toward sustainable growth and enduring success. As a dynamic startup, we specialize in harnessing cutting-edge technologies to unlock your organization's untapped potential, paving the way for unparalleled success.</p>



            <div class="my-3">

                <a class="btn" href="#plans">Core Values</a>

            </div>

        </div> <!-- end of container -->

    </section> <!-- end of home -->

    </div>





    <!-- About -->

    <section class="about d-flex align-items-center text-light" id="about">

        <div class="container">



            <div class="row d-flex align-items-center">

                <div class="col-lg-12" data-aos="fade-right">

                    <div class="container text-light py-5 glass" data-aos="fade-right">

                        <h2>ABOUT US</h2>

                        <!--<h1>Who Are We</h1>-->

                        <p class="py-2 para-light">As an experienced solutions engineering and professional services company, XcelereX prides itself in establishing partnership relationships with our customers by ensuring that what we do transforms and grows their businesses.</p>

                        <p class="py-2 para-light">XcelereX has successfully developed more than 50+ solutions during its journey and have been used by global customers.</p>

                        <p class="py-2 para-light">The XcelereX approach to success is its focus on our customers. Our guiding principle is diligently practiced across the organization and encompasses our entire circle of influence – customers, employees, vendors, partners and technology associates.</p>



                        <!--<div class="my-3">-->

                        <!--    <a class="btn" href="#your-link">Learn More</a>-->

                        <!--</div>-->

                    </div>
                </div>

                <!--<div class="col-lg-5 text-center py-4 py-sm-0" data-aos="fade-down"> -->

                <!--    <img class="img-fluid" src="../../public/dashboard/assets/images/teamwork.jpeg" alt="about" >-->

                <!--</div>-->

            </div> <!-- end of row -->

        </div> <!-- end of container -->

    </section> <!-- end of about -->





    <!-- Services -->

    <section class="services d-flex align-items-center" id="services">

        <div class="container text-light">

            <div class="text-center pb-4">

                <h3 class="py-2">OUR SERVICES</h3>

                <!--<p class="para-light">Experience a service like no other. Our commitment to customer satisfaction sets us apart, delivering results that make a difference.</p>-->

                <div class="service-tab">

                    <div style="display: inline-block; margin-right: 10px; font-weight: 700;"><a href="#web-app">Web App</a></div>

                    <div style="display: inline-block; margin-right: 10px; font-weight: 700;"><a href="#ux-ui-design">UI/UX Design</a></div>

                    <div style="display: inline-block; margin-right: 10px; font-weight: 700;"><a href="#mobile-app">Mobile App</a></div>

                    <div style="display: inline-block; margin-right: 10px; font-weight: 700;"><a href="#cloud-computing">Cloud Computing</a></div>

                    <div style="display: inline-block; margin-right: 10px; font-weight: 700;"><a href="##devops">DevOps</a></div>

                    <div style="display: inline-block; margin-right: 10px; font-weight: 700;"><a href="#Iot">IoT</a></div>

                    <div style="display: inline-block; margin-right: 10px; font-weight: 700;"><a href="#data-enginnering">Data Engineering</a></div>

                    <div style="display: inline-block; margin-right: 10px; font-weight: 700;"><a href="#CRMS">CRMs</a></div>

                    <div style="display: inline-block; margin-right: 10px; font-weight: 700;"><a href="#ai-ml">AI & ML</a></div>

                </div>

            </div>

            <div class="row gy-4 py-2" data-aos="zoom-in">

                <div class="col-lg-4">

                    <div id="web-app" class="card cardWeb_Development bg-transparent">

                        <!--<i class="fas fa-phone fa-2x"></i>-->

                        <h4 class="py-2">Web Application Development</h4>

                        <p class="para-light">
                        <ul>

                            <li>Frontend development technologies</li>

                            <li>Backend development frameworks</li>

                            <li>Database management systems</li>

                            <li>Web security practices</li>

                            <li>API integration and RESTful services</li>

                        </ul>
                        </p>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div id="ux-ui-design" class="card cardUIUX bg-transparent">

                        <!--<i class="fas fa-wifi fa-2x"></i>-->

                        <h4 class="py-2">UI/UX Design</h4>

                        <p class="para-light">
                        <ul>

                            <li>User interface (UI) design principles</li>

                            <li>User experience (UX) design methodologies</li>

                            <li>Wireframing and prototyping tools</li>

                            <li>Usability testing</li>

                            <li>Responsive design </li>

                        </ul>

                        </p>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div id="mobile-app" class="card cardAPP_Development bg-transparent">

                        <!--<i class="fas fa-phone fa-2x"></i>-->

                        <h4 class="py-2">Mobile App Development</h4>

                        <p class="para-light">
                        <ul>

                            <li>Native app development (iOS and Android)</li>

                            <li>Cross-platform development frameworks</li>

                            <li>User interface design</li>

                            <li>Mobile security measures</li>

                            <li>App testing and quality assurance</li>

                        </ul>
                        </p>

                    </div>

                </div>

            </div> <!-- end of row -->

            <div class="row gy-4 py-2" data-aos="zoom-in">

                <div class="col-lg-4">

                    <div id="cloud-computing" class="card cardCLOUD_COMPUTING bg-transparent">

                        <!--<i class="fas fa-home fa-2x"></i>-->

                        <h4 class="py-2">Cloud Computing</h4>

                        <p class="para-light">
                        <ul>

                            <li>Cloud Storage Solutions</li>

                            <li>Scalability and Elasticity</li>

                            <li>Serverless Computing</li>

                            <li>Cloud Security Measures</li>

                            <li>Cloud Migration Strategies</li>

                        </ul>
                        </p>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div id="devops" class="card cardDEVOPs bg-transparent">

                        <!--<i class="fas fa-tv fa-2x"></i>-->

                        <h4 class="py-2">DevOps Services</h4>

                        <p class="para-light">
                        <ul>

                            <li>Continuous integration and deployment </li>

                            <li>Automation tools (e.g., Jenkins, Ansible)</li>

                            <li>Containerization (e.g., Docker)</li>

                            <li>Infrastructure as code (IaC)</li>

                            <li>Monitoring and alerting systems</li>

                        </ul>
                        </p>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div id="Iot" class="card cardIOT bg-transparent">

                        <!--<i class="fas fa-tv fa-2x"></i>-->

                        <h4 class="py-2">IoT (Internet of Things)</h4>

                        <p class="para-light">
                        <ul>

                            <li>Sensor technologies</li>

                            <li>Wireless communication</li>

                            <li>IoT platforms</li>

                            <li>Data analytics and visualization</li>

                            <li>Edge computing</li>

                        </ul>
                        </p>

                    </div>

                </div>

            </div> <!-- end of row -->

            <div class="row gy-4 py-2" data-aos="zoom-in">

                <div class="col-lg-4">

                    <div id="data-enginnering" class="card cardDATA_ENGINEERING bg-transparent">

                        <!--<i class="fas fa-home fa-2x"></i>-->

                        <h4 class="py-2">Data Engineering</h4>

                        <p class="para-light">
                        <ul>

                            <li>Data integration</li>

                            <li>Data warehousing</li>

                            <li>ETL (Extract, Transform, Load) processes</li>

                            <li>Big data technologies</li>

                            <li>Data pipeline design</li>

                        </ul>
                        </p>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div id="CRMS" class="card cardCRMs bg-transparent">

                        <!--<i class="fas fa-tv fa-2x"></i>-->

                        <h4 class="py-2">CRMs</h4>

                        <p class="para-light">
                        <ul>

                            <li>Customer data management</li>

                            <li>Sales automation</li>

                            <li>Marketing automation</li>

                            <li>Analytics and reporting</li>

                            <li>Integration with other systems</li>

                        </ul>
                        </p>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div id="ai-ml" class="card cardAI_ML bg-transparent">

                        <!--<i class="fas fa-tv fa-2x"></i>-->

                        <h4 class="py-2">AI & ML</h4>

                        <p class="para-light">
                        <ul>

                            <li>Machine learning algorithms</li>

                            <li>Model training and optimization</li>

                            <li>Predictive analytics</li>

                            <li>Deep learning frameworks</li>

                            <li>AI model deployment</li>

                        </ul>
                        </p>

                    </div>

                </div>

            </div> <!-- end of row -->

        </div> <!-- end of container -->

    </section> <!-- end of services -->





    <!-- Plans -->

    <div class="slider-2 testimonial text-light d-flex align-items-center" id="plans">

        <div class="container">

            <div class="row">

                <div class="text-center w-lg-75 m-auto pb-4">

                    <h2 class="py-2">Core Values</h2>

                    <!-- <p class="para-light">Discover the transformative experiences shared by our valued clients. 

            Their testimonials reflect the unparalleled commitment and satisfaction that define our business, 

            offering a glimpse into the exceptional service and results we consistently deliver.</p> -->

                    <div id="">
                        <ul class="tabslider" id="tabslider">
                            <li class="tab-list" onclick="changeTab(0)">Excellence</li>
                            <li class="tab-list" onclick="changeTab(1)">Client focused</li>
                            <li class="tab-list" onclick="changeTab(2)">Ethics</li>
                            <li class="tab-list" onclick="changeTab(3)">Learn</li>
                            <li class="tab-list" onclick="changeTab(4)">Empowerment</li>
                            <li class="tab-list" onclick="changeTab(5)">Responsibility</li>
                            <li class="tab-list" onclick="changeTab(6)">Efficiency</li>
                            <li class="tab-list" onclick="changeTab(7)">eXceptional Service</li>
                        </ul>
                    </div>



                </div>

            </div> <!-- end of row -->

            <div class="row p-2" data-aos="zoom-in">

                <div class="col-lg-12">


                    <!-- Card Slider -->

                    <div class="slider-container">

                        <div class="tab-swiper-container values-card-slider">

                            <div class="swiper-wrapper">

                                <!-- Slide -->

                                <div id="excellence" class="swiper-slide">

                                    <div class="container text-light py-5 glass" data-aos="fade-right">

                                        <div class="testimonial-card p-4">

                                            <h4 class="py-2">X - Excellence</h4>

                                            <p>Striving for excellence in all that we do, from our services to our relationships, to consistently deliver high-quality results. We continuously seek creative solutions, cutting-edge technologies, and novel approaches to empower our clients and partners.</p>

                                        </div>

                                    </div>

                                </div> <!-- end of swiper-slide -->

                                <!-- end of slide -->

                                <!-- Slide -->

                                <div id="client-focused" class=" swiper-slide">

                                    <div class="container text-light py-5 glass" data-aos="fade-right">

                                        <div class="testimonial-card p-4">

                                            <h4 class="py-2">C - Client focused</h4>

                                            <p>Our customers are at the center of everything we do. We are dedicated to understanding their unique needs and providing tailored solutions that exceed their expectations. Promoting collaboration and teamwork, both internally and with our clients, to find innovative solutions and achieve common goals.</p>

                                        </div>

                                    </div>

                                </div> <!-- end of swiper-slide -->

                                <!-- end of slide -->

                                <!-- Slide -->

                                <div id="ethics" class=" swiper-slide">

                                    <div class="container text-light py-5 glass" data-aos="fade-right">

                                        <div class="testimonial-card p-4">

                                            <h4 class="py-2">E - Ethics</h4>

                                            <p>Upholding the highest ethical standards, ensuring transparency, honesty, and integrity in all our interactions.</p>

                                        </div>

                                    </div>

                                </div> <!-- end of swiper-slide -->

                                <!-- end of slide -->

                                <!-- Slide -->

                                <div id="learn" class=" swiper-slide">

                                    <div class="container text-light py-5 glass" data-aos="fade-right">

                                        <div class="testimonial-card p-4">

                                            <h4 class="py-2">L - Learn</h4>

                                            <p>A commitment to continuous learning and improvement, fostering a culture of curiosity and adaptability.</p>

                                        </div>

                                    </div>

                                </div> <!-- end of swiper-slide -->

                                <!-- end of slide -->

                                <!-- Slide -->

                                <div id="empowerment" class=" swiper-slide">

                                    <div class="container text-light py-5 glass" data-aos="fade-right">

                                        <div class="testimonial-card p-4">

                                            <h4 class="py-2">E - Empowerment</h4>

                                            <p>Empowering our clients and partners by providing them with the tools, knowledge, and support they need to succeed.</p>

                                        </div>

                                    </div>

                                </div>

                                <div id="responsibility" class=" swiper-slide">

                                    <div class="container text-light py-5 glass" data-aos="fade-right">

                                        <div class="testimonial-card p-4">

                                            <h4 class="py-2">R - Responsibility</h4>

                                            <p>Taking responsibility for our actions and decisions, recognizing our role as responsible stewards of our clients' and partners' trust.</p>

                                        </div>

                                    </div>

                                </div>

                                <div id="efficiency" class=" swiper-slide">

                                    <div class="container text-light py-5 glass" data-aos="fade-right">

                                        <div class="testimonial-card p-4">

                                            <h4 class="py-2">E - Efficiency</h4>

                                            <p>Striving for efficiency in all our operations, using resources wisely to maximize productivity and value.</p>

                                        </div>

                                    </div>

                                </div>

                                <div id="exceptional-service" class="swiper-slide">

                                    <div class="container text-light py-5 glass" data-aos="fade-right">

                                        <div class="testimonial-card p-4">

                                            <h4 class="py-2">X - eXceptional Service</h4>

                                            <p>Going above and beyond to deliver exceptional service, consistently exceeding expectations..</p>

                                        </div>

                                    </div>

                                </div>

                            </div> <!-- end of swiper-wrapper -->



                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>

                            <div class="swiper-button-prev"></div>



                        </div> <!-- end of swiper-container -->

                    </div> <!-- end of slider-container -->

                    <!-- end of card slider -->



                </div> <!-- end of col -->

            </div> <!-- end of row -->

        </div> <!-- end of container -->

    </div>




    <!--Our Partners-->

    <section class="work d-flex align-items-center slider-3">

        <div class="container text-light py-5 glass" data-aos="fade-right">



            <div class="row">



                <div class="text-center w-lg-75 m-auto pb-4">

                    <h2>OUR PARTNERS</h2>

                </div>


                <div class="slider-container">

                    <div class="logo-container">

                        <img class="logo" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTk3IiBoZWlnaHQ9IjI4IiB2aWV3Qm94PSIwIDAgMTk3IDI4IiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTEzMC43MzcgNy43NDQ2MUMxMzEuMzQxIDcuOTkyODIgMTMxLjg1MiA4LjI2MzAxIDEzMi40MTEgOC41OTg2NkMxMzYuNjg5IDExLjE2NzMgMTM4LjY4OCAxNi43ODY5IDEzNi42MjQgMjEuNDI4N0MxMzYuNjI0IDIxLjQyODcgMTM2LjQyOSAyMS44NTgxIDEzNi4yOTQgMjIuMTA5QzEzNi4xNTkgMjIuMzYgMTM2LjI0MyAyMi4xOTcgMTM1Ljk3OSAyMi42Nzg0QzEzNS43MTYgMjMuMTU5OCAxMzUuMjIgMjMuNzkgMTM1LjIyIDIzLjc5QzEzNS4yMiAyMy43OSAxMzUuNTQ1IDIzLjM0NDcgMTM1LjU0NSAyMS4xOTIzQzEzNS41NDUgMTkuMDM5OSAxMzQuMjQgMTYuMjc0OCAxMzAuNjE4IDE0Ljc2NTNDMTMwLjM5NyAxNC42NzMxIDEzMC4xNzYgMTQuNTg3MSAxMjkuOTYxIDE0LjUwNjlDMTI5LjI0OSAxNC4yNDIzIDEyOC41ODkgMTQuMDUyNyAxMjguMTA1IDEzLjkwODJMMTI4LjAzNSAxMy44ODc0QzEyOC4wMTMgMTMuODgwNyAxMjcuOTkxIDEzLjg3NDIgMTI3Ljk2OSAxMy44Njc4QzEyNi4wMDkgMTMuNTI1MSAxMjQuNjYgMTIuMjQ2MyAxMjQuNjYgMTAuNTA5NEMxMjQuNzI1IDkuNDYwNTUgMTI1LjA0MyA4Ljc5Mjg2IDEyNi4xMDUgOC4wMTcwM0MxMjYuNzI1IDcuNTYzNTMgMTI3LjU2NSA3LjM0OTAxIDEyOC4xNTYgNy4yNDkwNEMxMjguNjI3IDcuMTY5MjggMTI5LjEwOSA3LjIwNDEgMTI5LjU2OCA3LjMzOTNDMTI5Ljg5MyA3LjQzNTI2IDEzMC4zMDQgNy41NjY2NSAxMzAuNzM3IDcuNzQ0NjFaIiBmaWxsPSIjMTM5MjhBIi8+CjxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNMTIyLjUzMSA3LjYzMzI0QzExNi4xMSAxMC4wNzY5IDExMy42OTUgMTcuMTk2NyAxMTcuMDY5IDIyLjgwODNDMTE3LjY3MyAyMy43MDU1IDExOC4yNzMgMjQuNzA0NiAxMTkuNTk1IDI1LjI0NTNDMTE5Ljg2NyAyNS4zMzY3IDEyMC41NCAyNS40NjIxIDEyMC45NDcgMjUuMTUzM0MxMjEuOTM5IDI0LjM5ODggMTIxLjQ4NiAyMi4wODkzIDEyMy43MDUgMjAuNjg1MkMxMjQuODk1IDIwLjAwMDEgMTI1LjUyIDE5Ljg0MjMgMTI2Ljg0OSAxOS44ODQzQzEzMS40MzYgMjAuMDI5IDEzNC40NzYgMjIuNzkgMTM1LjIxOSAyMy43OTAyQzEzNS4yMTkgMjMuNzkwMiAxMzQuNzg2IDE5LjcxMTUgMTI5LjcyMiAxOC4yODIzQzEyNi42NDMgMTcuNDEzMiAxMjQuNjEyIDE3LjQ3MzMgMTIzLjIyNSAxNi4zMjMzQzEyMS43MjEgMTUuMDc1MSAxMjEuNTE4IDEzLjg3NTUgMTIxLjY3MSAxMi4wODJDMTIxLjk2MiAxMC4zMDE0IDEyMy4wMjIgOS4yMDQ3NSAxMjQuMDEgOC41MzA3MkMxMjYuMjcyIDYuOTg4IDEyOC44NzggNy4xNjczNyAxMjguODc4IDcuMTY3MzdDMTI4Ljg3OCA3LjE2NzM3IDEyNy42ODMgNi44ODI5IDEyNi4zMjMgNi45MTUxNUMxMjUuMjU3IDYuOTMwMDEgMTIzLjk1IDcuMDkzMjcgMTIyLjUzMSA3LjYzMzI0WiIgZmlsbD0id2hpdGUiLz4KPHBhdGggZD0iTTEwLjEzMTEgNC43MDAxMkMxMi4zMDIzIDQuNzAwMTIgMTQuNTIxNSA1LjU0OTcgMTYuNzg4NiA3LjI1MDY0TDE5LjQ2NzEgMy4yMzI1QzE2LjU0ODggMS4xMzYxNSAxMy4zOTk5IDAuMDg4ODY3MiAxMC4wMjIzIDAuMDg4ODY3MkM3LjUxMzQ3IDAuMDg4ODY3MiA1LjM0Nzc5IDAuNzQ3ODcxIDMuNTI3MDcgMi4wNjIzMkMxLjcwNDUxIDMuMzc4NTQgMC43OTUwNjcgNS4yMDA2IDAuNzk1MDY3IDcuNTMwMjdDMC43OTUwNjcgOC4zOTIzMiAwLjkzMzQyIDkuMTc3NzggMS4yMTE5NyA5Ljg4ODQ0QzEuNDg4NjcgMTAuNTk5MSAxLjgzMTc5IDExLjE4MTUgMi4yNDMxNiAxMS42MzU3QzIuNjUyNjggMTIuMDg5OSAzLjE4Mzk2IDEyLjUwODQgMy44MzUxNCAxMi44OTMxQzQuNDg2MzIgMTMuMjc3OSA1LjExMzUyIDEzLjU3MzUgNS43MTY3MyAxMy43ODM3QzYuMzE5OTUgMTMuOTkzOSA3LjAxOTA5IDE0LjIwMjIgNy44MTYgMTQuNDEyNEM4LjIwMTU1IDE0LjUwNSA4LjY5NTkzIDE0LjYyMjYgOS4yOTkxNSAxNC43NjE1QzkuOTAyMzYgMTQuOTAyMiAxMC4zOTEyIDE1LjAxOCAxMC43NjM4IDE1LjExMDZDMTEuMTM4MyAxNS4yMDMyIDExLjU2NjMgMTUuMzIwOCAxMi4wNDc4IDE1LjQ1OTdDMTIuNTI5MiAxNS42MDA0IDEyLjkxNjYgMTUuNzQ0NyAxMy4yMDYyIDE1Ljg5NjFDMTMuNDk1OCAxNi4wNDc1IDEzLjc3ODEgMTYuMjIyIDE0LjA1NjYgMTYuNDE5N0MxNC4zMzMzIDE2LjYxNzQgMTQuNTMyNiAxNi44NTA3IDE0LjY1NDMgMTcuMTE3OUMxNC43NzQyIDE3LjM4NTEgMTQuODM1MSAxNy42ODI1IDE0LjgzNTEgMTguMDA4NEMxNC44MzUxIDE5Ljg3MTUgMTMuNDk1OCAyMC44MDMgMTAuODE5MiAyMC44MDNDNy45OTY3OSAyMC44MDMgNS40MDMxMyAxOS43NTU3IDMuMDQwMDcgMTcuNjU5M0wwIDIxLjUwNDdDMS40NDgwOSAyMi43NjIyIDMuMTMwNDYgMjMuNzI0IDUuMDQ3MTEgMjQuMzg2NUM2Ljk2Mzc1IDI1LjA0OTEgOC45MjQ2NyAyNS4zODIyIDEwLjkyOCAyNS4zODIyQzEzLjUwODggMjUuMzgyMiAxNS43Mjc5IDI0LjcxNzggMTcuNTg1NiAyMy4zOTA5QzE5LjQ0MzIgMjIuMDY0IDIwLjM3MSAyMC4yMDEgMjAuMzcxIDE3LjgwMThDMjAuMzcxIDE2Ljc3NzcgMjAuMTkwMyAxNS44NTE1IDE5LjgyODcgMTUuMDI1MUMxOS40NjcxIDE0LjE5ODcgMTkuMDMxOCAxMy41MzQzIDE4LjUyNjMgMTMuMDMzOEMxOC4wMjA5IDEyLjUzMzQgMTcuMzQzOSAxMi4wNzkyIDE2LjUwMDkgMTEuNjcxM0MxNS42NTYgMTEuMjYzNCAxNC45MDM0IDEwLjk2NiAxNC4yMzkzIDEwLjc4MDhDMTMuNTc1MiAxMC41OTM4IDEyLjc2MTcgMTAuMzg1NCAxMS43OTY5IDEwLjE1MkM5LjUyOTczIDkuNjM5MDggOC4xMTg1NCA5LjIzMyA3LjU2MzI4IDguOTMwMjFDNi43NDIzOSA4LjQ4ODUgNi4zMzI4NiA3LjkyOTI0IDYuMzMyODYgNy4yNTI0MkM2LjMzMjg2IDYuMzQ0MDYgNi43MTI4NyA1LjY5MjE4IDcuNDcyODkgNS4yOTVDOC4yMzI5MSA0Ljg5OTYgOS4xMTgzNiA0LjcwMTkgMTAuMTMzIDQuNzAxOUwxMC4xMzExIDQuNzAwMTJaIiBmaWxsPSJ3aGl0ZSIvPgo8cGF0aCBkPSJNMzguNjUzOSA5Ljk1ODEzQzM2LjgyMDIgOC4yMjMzNSAzNC41NTMxIDcuMzU1OTYgMzEuODUwNiA3LjM1NTk2QzI5LjE0ODEgNy4zNTU5NiAyNi44ODEgOC4yMjMzNSAyNS4wNDczIDkuOTU4MTNDMjMuMjEzNyAxMS42OTI5IDIyLjI5NjkgMTMuODMwMiAyMi4yOTY5IDE2LjM3MDFDMjIuMjk2OSAxOC45MDk5IDIzLjIxMzcgMjEuMDQ1NCAyNS4wNDczIDIyLjc4MDJDMjYuODgxIDI0LjUxNSAyOS4xNDgxIDI1LjM4MjQgMzEuODUwNiAyNS4zODI0QzM0LjU1MzEgMjUuMzgyNCAzNi44MjAyIDI0LjUxNSAzOC42NTM5IDIyLjc4MDJDNDAuNDg3NSAyMS4wNDU0IDQxLjQwNDMgMTguOTA4MSA0MS40MDQzIDE2LjM3MDFDNDEuNDA0MyAxMy44MzIgNDAuNDg3NSAxMS42OTQ3IDM4LjY1MzkgOS45NTgxM1pNMzUuMDg5OSAxOS44OTg0QzM0LjI1NzkgMjAuODA2OCAzMy4xNzY5IDIxLjI2MDkgMzEuODUwNiAyMS4yNjA5QzMwLjUyNDIgMjEuMjYwOSAyOS40NDUxIDIwLjgwNjggMjguNjExMyAxOS44OTg0QzI3Ljc3OTMgMTguOTkwMSAyNy4zNjI0IDE3LjgxNDUgMjcuMzYyNCAxNi4zNzAxQzI3LjM2MjQgMTQuOTI1NiAyNy43NzkzIDEzLjc1MDEgMjguNjExMyAxMi44NDE3QzI5LjQ0MzMgMTEuOTMzNCAzMC41MjI0IDExLjQ3OTIgMzEuODUwNiAxMS40NzkyQzMzLjE3ODggMTEuNDc5MiAzNC4yNTYxIDExLjkzMzQgMzUuMDg5OSAxMi44NDE3QzM1LjkyMzcgMTMuNzUwMSAzNi4zMzg3IDE0LjkyNzQgMzYuMzM4NyAxNi4zNzAxQzM2LjMzODcgMTcuODEyNyAzNS45MjE4IDE4Ljk5MDEgMzUuMDg5OSAxOS44OTg0WiIgZmlsbD0id2hpdGUiLz4KPHBhdGggZD0iTTg4Ljg1MzEgOS45NTgxM0M4Ny4wMTk0IDguMjIzMzUgODQuNzUyMyA3LjM1NTk2IDgyLjA0OTggNy4zNTU5NkM3OS4zNDczIDcuMzU1OTYgNzcuMDgwMiA4LjIyMzM1IDc1LjI0NjUgOS45NTgxM0M3My40MTI5IDExLjY5MjkgNzIuNDk2MSAxMy44MzAyIDcyLjQ5NjEgMTYuMzcwMUM3Mi40OTYxIDE4LjkwOTkgNzMuNDEyOSAyMS4wNDU0IDc1LjI0NjUgMjIuNzgwMkM3Ny4wODAyIDI0LjUxNSA3OS4zNDczIDI1LjM4MjQgODIuMDQ5OCAyNS4zODI0Qzg0Ljc1MjMgMjUuMzgyNCA4Ny4wMTk0IDI0LjUxNSA4OC44NTMxIDIyLjc4MDJDOTAuNjg2NyAyMS4wNDU0IDkxLjYwMzUgMTguOTA4MSA5MS42MDM1IDE2LjM3MDFDOTEuNjAzNSAxMy44MzIgOTAuNjg2NyAxMS42OTQ3IDg4Ljg1MzEgOS45NTgxM1pNODUuMjg5MSAxOS44OTg0Qzg0LjQ1NzEgMjAuODA2OCA4My4zNzYxIDIxLjI2MDkgODIuMDQ5OCAyMS4yNjA5QzgwLjcyMzUgMjEuMjYwOSA3OS42NDQzIDIwLjgwNjggNzguODEwNSAxOS44OTg0Qzc3Ljk3ODUgMTguOTkwMSA3Ny41NjE2IDE3LjgxNDUgNzcuNTYxNiAxNi4zNzAxQzc3LjU2MTYgMTQuOTI1NiA3Ny45Nzg1IDEzLjc1MDEgNzguODEwNSAxMi44NDE3Qzc5LjY0MjUgMTEuOTMzNCA4MC43MjE2IDExLjQ3OTIgODIuMDQ5OCAxMS40NzkyQzgzLjM3OCAxMS40NzkyIDg0LjQ1NTMgMTEuOTMzNCA4NS4yODkxIDEyLjg0MTdDODYuMTIyOSAxMy43NTAxIDg2LjUzOCAxNC45Mjc0IDg2LjUzOCAxNi4zNzAxQzg2LjUzOCAxNy44MTI3IDg2LjEyMTEgMTguOTkwMSA4NS4yODkxIDE5Ljg5ODRaIiBmaWxsPSJ3aGl0ZSIvPgo8cGF0aCBkPSJNNDUuNDA4MyA3Ljc3NDI4SDQyLjU4NTlWMTEuNzU2OEg0NS40MDgzVjI0Ljk2MzZINTAuNDM4OFYxMS43NTg2SDU0LjYwMDVWNy43NzYwNkg1MC40Mzg4VjYuMjM4OThDNTAuNDM4OCA1LjU0MDc5IDUwLjY4MDUgNS4wMTAwMyA1MS4xNjIgNC42NDg0NkM1MS42NDM0IDQuMjg2OSA1Mi4yMzU2IDQuMTA3MDEgNTIuOTM0NyA0LjEwNzAxQzUzLjY4MTggNC4xMDcwMSA1NC4zODI4IDQuMzE3MTggNTUuMDM0IDQuNzM1NzRMNTYuNTg5MSAxLjM0NjMyQzU1LjE2NSAwLjUwNzQyNCA1My42MDk5IDAuMDg4ODY3MiA1MS45MjIgMC4wODg4NjcyQzUwLjA4ODMgMC4wODg4NjcyIDQ4LjU0NDMgMC41OTY0NzkgNDcuMjg5OSAxLjYwODE0QzQ2LjAzNTUgMi42MjE1OCA0NS40MDgzIDQuMDYwNyA0NS40MDgzIDUuOTIzNzNWNy43NzYwNlY3Ljc3NDI4WiIgZmlsbD0id2hpdGUiLz4KPHBhdGggZD0iTTYwLjIzNDcgNy43NzQzM0g1Ny40NDkyVjExLjY1MThINjAuMjM0N1YxOS40MDg0QzYwLjIzNDcgMjMuMzkwOSA2Mi4yMjUyIDI1LjM4MjIgNjYuMjA2IDI1LjM4MjJDNjYuODA5MiAyNS4zODIyIDY3LjQ4OTkgMjUuMjk0OSA2OC4yNDk5IDI1LjEyMDRDNjkuMDEgMjQuOTQ1OCA2OS41ODE4IDI0LjczMDMgNjkuOTY5MiAyNC40NzM5TDY4LjgxMDcgMjAuNzM1M0M2OC40NDkyIDIxLjA4NDQgNjcuOTY1OSAyMS4yNTkgNjcuMzYyNiAyMS4yNTlDNjUuOTY0NCAyMS4yNTkgNjUuMjYzNCAyMC41NzE1IDY1LjI2MzQgMTkuMTk4M1YxMS42NTE4SDY5LjI3OTNWNy43NzQzM0g2NS4yNjM0VjMuMTYzMDlINjAuMjMyOVY3Ljc3NDMzSDYwLjIzNDdaIiBmaWxsPSJ3aGl0ZSIvPgo8cGF0aCBkPSJNMTQyLjE2OCA3Ljc3NDMzSDEzOS4zODNWMTEuNjUxOEgxNDIuMTY4VjE5LjQwODRDMTQyLjE2OCAyMy4zOTA5IDE0NC4xNTkgMjUuMzgyMiAxNDguMTQgMjUuMzgyMkMxNDguNzQzIDI1LjM4MjIgMTQ5LjQyNCAyNS4yOTQ5IDE1MC4xODQgMjUuMTIwNEMxNTAuOTQ0IDI0Ljk0NTggMTUxLjUxNSAyNC43MzAzIDE1MS45MDMgMjQuNDczOUwxNTAuNzQ0IDIwLjczNTNDMTUwLjM4MyAyMS4wODQ0IDE0OS44OTkgMjEuMjU5IDE0OS4yOTYgMjEuMjU5QzE0Ny44OTggMjEuMjU5IDE0Ny4xOTcgMjAuNTcxNSAxNDcuMTk3IDE5LjE5ODNWMTEuNjUxOEgxNTEuMjEzVjcuNzc0MzNIMTQ3LjE5N1YzLjE2MzA5SDE0Mi4xNjZWNy43NzQzM0gxNDIuMTY4WiIgZmlsbD0id2hpdGUiLz4KPHBhdGggZD0iTTE1NS4wNjIgMy4wMjQwM0MxNTUuMDYyIDMuODE2NjIgMTU1LjM1MiA0LjQ5MTY1IDE1NS45MzEgNS4wNTA5MkMxNTYuNTExIDUuNjEwMTggMTU3LjIxIDUuODg5ODEgMTU4LjAzMSA1Ljg4OTgxQzE1OC44OTkgNS44ODk4MSAxNTkuNjIzIDUuNjE1NTIgMTYwLjIwMiA1LjA2ODczQzE2MC43ODEgNC41MjE5MyAxNjEuMDcxIDMuODQxNTYgMTYxLjA3MSAzLjAyNDAzQzE2MS4wNzEgMi4yMDY1MSAxNjAuNzgxIDEuNTE3MjMgMTYwLjIwMiAwLjk0NTVDMTU5LjYyMyAwLjM3NTU1MSAxNTguODk5IDAuMDkwNTc2MiAxNTguMDMxIDAuMDkwNTc2MkMxNTcuMjEgMC4wOTA1NzYyIDE1Ni41MTEgMC4zNzU1NTEgMTU1LjkzMSAwLjk0NTVDMTU1LjM1MiAxLjUxNzIzIDE1NS4wNjIgMi4yMDgyOSAxNTUuMDYyIDMuMDI0MDNaIiBmaWxsPSIjMTM5MjhBIi8+CjxwYXRoIGQ9Ik0xNjAuNTYyIDcuNzc0NjZIMTU1LjUzMVYyNC45NjRIMTYwLjU2MlY3Ljc3NDY2WiIgZmlsbD0id2hpdGUiLz4KPHBhdGggZD0iTTE3Mi43ODQgMjUuMzg0MUMxNzUuODQ4IDI1LjM4NDEgMTc4LjIzNSAyNC4zNiAxNzkuOTQ5IDIyLjMwOTlMMTc2LjY5MSAxOS40Nzk4QzE3NS43OTggMjAuNjY3OCAxNzQuNTIgMjEuMjYyNyAxNzIuODU2IDIxLjI2MjdDMTcxLjUwNCAyMS4yNjI3IDE3MC40MDEgMjAuODA4NSAxNjkuNTQ1IDE5LjkwMDFDMTY4LjY4OSAxOC45OTE4IDE2OC4yNjEgMTcuODE2MiAxNjguMjYxIDE2LjM3MThDMTY4LjI2MSAxNC45MjczIDE2OC42NzggMTMuNzUxOCAxNjkuNTEgMTIuODQzNEMxNzAuMzQyIDExLjkzNTEgMTcxLjQzNCAxMS40ODA5IDE3Mi43ODQgMTEuNDgwOUMxNzQuNCAxMS40ODA5IDE3NS42NDMgMTIuMDE3IDE3Ni41MTIgMTMuMDg3NEwxNzkuNjI0IDEwLjA4MjdDMTc3LjgxNSA4LjI2NjAyIDE3NS41MjMgNy4zNTc2NyAxNzIuNzQ5IDcuMzU3NjdDMTY5Ljk3NSA3LjM1NzY3IDE2Ny43NzkgOC4yMTk3MSAxNjUuOTQ2IDkuOTQyMDNDMTY0LjExMiAxMS42NjYxIDE2My4xOTUgMTMuODA4OCAxNjMuMTk1IDE2LjM3MThDMTYzLjE5NSAxOC45MzQ4IDE2NC4xMjMgMjEuMTA1OSAxNjUuOTgxIDIyLjgxNzVDMTY3LjgzOCAyNC41MjkyIDE3MC4xMDYgMjUuMzg1OSAxNzIuNzg0IDI1LjM4NTlWMjUuMzg0MVoiIGZpbGw9IndoaXRlIi8+CjxwYXRoIGQ9Ik0xODguNzIxIDEwLjk4OTRDMTkwLjQzMiAxMC45ODk0IDE5Mi4wNSAxMS41OTUgMTkzLjU2OCAxMi44MDYxTDE5NS44MTIgOS42OTYzMUMxOTMuNzEyIDguMTM2MDggMTkxLjM3MyA3LjM1NTk2IDE4OC43OTIgNy4zNTU5NkMxODYuODM5IDcuMzU1OTYgMTg1LjE0NCA3LjgyNzk1IDE4My43MDggOC43NzAxNEMxODIuMjczIDkuNzE0MTIgMTgxLjU1NiAxMS4wOTI3IDE4MS41NTYgMTIuOTExMkMxODEuNTU2IDEzLjk1ODUgMTgxLjgxNCAxNC44NDM3IDE4Mi4zMzQgMTUuNTY2OEMxODIuODUzIDE2LjI4OTkgMTgzLjUwNCAxNi44MDY0IDE4NC4yODggMTcuMTIxN0MxODUuMDcyIDE3LjQzNTIgMTg1LjkyMiAxNy43MDk0IDE4Ni44MzkgMTcuOTQyOEMxODcuNzU2IDE4LjE3NjEgMTg4LjYwNiAxOC4zNTA2IDE4OS4zOSAxOC40NjY0QzE5MC4xNzQgMTguNTg0IDE5MC44MjUgMTguNzc5OSAxOTEuMzQ0IDE5LjA2MTNDMTkxLjg2MiAxOS4zNDA5IDE5Mi4xMjIgMTkuNzAyNSAxOTIuMTIyIDIwLjE0NDJDMTkyLjEyMiAyMS4yMTY0IDE5MS4xOTIgMjEuNzUwNyAxODkuMzM3IDIxLjc1MDdDMTg3LjExNyAyMS43NTA3IDE4NS4xMDMgMjAuOTQ3NSAxODMuMjkzIDE5LjM0MDlMMTgwLjk0MSAyMi40MTUxQzE4My4zMjggMjQuMzk1NyAxODYuMTI3IDI1LjM4NDIgMTg5LjMzNyAyNS4zODQyQzE5MS4zMTQgMjUuMzg0MiAxOTMuMDIxIDI0LjkxMjIgMTk0LjQ1OCAyMy45N0MxOTUuODkzIDIzLjAyNiAxOTYuNjEgMjEuNjM1IDE5Ni42MSAxOS43OTUxQzE5Ni42MSAxOC41Mzc3IDE5Ni4yNDkgMTcuNTA2NCAxOTUuNTI2IDE2LjcwMzFDMTk0LjgwMiAxNS44OTk5IDE5My45MjEgMTUuMzUzMSAxOTIuODg0IDE1LjA2MUMxOTEuODQ3IDE0Ljc3MDYgMTkwLjgwOSAxNC41MzczIDE4OS43NzIgMTQuMzYyOEMxODguNzMzIDE0LjE4ODIgMTg3Ljg1NCAxMy45Njc0IDE4Ny4xMyAxMy42OTg0QzE4Ni40MDcgMTMuNDMxMyAxODYuMDQ2IDEzLjA1MTkgMTg2LjA0NiAxMi41NjIxQzE4Ni4wNDYgMTEuNTE0OCAxODYuOTM5IDEwLjk4OTQgMTg4LjcyNCAxMC45ODk0SDE4OC43MjFaIiBmaWxsPSJ3aGl0ZSIvPgo8cGF0aCBkPSJNMTExLjA0NyA5LjYwMTg3QzEwOS4zNTUgNy44NzQyMSAxMDcuMTc2IDcuMDA4NiAxMDQuNTA5IDcuMDA4NkMxMDIuNjkgNy4wMDg2IDEwMS4xNTkgNy41NTM2MSA5OS45MTIxIDguNjM4M1YxMC44MTNIOTkuMTg1MlY2LjM0MjQ3SDk5LjIxMTFWMEg5NC4wNjI1VjI1LjAzMzNIOTkuMjExMVYyNC41Mzk5SDk5LjE4NTJWMjEuMTk2OEg5OS45MTIxVjIzLjc5MzZDMTAwLjM0IDI0LjE3NjUgMTAwLjg2NiAyNC41MDc4IDEwMS40OTEgMjQuNzgzOUMxMDIuNTE1IDI1LjIzNjMgMTAzLjU1OSAyNS40NjI1IDEwNC42MjIgMjUuNDYyNUMxMDcuMjM5IDI1LjQ2MjUgMTA5LjM4NiAyNC41OTg3IDExMS4wNjcgMjIuODY5MkMxMTIuNzQ2IDIxLjE0MTYgMTEzLjU4NSAxOC45Mjk1IDExMy41ODUgMTYuMjM0N0MxMTMuNTg1IDEzLjUzOTkgMTEyLjczOCAxMS4zMjk1IDExMS4wNDcgOS42MDAwOVY5LjYwMTg3Wk0xMDYuNDM1IDE5LjE1MDNDMTA1Ljc5MyAxOS44NzcgMTA0LjkyOCAyMC4yNjUzIDEwMy44NDMgMjAuMzExNkgxMDMuNzMyQzEwMi42OTYgMjAuMzExNiAxMDEuODQzIDE5LjkzMDQgMTAxLjE3OCAxOS4xNjYzQzEwMC41MTIgMTguNDA0IDEwMC4xNzggMTcuNDI2MiAxMDAuMTc4IDE2LjIzNDdDMTAwLjE3OCAxNS45OTYgMTAwLjE5MSAxNS43ODIzIDEwMC4yMTUgMTUuNTkxN0MxMDAuMzM4IDE0LjU2NzYgMTAwLjcxNCAxMy43NDQ3IDEwMS4zNDQgMTMuMTI0OUMxMDEuOTczIDEyLjUwNTEgMTAyLjc0NiAxMi4xOTUxIDEwMy42NTkgMTIuMTk1MUMxMDQuOTkyIDEyLjE5NTEgMTA2LjAwMyAxMi42OTU2IDEwNi42OTUgMTMuNjk2NkMxMDcuMTY0IDE0LjQzNTggMTA3LjM5OCAxNS4yODE4IDEwNy4zOTggMTYuMjM2NEMxMDcuMzk4IDE3LjQ1MjkgMTA3LjA3NyAxOC40MjM2IDEwNi40MzUgMTkuMTUwM1oiIGZpbGw9IndoaXRlIi8+Cjwvc3ZnPgo=" alt="cclogo1">

                        <img src="../../public/dashboard/assets/images/cclogo.svg" alt="cclogo2" class="logo">

                        <img src="../../public/dashboard/assets/images/quickinsurelogo.svg" alt="quickinsurelogo" class="logo">

                        <img src="../../public/dashboard/assets/images/knlogo.png" alt="knlogo" class="logo">

                        <img class="logo" src="../../public/dashboard/assets/images/cplogo.png" alt="cplogo">







                        <!-- Add more images here -->

                    </div>



                </div> <!-- end of row -->



            </div> <!-- end of container -->



    </section> <!-- end of work -->



    <!-- Testimonials -->

    <div class="slider-2 testimonial text-light d-flex align-items-center">

        <div class="container">

            <div class="row">

                <div class="text-center w-lg-75 m-auto pb-4">

                    <p>TESTIMONIALS</p>

                    <h2 class="py-2">Client Chronicles</h2>

                    <p class="para-light">Discover the transformative experiences shared by our valued clients. Their testimonials reflect the unparalleled commitment and satisfaction that define our business, offering a glimpse into the exceptional service and results we consistently deliver.</p>

                </div>

            </div> <!-- end of row -->

            <div class="row p-2" data-aos="zoom-in">

                <div class="col-lg-12">



                    <!-- Card Slider -->

                    <div class="slider-container">

                        <div class="container text-light py-5 glass" data-aos="fade-right">

                            <div class="swiper-container card-slider">

                                <div class="swiper-wrapper">



                                    <!-- Slide -->

                                    <div class="swiper-slide">

                                        <div class="testimonial-card p-4">

                                            <p>Working with your team has been an invaluable experience, and we look forward to continuing our partnership. Your expertise in developing our cloud infrastructure has not only enhanced efficiency but also delivered substantial cost savings. Your unwavering commitment to excellence has truly set you apart, and we are eager to explore new opportunities together in the future!</p>



                                            <div class="d-flex pt-4">

                                                <!--<div>-->

                                                <!--    <img class="avatar" src="../../public/dashboard/assets/images/testimonial-1.jpg" alt="testimonial">-->

                                                <!--</div>-->

                                                <div class="ms-3 pt-2">

                                                    <h6>Kunal Guarav</h6>

                                                    <p>Softobotics</p>

                                                </div>

                                            </div>

                                        </div>

                                    </div> <!-- end of swiper-slide -->

                                    <!-- end of slide -->



                                    <!-- Slide -->

                                    <div class="swiper-slide">

                                        <div class="testimonial-card p-4">

                                            <p>Your CRM solutions have made a big difference for us. The tools you gave us help a lot in talking to our customers, understanding what they like, and giving them what they want. We've noticed more happy customers and they keep coming back since we teamed up with you. Thanks a bunch!<b></b></p>

                                            <div class="d-flex pt-4">

                                                <!--<div>-->

                                                <!--    <img class="avatar" src="../../public/dashboard/assets/images/testimonial-2.jpg" alt="testimonial">-->

                                                <!--</div>-->

                                                <div class="ms-3 pt-2">

                                                    <h6>Prateek Prasoon</h6>

                                                    <p>CloudPrism</p>

                                                </div>

                                            </div>

                                        </div>

                                    </div> <!-- end of swiper-slide -->

                                    <!-- end of slide -->



                                    <!-- Slide -->

                                    <div class="swiper-slide">

                                        <div class="testimonial-card p-4">

                                            <p>Your contribution to our web application has been great to our startup.we are eager to explore new opportunities together in the future!</p>

                                            <div class="d-flex pt-4">

                                                <!--<div>-->

                                                <!--    <img class="avatar" src="../../public/dashboard/assets/images/testimonial-3.jpg" alt="testimonial">-->

                                                <!--</div>-->

                                                <div class="ms-3 pt-2">

                                                    <h6>Andrew</h6>

                                                    <p>Coding Commando</p>

                                                </div>

                                            </div>

                                        </div>

                                    </div> <!-- end of swiper-slide -->

                                    <!-- end of slide -->



                                    <!-- Slide -->

                                    <div class="swiper-slide">

                                        <div class="testimonial-card p-4">

                                            <p>Your data engineering services have been a Gamechanger.Absoltely admire your team's passion towards client satisfaction. The data pipelines you've set up have saved us countless hours of manual works and efforts.</p>

                                            <div class="d-flex pt-4">

                                                <!--<div>-->

                                                <!--    <img class="avatar" src="../../public/dashboard/assets/images/testimonial-4.jpg" alt="testimonial">-->

                                                <!--</div>-->

                                                <div class="ms-3 pt-2">

                                                    <h6>Monica Aggarwal</h6>

                                                    <p>Leap Bytes</p>

                                                </div>

                                            </div>

                                        </div>

                                    </div> <!-- end of swiper-slide -->

                                    <!-- end of slide -->



                                    <!-- Slide -->

                                    <div class="swiper-slide">

                                        <div class="testimonial-card p-4">

                                            <p>We've partnered with your team for DevOps, and it's been a seamless experience. The automation and monitoring solutions you've implemented have increased our deployment frequency and reduced the time it takes to recover from incidents. Your DevOps expertise has streamlined our operations</p>

                                            <div class="d-flex pt-4">

                                                <!--<div>-->

                                                <!--    <img class="avatar" src="../../public/dashboard/assets/images/testimonial-4.jpg" alt="testimonial">-->

                                                <!--</div>-->

                                                <div class="ms-3 pt-2">

                                                    <h6>Sushobhit Singh</h6>

                                                    <p>Carb Cullingers </p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>







                                </div> <!-- end of swiper-wrapper -->



                                <!-- Add Arrows -->

                                <div class="swiper-button-next"></div>

                                <div class="swiper-button-prev"></div>

                                <!-- end of add arrows -->



                            </div> <!-- end of swiper-container -->

                        </div>

                    </div> <!-- end of slider-container -->

                    <!-- end of card slider -->



                </div> <!-- end of col -->

            </div> <!-- end of row -->

        </div> <!-- end of container -->

    </div> <!-- end of testimonials -->

    <!-- tab swiper slider -->










    <!-- Contact -->

    <section class="slider-2 contact d-flex align-items-center py-5" id="contact">

        <div class="slider-2 testimonial text-light d-flex align-items-center">

            <div class="container-fluid text-light">

                <div class="row">

                    <div class="col-lg-6 col-md-12 d-flex justify-content-center justify-content-lg-end align-items-center px-lg-5" data-aos="fade-right">

                        <div style="width:90%">

                            <div class="text-center text-lg-start py-4 pt-lg-0">

                                <h2 class="py-2">Contact Us</h2>

                                <p class="para-light">Share your requirements with us through this form, and we're here to assist you.</p>

                            </div>

                            <form method="post" action="sheets.php">

                                <div>

                                    <div class="row">

                                        <div class="col-lg-6">

                                            <div class="form-group py-2">

                                                <input type="text" class="form-control form-control-input" name="name" placeholder="Enter name" required>

                                            </div>

                                        </div>

                                        <div class="col-lg-6">

                                            <div class="form-group py-2">

                                                <input type="text" class="form-control form-control-input" name="phone" placeholder="Enter phone number" required>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="form-group py-1">

                                        <input type="email" class="form-control form-control-input" name="email" placeholder="Enter email" required>

                                    </div>

                                    <div class="form-group py-2">

                                        <textarea class="form-control form-control-input" name="message" id="exampleFormControlTextarea1" rows="6" placeholder="Message"></textarea>

                                    </div>

                                </div>

                                <div class="my-3">

                                    <button type="submit" class="btn form-control-submit-button">Submit</button>

                                </div>

                            </form>



                        </div> <!-- end of div -->

                    </div> <!-- end of col -->

                    <div class="col-lg-6 col-md-12 d-flex align-items-center" data-aos="fade-down">

                        <div class="img-area" data-tilt data-tilt-scale="1.2" data-tilt-max="30" data-tilt-perspective="1000px" data-tilt-speed="400" style="width: 100%; height: 100%;">

                            <img class="img-fluid d-lg-block" src="../../public/dashboard/assets/images/checking.png" alt="contact">

                        </div>

                    </div>

                    <!-- end of col -->

                </div>

            </div> <!-- end of row -->

        </div> <!-- end of container -->

    </section> <!-- end of contact -->





    <!-- Footer -->

    <section class="footer text-light">

        <div class="slider-2 testimonial text-light d-flex align-items-center" style="padding: 10px; margin: 0;">

            <div class="container">

                <div class="row" data-aos="fade-right">

                    <div class="col-lg-12 py-4 py-md-5">

                        <div class="text-center">

                            <h3 class="">XCELEREX</h3>

                            <h5>Accelerated Engineering and Resourcing Excellence</h5>

                            <p class="py-3 para-light">Xcelerex holds a special place in our heart, akin to watching a child grow from its inception. Since its inception, we have been dedicated to nurturing its development. The individuals we've encountered along this journey have become an integral part of our extended family. Our commitment is unwavering – we consistently strive to acquire knowledge and deliver nothing short of excellence, ensuring that we bring the very best to you.</p>

                        </div>

                    </div> <!-- end of col -->

                </div> <!-- end of row -->

                <div class="container">

                    <div class="row" data-aos="fade-right">

                        <div class="col-lg-12 py-4 py-md-5">

                            <div class="text-center">

                                <p>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">

                                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />

                                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />

                                    </svg>

                                    <a href="https://maps.app.goo.gl/bbtsGpPQ5LiE14oP8" target="_blank" style="text-decoration: none; color: #fff;">&nbsp Gurgaon</a>

                                </p>



                                <p>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">

                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />

                                    </svg>

                                    <a href="tel:+18881425512" style="text-decoration: none; color: #fff;">&nbsp +91 888-142-5512</a>

                                </p>



                                <p>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">

                                        <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z" />

                                        <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />

                                    </svg>

                                    <a href="mailto:Contact@xcelerex.com" style="text-decoration: none; color: #fff;">&nbsp Contact@xcelerex.com</a>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div> <!-- end of container -->

    </section> <!-- end of footer -->





    <!-- Bottom -->

    <div class="bottom text-light">

        <div class="container d-flex justify-content-between">

            <div>

                <p>Copyright © XcelereX</p><br>

                <!--<p>Distributed by: <a href="#"></a></p>-->

            </div>

            <div>

                <a href="#" class="fa fa-facebook" style="text-decoration: none; margin-right: 10px;"></a>

                <a href="#" class="fa fa-twitter" style="text-decoration: none; margin-right: 10px;"></a>

                <a href="https://www.linkedin.com/company/xcelerex/" class="fa fa-linkedin" style="text-decoration: none; margin-right: 10px;"></a>

                <a href="#" class="fa fa-instagram" style="text-decoration: none; margin-right: 10px;"></a>

            </div>

        </div> <!-- end of container -->

    </div> <!-- end of bottom -->

    <!-- end of back to top button -->





    <!-- Scripts -->

    <script src="../../public/js/bootstrap.min.js"></script><!-- Bootstrap framework -->

    <script src="../../public/js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->

    <script src="../../public/js/swiper.min.js"></script>


    <script src="../../public/js/aos.js"></script><!-- AOS on Animation Scroll -->

    <script src="../../public/js/script.js"></script> <!-- Custom scripts -->



    <script>
        var sliderTitles = document.getElementById('slider-titles');

        var swiper = new Swiper('.values-card-slider', {

            slidesPerView: 1, // Display only one slide at a time

            speed: 250, // Adjust the transition speed (milliseconds)

            autoplay: {

                delay: 2500, // Adjust the delay between slides (milliseconds)

                disableOnInteraction: false, // Allow manual navigation even when autoplay is enabled

            },

            fadeEffect: {

                crossFade: true // Enable cross-fade effect

            },

            navigation: {

                nextEl: '.swiper-button-next',

                prevEl: '.swiper-button-prev',

            },

            on: {

                slideChange: function() {

                    var activeIndex = swiper.activeIndex;

                    var titles = sliderTitles.children;

                    for (var i = 0; i < titles.length; i++) {

                        titles[i].style.color = i === activeIndex ? 'green' : 'white';

                    }

                },

            },

        });



        swiper.el.addEventListener('mouseenter', function() {

            swiper.autoplay.stop();

        });



        // Resume autoplay on mouse leave

        swiper.el.addEventListener('mouseleave', function() {

            swiper.autoplay.start();

        });
    </script>



    <script>
        var swiper = new Swiper('.tab-swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

        function changeTab(index) {
            var tabslider = document.getElementById('tabslider').children;

            for (var i = 0; i < tabslider.length; i++) {
                tabslider[i].classList.remove('active');
            }

            tabslider[index].classList.add('active');

            // Slide to the corresponding tab index
            swiper.slideTo(index);
        }
    </script>


</body>

</html>