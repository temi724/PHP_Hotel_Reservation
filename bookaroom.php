<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

        <title>book a room</title>
      
        <!-- Loading third party fonts -->
        <link href="style.css" rel="stylesheet" type="text/css"/>
           <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400|" rel="stylesheet" type="text/css">
        <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- Loading main css file -->
        <link rel="stylesheet" href="style.css">

        <!--[if lt IE 9]>
        <script src="js/ie-support/html5.js"></script>
        <script src="js/ie-support/respond.js"></script>
        <![endif]-->

    </head>


    <body>

        <div id="site-content">
            <div class="site-header">
                <div class="container">
                    <a href="index.html" id="branding">
                        <img src="images/logo.png" alt="" class="logo">
                        <div class="logo-text">
                            <h1 class="site-title">AKOFENA INTERNATIONAL</h1>
                            <small class="site-description">Tagline goes here</small>
                        </div>
                    </a> <!-- #branding -->

                    <!-- Default snippet for navigation -->
                    <div class="main-navigation">
                        <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                        <ul class="menu">
                            <li class="menu-item"><a href="index.php">Home</a></li>
                            
                            <li class="menu-item current-menu-item"><a href="bookaroom.php">Book A Room</a></li>
                            <li class="menu-item"><a href="contactus.php">Contact</a></li>
                        </ul> <!-- .menu -->
                    </div> <!-- .main-navigation -->

                    <div class="mobile-navigation"></div>
                </div>
            </div> <!-- .site-header -->

            <main class="main-content">

                <div class="page">
                    <div class="container">
                        <h2 class="entry-title">book a space now</h2>
                        <p>Pick from our wide range of options</p>

                        <div class=" filterable-nav">
                            <select class="mobile-filter">
                                <option value="*">Show all</option>
                                <option value=".skyscraper">standards</option>
                                <option value=".shopping-center">professionalr</option>
                                <option value=".apartment">single</option>
                            </select>
                            
                            <a href="#" class="current wow fadeInRight" data-filter="*">Show all</a>
                            <a href="#" class="wow fadeInRight" data-wow-delay=".2s" data-filter=".skyscraper">standard</a>
                            <a href="#" class="wow fadeInRight" data-wow-delay=".4s" data-filter=".shopping-center">professional</a>
                            <a href="#" class="wow fadeInRight" data-wow-delay=".6s" data-filter=".apartment">single</a>
                        </div>

                        <div class="filterable-items">
                            <div class="project-item filterable-item shopping-center">
                                <figure class="featured-image">
                                  
                                    
                                    <a href="bookthis.php"><img src="https://awscloudfront.kempinski.com/1057/_hab0615-2.jpg;width=1200;height=675;mode=crop;anchor=middleleft;autorotate=true;quality=90;scale=both;progressive=true;encoder=freeimage" alt="#"></a>
                                    <figcaption>
                                        <h2 class="project-title"><a href="#">STANDARD</a></h2>
                                        <p class="project-subtotle">standard</p>
                                        <p>This is rooms are for professionals. we got you covered.
                                        you dont have to miss anything because you are not in your country.
                                        we have all it takes so you dont miss home
                                        </p>
                                   </figcaption>
                                </figure>
                            </div>
                            <div class="project-item filterable-item skyscrapper">
                                <figure class="featured-image">
                                    <a href="bookthis.php"><img src="https://awscloudfront.kempinski.com/1060/_hab0905.jpg;width=1200;height=675;mode=crop;anchor=middlecenter;autorotate=true;quality=90;scale=both;progressive=true;encoder=freeimage" alt="#"></a>
                                    <figcaption>
                                        <h2 class="project-title"><a href="">Family</a></h2>
                                        <p class="project-subtotle">family</p>
                                        <p>
                                        Enough spaces for parents and their kid with all you need within your rich... 
                                        </p>
                                     
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="project-item filterable-item skyscraper">
                                <figure class="featured-image">
                                    <a href="bookthis.php"><img src="https://awscloudfront.kempinski.com/1062/_hab0933.jpg;width=1200;height=675;mode=crop;anchor=middlecenter;autorotate=true;quality=90;scale=both;progressive=true;encoder=freeimage" alt="#"></a>
                                    <figcaption>
                                        <h2 class="project-title"><a href="">OLD</a></h2> 
                                        <p class="project-subtotle">old
                                        <p>Here your parents are vey important to us so we have create a very condusive enviroment 
                                            that they can relax.</p>
                                      
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="project-item filterable-item apartment">
                                <figure class="featured-image">
                                    <a href="bookthis.php"><img src="https://awscloudfront.kempinski.com/1098/_hab1373.jpg;width=1200;height=675;mode=crop;anchor=middlecenter;autorotate=true;quality=90;scale=both;progressive=true;encoder=freeimage" alt="#"></a>
                                    <figcaption>
                                        <h2 class="project-title"><a href="#">STANDARD</a></h2>
                                        <p class="project-subtotle">standard</p>
                                        <p>This is rooms are for professionals. we got you covered.
                                        you dont have to miss anything because you are not in your country.
                                        we have all it takes so you dont miss home</p>
                                       
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="project-item filterable-item skyscrapper">
                                <figure class="featured-image">
                                    <a href="bookthis.php"><img src="https://awscloudfront.kempinski.com/1123/_hab0627.jpg;width=1200;height=675;mode=crop;anchor=middlecenter;autorotate=true;quality=90;scale=both;progressive=true;encoder=freeimage" alt="#"></a>
                                    <figcaption>
                                        <h2 class="project-title"><a href=#">SINGLE</a></h2>
                                        <p class="project-subtotle">single</p>
                                        <p>This is rooms are for professionals. we got you covered.
                                        you dont have to miss anything because you are not in your country.
                                        we have all it takes so you dont miss home</p>
                                        
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="project-item filterable-item skyscrapper">
                                <figure class="featured-image">
                                    <a href="bookthis.php"><img src="https://awscloudfront.kempinski.com/1040/_hab0627.jpg;width=1200;height=675;mode=crop;anchor=middlecenter;autorotate=true;quality=90;scale=both;progressive=true;encoder=freeimage" alt="#"></a>
                                    <figcaption>
                                        <h2 class="project-title"><a href="#">STANDARD</a></h2>
                                        <p class="project-subtotle"standard</p>
                                        <p>This is rooms are for professionals. we got you covered.
                                        you dont have to miss anything because you are not in your country.
                                        we have all it takes so you dont miss home</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="project-item filterable-item shopping-center">
                                <figure class="featured-image">
                                    <a href="bookthis.php"><img src="https://awscloudfront.kempinski.com/1056/_hab0865.jpg;width=1200;height=675;mode=crop;anchor=middleleft;autorotate=true;quality=90;scale=both;progressive=true;encoder=freeimage" alt="#"></a>
                                    <figcaption>
                                        <h2 class="project-title"><a href="project-single.html">SINGLE</a></h2>
                                        <p class="project-subtotle">single</p>
                                                    <p>This is rooms are for professionals. we got you covered.
                                        you dont have to miss anything because you are not in your country.
                                        we have all it takes so you dont miss home</p>
                                       
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="project-item filterable-item skyscrapper">
                                <figure class="featured-image">
                                    <a href="bookthis.php"><img src="https://awscloudfront.kempinski.com/1099/_hab1354.jpg;width=1200;height=675;mode=crop;anchor=middlecenter;autorotate=true;quality=90;scale=both;progressive=true;encoder=freeimage" alt="#"></a>
                                    <figcaption>
                                        <h2 class="project-title"><a href="#">SINGLE</a></h2>
                                        <p class="project-subtotle">single</p>
                                                    <p>This is rooms are for professionals. we got you covered.
                                        you dont have to miss anything because you are not in your country.
                                        we have all it takes so you dont miss home</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="project-item filterable-item skyscrapper">
                                <figure class="featured-image">
                                    <a href="bookthis.php"><img src="https://awscloudfront.kempinski.com/1121/_hab1354.jpg;width=1200;height=675;mode=crop;anchor=middlecenter;autorotate=true;quality=90;scale=both;progressive=true;encoder=freeimage" alt="#"></a>
                                    <figcaption>
                                        <h2 class="project-title"><a href="#">STANDARD</a></h2>
                                    <p class="project-subtotle">standard</p>
                                                    <p>This is rooms are for professionals. we got you covered.
                                        you dont have to miss anything because you are not in your country.
                                        we have all it takes so you dont miss home</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div> <!-- .page -->

            </main> <!-- .main-content -->

            <footer class="site-footer">
                <div class="container">
                    <div class="pull-left">

                        <address>
                            <strong>Company Name</strong>
                            <p>532 Avenue Street, Omaha</p>
                        </address>

                        <a href="#" class="phone">+ 1 800 931 033</a>
                    </div> <!-- .pull-left -->
                    <div class="pull-right">

                        <div class="social-links">

                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>

                        </div>

                    </div> <!-- .pull-right -->

                    <div class="colophon">Copyright 2014 Company name. Designed by <a href="http://www.vandelaydesign.com/" title="Designed by VandelayDesign.com" target="_blank">VandelayDesign.com</a>. All rights reserved.</div>

                </div> <!-- .container -->
            </footer> <!-- .site-footer -->
        </div>
  
        <script src="js/jquery-1.11.1.min.js"></script>
      
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>

    </body>

</html>