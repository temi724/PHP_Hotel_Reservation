<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
        <title>Modern Architecture | Contact</title>
        <!-- Loading third party fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.1/themes/fontawesome-stars-o.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400|" rel="stylesheet" type="text/css">
        <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- Loading main css file -->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="site-content">
            <div class="site-header">
                <div class="container">
                    <a href="index.html" id="branding">
                        <img src="images/logo.png" alt="" class="logo">
                        <div class="logo-text">
                            <h1 class="site-title">AKOFENA</h1>
                            <small class="site-description">Tagline goes here</small>
                        </div>
                    </a>
                    <div class="main-navigation">
                        <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                        <ul class="menu">
                            <li class="menu-item"><a href="index.php">Home</a></li>
                            <li class="menu-item"><a href="bookaroom.php">Book A Room</a></li>
                            <li class="menu-item current-menu-item"><a href="contactus.php">Contact</a></li>
                        </ul> <!-- .menu -->
                    </div> <!-- .main-navigation -->

                    <div class="mobile-navigation"></div>
                </div>
            </div> <!-- .site-header -->

            <main class="main-content">

                <div class="page">
                    <div class="container">
                        <a href="index.php" class="button-back"><img src="images/arrow-back.png" alt="" class="icon">Back to the projects</a>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="map"></div>

                                <div class="contact-detail">
                                    <address>
                                        <div class="contact-icon">
                                            <img src="images/icon-marker.png" class="icon">
                                        </div>
                                        <p><strong>AKOFENA INTERNATIONALS</strong> <br>location</p>
                                    </address>
                                    <a href="#" class="phone"><span class="contact-icon"><img src="images/icon-phone.png" class="icon"></span> +1 800 931 033</a>
                                    <a href="#" class="email"><span class="contact-icon"><img src="images/icon-envelope.png" class="icon"></span> akofena@companyname.com</a>
                                </div>
                            </div>
                            <div class="col-md-3 col-md-offset-1">
                                <div class="contact-form">
                                    <h2 class="section-title">Write us</h2>
                                    <p>we are always glad to receive your message</p>



                                    <form  id="form" action="connection.php" method="post">
                                        <input type="text" placeholder="Your name.." name="Name">
                                
                                        <input type="email" placeholder="Email.." name="email">
                                        <input type="number" max="5" id="numberbox" placeholder="rate us on **1-5**" min="1" name="rate" id="strict">


                                        <textarea type="text" placeholder="Message..." name="message"></textarea>
                                        <p class="text-right">


                                            <button type="submit" id="submit" disabled="disabled">Send message</button>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- .page -->

            </main> <!-- .main-content -->

            <footer class="site-footer">
                <div class="container">
                    <div class="pull-left">

                        <address>
                            <strong>Akofena</strong>
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

                    <div class="colophon">Copyright 2017  Designed by Itoro <a href="" title="" target="_blank"></a>. All rights reserved.</div>

                </div> <!-- .container -->
            </footer> <!-- .site-footer -->
        </div>
        <script src="js/jquery-1.11.1.min.js"></script>
        <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB__44xw2KAQ8qn8WT4-jtNDOhgk7TE6RY&callback=initMap" type="text/javascript"></script>

        <script src=https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src=https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.1/jquery.barrating.min.js"></script>
        <script src="jquery.barrating.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>
        <script>
$('#numberbox').keyup(function(){
  if ($(this).val() > 5 ){
    alert("5 is the highest available");
    $(this).val('5');
  }
});
            //disabling the submit button untill all field is coplete
            (function () {
                $('form > input').keyup(function () {

                    var empty = false;
                    $('form > input').each(function () {
                        if ($(this).val() == '') {
                            empty = true;
                        }
                    });

                    if (empty) {
                        $('#submit').attr('disabled', 'disabled')
                    } else {
                        $('#submit').removeAttr('disabled');
                    }
                });
            })();
            
                $("input[id*='strict']").keydown(function (event) {

                if (event.shiftKey == true) {
                    event.preventDefault();
                }
    if ((event.keyCode >= 48 && event.keyCode <= 57) ||
                        (event.keyCode >= 96 && event.keyCode <= 105) ||
                        event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 ||
                        event.keyCode == 39 || event.keyCode == 46 || event.keyCode == 190) {

                } else {
                    event.preventDefault();
                }

                if ($(this).val().indexOf('.') !== -1 && event.keyCode == 190)
                    event.preventDefault();
            });

            
        </script>


    </body>

</html>