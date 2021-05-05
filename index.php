<?php
session_start();
$mymail = "asx@123";
$mypass = "1234";
$admmail = "qwe@123";
$admpass = "234";
    if(isset($_POST["login"])){
 
        $email = $_POST['email'];
        $password =  $_POST['password'];
        if($email == $mymail and $password == $mypass) {
            // setcookie('email', $email, time()+60*60*7);
            // setcookie('password', $password, time()+60*60*7);
            $_SESSION['name'] = $name;
            $_SESSION['address'] = $address;
            $_SESSION['email'] = $email;
            header("location: welcome.php");
        }else{
            $invalid = ("email or password is invalid <br> click here to <a href= 'index.php' >try again</a>");
        }
        if($email == $admmail and $password ==  $admpass){
            $_SESSION['email'] = $email;
            header("location: admin.php");
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link href = "styles.css" rel = "stylesheet">
</head>
<body>
    <div class="formValidation">
    <form action=" " method="post" enctype="multipart/form-data" >

        <label for="mail">Email</label><br>
        <input  class="input box" type="email" id="mail" name="email"/><br>
        
        <label for="pw">Password</label><br>
        <input class="input box" type="password" id="pw" name ="password"/><br>

        <input class="button" type="submit" name = "login" value="login"/>
        <?php
        if(isset($invalid)){
            echo "<div class='error'>" . $invalid . "</div>";
        }
        ?>
    </form>
    </div>
</body>

