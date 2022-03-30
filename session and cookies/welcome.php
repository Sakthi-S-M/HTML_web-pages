<?php
   session_start();
   echo"Welcome!".$_SESSION['email'];
   echo"<a href='logout.php'>logout</a>";
?>
<style type="text/css">
*{
    background-image: url(https://images.squarespace-cdn.com/content/v1/55d64111e4b0a862eed6a419/1524007829841-21C3C49BS8T0YQGZ3X7I/new-year-travel.jpg);
    background-size: cover;
    text-align:center;
    font-size:20px;
    height:10px;
}
</style>