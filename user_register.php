<?php

include("header.php");


?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="./css/style.css" rel="stylesheet">

</head>
<style>
    body{
        background-color: black;
        color: white;
    }
</style>


<body class="h-100">
    <div class="authincation h-100" style="background-color: black; color:white; box-shadow:3px 3px 4px 4px">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                    <form method="POST">
                                        <div class="form-group">
                                            <label><strong>Username</strong></label>
                                            <input type="text" name="username" class="form-control" placeholder="username">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control" placeholder="@gmail.com">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control" >
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" name="submit" class=" text-white btn btn-primary btn-block">Sign me up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-white" href="page-login.html">Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <!--endRemoveIf(production)-->
</body>

</html>

<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "INSERT INTO user_register (username , email , password ) VALUES ('$username','$email','$password')";
    $result = mysqli_query($conn , $sql);

    echo "<script>
    alert('RECORD HAS BEEN INSERTED!')
    </script>";
}

?>
