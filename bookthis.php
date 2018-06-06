<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

        <title>bookings</title>

        <!-- Loading third party fonts -->
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
                    <a href="index.php" id="branding">
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

            <!--            <main class="main-content">-->

            <div class="page">
                <div class="container">
                    <a href="bookaroom.php." class="button-back"><img src="images/arrow-back.png" alt="" class="icon">back to rooms</a>
                    <div class="row">
                        <div class="col col-md-8">

                            <form action="booked.php" id="form"name="Form" method="post">
                                <p><input type="text" style="width: 50%" placeholder="Your name.." name="name"  id="namee"><span class="" id="nameE"></span></p>
                                <p> <input type="email" style="width: 50%" placeholder="Email.." name="email" id="email"><span id="emailErr"></span></p>
                                <p> <input placeholder="+234(Phone number)." id="PhoneNumber" style="width: 50%" name="phone"><span id="phoneErr"></span></p>
                                <p> <input placeholder="country" id="country" style="width: 50%" name="country"><span id="countryErr"></span></p>
                                <p> <input type="number" min="1" max="3" placeholder="number of people/room" id="people" style="width: 50%" name="nop" class="error"><span id="peopleErr"></span></p>
                                <p class="text-right">
                                    <button type="submit" id="submit" disabled="disabled">book room</button>
                                </p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- .page -->

        <!--    </main>  .main-content -->

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

                <div class="colophon">Copyright 2017 Company name. Designed by Itoro <a href="http://www.vandelaydesign.com/" title="Designed by VandelayDesign.com" target="_blank"></a>. All rights reserved.</div>

            </div> <!-- .container -->
        </footer> <!-- .site-footer -->
        <!--</div>-->

        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>
                <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                <link rel="stylesheet" href="/resources/demos/style.css">
                <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
                <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>

$('#people').keyup(function(){
  if ($(this).val() > 3 ){
    alert("max people/room is 3");
    $(this).val('3');
  }
});

            //disabling the submit button untill all field is coplete
            (function () {
                $('form > p').keyup(function () {

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





            $(function () {
                $("#nameE").hide();
                $("#emailErr").hide();
                $("phoneErr").hide();
                $("#countryErr").hide();
                $('#peopleErr').hide();

                var error_name = false;
                var error_email = false;
                var error_phone = false;
                var error_country = false;
                var error_people = false;

                $("#namee").focusout(function () {
                    validateName();
                });
                $("#email").focusout(function () {
                    validateEmail();
                });
                $("#phoneNumber").focusout(function () {
                    validatePhone();
                });

                function validateName() {
                    var validity = $("#namee").val().length;
                    if (validity < 4 || validity >20) {
                        $("#nameE").html("this field cannot contain less than 4-10 characters");
                        $("#nameE").show();
                        error_name = true;
                    } else {
                        $("#nameE").hide();
                    }
                }

                function validateEmail() {
                    var validity = $("#email").val().length;
                    if (validity < 6 || validity > 50) {
                        $("#emailErr").html("enter your email");
                        $("#emailErr").show();
                        error_email = true;
                    } else {
                        $("#emailErr").hide();
                    }
                }



            });

            //making sure users can enter alphalbets in the phone number field
            $("input[id*='PhoneNumber']").keydown(function (event) {

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