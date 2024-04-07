<?php
    include("connection.php");

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "select * from users where email = '$email'";
        $query = mysqli_query($conn,$sql);
        $rows = mysqli_fetch_assoc($query);
        if(password_verify($password,$rows['password'])){
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['name'] = $rows['name'];
            $_SESSION['email'] = $rows['email'];
            $_SESSION['phone'] = $rows['phone'];
            $_SESSION['gender'] = $rows['gender'];
            $_SESSION['dob'] = $rows['dob'];
            
            header("location:index.php");
        }
        else{
            echo "<script>alert('Invalid Credential');</script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Buss Pass</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/loginstyle.css">
    <script src="https://kit.fontawesome.com/c7348bdcd6.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="image/favicon.png" type="image/x-icon">

</head>
<body>
    <nav class="navbar navbar-expand-lg shadow rounded">
        <div class="container-fluid">
            <a class="navbar-brand logo fs-3 ps-5" href="#">Travel Buss Pass</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item pe-5 mx-auto fs-6">
                        <a class="nav-link text-uppercase" href="index.php">Home</a>
                    </li>
                    <li class="nav-item pe-5 mx-auto fs-6">
                        <a class="nav-link text-uppercase" href="about.php">About</a>
                    </li>
                    <li class="nav-item pe-5 mx-auto fs-6">
                        <a class="nav-link text-uppercase" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item pe-5 mx-auto fs-6">
                        <a class="nav-link" href="#"><i class="fa-regular fa-user" style="color: #271616;"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Section Content Starts-->
    <div class="login-box" id="login-box">
        <h1 class="header1"><b>LOGIN</b></h1>
        <form method="post">
            <label>Email:</label><br>
            <input type="email" name="email" /><br><br>
            <label>Password:</label><br>
            <input type="password" name="password" /><br><br>
            <a href="#">Forgot Password?</a><br> 
            <button id="btn" name="login">Log In</button><br><br>
            &emsp;&emsp;&emsp;&emsp;<a href="register.php">Create an account</a>
        </form>
        </div>
    </div>

    <div class="forgot-pass" id="forgot-pass">
        <h1 class="header2"><b>Forgot Password</b></h1><br><br>
        <form method="post">
            <label>Email:</label><br>
            <input type="email" name="email" /><br><br>
            &emsp;<button id="btn2">Submit</button>
        </form>
    </div>
    <!--Section Content Ends-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>