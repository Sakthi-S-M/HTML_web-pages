<!DOCTYPE html>
<head>
    <title>
    TRAVELY|Online Website
    </title>   
</head>
<body>
    <h1 style="background-image: url(https://i.pinimg.com/originals/15/b3/4b/15b34b36899e178acebd146a3c405ffd.jpg);background-size: cover;text-align:center;height:6cm;">TRAVELY</h1>
    <style type="text/css">
    th {
        text-align: right;
    }
    h3{
        text-align: center;
    }
</style>
<table cellpadding="5" cellspacing="10" align="center">
    <h3>LOGIN FORM!</h3>
    <form method="post" action="validate.php">
        <tr><th>Email Id</th><td><input type="text" id="email" name="email"></td></tr>
        <tr><th>Password</th><td><input type="password" id="pass" name="password"></td></tr>
        <tr><td colspan="2" align="center"><input type="checkbox" name="remember" value="1">Remember Me</td></tr>
        <tr><td colspan="2" align="right"><input type="submit" name="login" value="login"></td></tr>
    </form>
</table>
<?php
    if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])) {
        $email = $_COOKIE['email'];
        $pass = $_COOKIE['pass'];
        echo "<script>
            document.getElementById('email').value = '$email'
            document.getElementById('pass').value = '$pass'
        </script>";
    }
?>
</body>
