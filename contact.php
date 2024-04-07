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
    <link rel="stylesheet" href="css/contact.css">
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
              <h5><b>Get in touch</b></h5>
            </div>
            <div class="col-6">
                <form>
                    
                </form>
            </div>
        </div>
    </div>
    <!--Section Content Ends-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
</body>
</html>
