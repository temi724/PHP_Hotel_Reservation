<?php
//form handler..

$con = mysqli_connect('localhost', 'root', '', 'hotel');
if (!$con) {
    echo 'NOt connneected';
}
if (!mysqli_select_db($con, 'hotel')) {
    echo 'db not connected';
}
$Name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$country = $_POST['country'];

$nops = $_POST['nop'];

$sql = "INSERT  INTO booking(name,email,phone,country,people) VALUES('$Name','$email','$phone','$country','$nops')";
if (!mysqli_query($con, $sql)) {
    echo 'not done';
} else {
    echo 'thanks kindly print this page within the next 10secs';
}
  header("refresh:10;url=index.php");
?>
<html>
 
    <div class='event'>
        <link href="ticketstyle.css" rel="stylesheet" type="text/css"/>
        <div class='event-side'>
            <div class='dotted-line-separator'><span class='line'></span></div>
            <div class='event-icon'><span class='fa fa-users'></span></div>
            <div class='event-date'></div>
            <div class='event-time'> </div>
            <div class='cut-out'></div>
        </div>
        <div class='event-body'>
            <div class='event-image'><a href='#'><span class='image'></a></div>
            <div class="event-location">AKOFENA INTERNATIONAL</div>
            <div class="event-title"><h3>space booking</h3><span>space booking</span></div>
            <div class="event-details">present to make payment<div>	
        </div>
    </div>

</html>

