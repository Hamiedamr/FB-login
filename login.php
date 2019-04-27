<?php
    require_once 'config.php';
    if(isset($_SESSION['access_token'])){
        header('Location:index.php');
        exit();
    }
    $redirectURL = 'http://localhost:8080/fb/fb-callback.php';
    $permission = ['email'];
    $loginURL = $helper->getLoginUrl($redirectURL,$permission);
    // echo $loginURL;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Log In</title>
    <style>
        input[type='submit'] , input[type='button'],input[type='password']{
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container-fluid" style="background-color:blueviolet;">
        <div class="row justify-content-center">
            <div>
                <img src="brand.png" alt="" srcset="" class="rounded-circle" style="height:300px; margin-bottom:20px;">
                <form action="" method="post">
                    <input type="text" name="email"  class="form-control" placeholder="email">
                    <input type="password" name="password" class="form-control" placeholder="password">
                    <input type="submit" value="Login" class="form-control btn btn-primary btn-lg">
                       <input type="button" onclick= "window.location ='<?=$loginURL?>'" value="Login with FB" class="form-control btn btn-primary btn-lg">
          
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>