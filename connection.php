<?php
#extablishing a connection to the data base.....
//error_reporting(0);
$con = mysqli_connect('localhost', 'root', '', 'hotel');
if (!$con) {
    echo 'NOt connneected';
}
if (!mysqli_select_db($con, 'hotel')) {
    echo 'db not connected';
}


$Name = $_POST['Name'];
$mail = $_POST['email'];
$rating=$_POST['rate'];
$message = $_POST['message'];
$sql = "INSERT  INTO feeds(ID,name,email,message,rating) VALUES(NULL,'$Name','$mail','$message','$rating')";
if (!mysqli_query($con, $sql)) {
    echo 'not done';
} else {
    echo 'thank you. we shall respond soon';
}
header("refresh:2;url=index.php");
?>
<html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
        <style>
            @import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
            @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
        </style>
        <link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
        <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
        <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
    </head>
    <body>
        <header class="site-header" id="header">
            <h1 class="site-header__title" data-lead-id="site-header-title">THANK YOU!</h1>
        </header>

        <div class="main-content">
            <i class="fa fa-check main-content__checkmark" id="checkmark"></i>
            <p class="main-content__body" data-lead-id="main-content-body">Thanks a bunch for filling that out. It means a lot to us, just like you do! We really appreciate you giving us a moment of your time today. Thanks for being you.</p>
        </div>

        <footer class="site-footer" id="footer">
            <p class="site-footer__fineprint" id="fineprint">Copyright ©2017</p>
        </footer>
    </body>
</html>


