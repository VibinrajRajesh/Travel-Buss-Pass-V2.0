<?php
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Buss Pass</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">
    <script src="https://kit.fontawesome.com/c7348bdcd6.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="image/favicon.png" type="image/x-icon">

</head>
<body>
    <?php
      session_start();

      if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
        include("partials/nav.php");
      }
      else{
        
        include("partials/navl.php");
      }
    ?>
    <!--Section Content Starts-->
    <div class="login-box">
        <div class="row">
            <div class="col-6">
                <h1 class="header1"><b>REGISTER</b></h1>
                <form action="" method="post">
                    <div id="div1">
                            <div class="row">
                                <div class="col-6">
                                    <label>Full Name:</label><br>
                                    <input type="text" name="name" required/><br><br>
                                    <label>Phone Number:</label><br>
                                    <input type="text" name="phone" required/>
                                </div>
                                <div class="col-6">
                                    <label>Email:</label><br>
                                    <input type="email" name="email" required/>
                                </div>
                            </div>
                            <button id="btn" onclick="myFunction()">Next</button>
                    </div>
                    <div id="div2">
                            <div class="row">
                                <div class="col-6">
                                    <label>Gender:</label><br>
                                    <input type="radio" name="gender" value="Male" required/>&emsp;Male<br>
                                    <input type="radio" name="gender" value="Female" required/>&emsp;Female<br><br>
                                    <label>Date of Birth:</label><br>
                                    <input type="date" name="dob" required/>
                                </div>
                            </div>
                            <button id="btn" onclick="myFunction1()">Next</button>
                    </div>
                    <div id="div3">
                            <div class="row">
                                <div class="col-6">
                                    <label>Password:</label><br>
                                    <input type="password" name="pass" id=""><br><br>
                                    <label>Confirm Password:</label><br>
                                    <input type="password" name="cpass" required/>
                                </div>
                            </div>
                            <button id="btn" name="signup">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <img src="image/Banner 2.png" alt="" width="90%" style="padding-top:10%;"/>
            </div>
        </div>
    </div>
    <!--Section Content Ends-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
</body>
</html>

<?php
    if(isset($_POST['signup'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $pass= $_POST['pass'];
        $cpass = $_POST['cpass'];

        if($pass != $cpass){
            echo "<script>alert('Password are not Same');</script>";
        }else{
        $password = password_hash($pass,PASSWORD_DEFAULT);
        
        $check_sql = "select * from users where email = '$email'";
        $check_result = mysqli_query($conn,$check_sql);
        if(mysqli_num_rows($check_result) > 0){
            echo "<script>alert('User already exists. Please login.');
                window.location.href = 'http://localhost/Travel%20Buss%20Pass/login.php';</script>";
        }else{
            $sql = "insert into users(name,email,phone,gender,dob,password) values('$name','$email','$phone','$gender','$dob','$password')";
            $result = mysqli_query($conn,$sql);
            if($result){
                echo "<script>alert('Registration Successful');
                window.location.href = 'http://localhost/Travel%20Buss%20Pass/login.php';</script>";
            }
        }
        
    }
}
?>