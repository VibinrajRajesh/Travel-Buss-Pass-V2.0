<?php
    session_start();
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
    <link rel="stylesheet" href="css/book.css">
    <script src="https://kit.fontawesome.com/c7348bdcd6.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="image/favicon.png" type="image/x-icon">
</head>
<body>
    <?php
      include("partials/navl.php");
    ?>
    <!--Section Content Starts-->
        <section id="book">
            <h1 class="header"><b>Book a Pass</b></h1>
            <hr>
            <div class="content">
                <h5>Enter your Details:</h5><br>
                <form method="post" action="pay.php">
                    <table>
                        <tr>
                            <td><label for="name">Name:</label></td>
                            
                        </tr>
                        <tr>
                            <td><input type="text" name="name" value="<?php echo $_SESSION["name"];?>" ></td>
                            
                        </tr>
                        <tr>
                            <td><label for="email">Email:</label></td>
                            <td><label for="phone">Phone:</label></td>
                        </tr>
                        <tr>
                            <td><input type="email" name="email" value="<?php echo $_SESSION["email"];?>" ></td>
                            <td><input type="text" name="phone" value="<?php echo $_SESSION["phone"];?>" ></td>
                        </tr>
                        <tr>
                            <td><label for="email">Gender:</label></td>
                            <td><label for="phone">Date of Birth:</label></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="gender" value="<?php echo $_SESSION["gender"];?>" ></td>
                            <td><input type="text" name="dob" value="<?php echo $_SESSION["dob"];?>" ></td>
                        </tr>
                        <tr>
                            <td><label for="idtype">Identity Type:</label></td>
                            <td><label for="idno">Identity Number:</label></td>
                        </tr>
                        <tr>
                            <td><select name="idtype">
                                    <option value="Choose Identity Type">Choose Identity Type</option>
                                    <option value="Adhaar Card">Adhaar Card</option>
                                    <option value="Voter Id">Voter Id</option>
                                    <option value="Pan card">Pan Card</option>
                                    <option value="Driving License">Driving License</option>
                                    <option value="Passport">Passport</option>
                                    <option value="Student Card">Student Card</option>
                                    <option value="Official">Any Official Card</option>
                                </select></td>
                            <td><input type="text" placeholder="Enter Identity Number" name="idno"></td>
                        </tr>
                        <tr>
                            <td><label for="source">Source:</label></td>
                            <td><label for="destination">Destination:</label></td>
                        </tr>
                        <tr>
                            <td><select id="source" name="from">
                                    <option value="Choose Identity Type">Choose Source Destination</option>
                                    <option value="Airoli">Airoli</option>
                                    <option value="Ghansoli">Ghansoli</option>
                                    <option value="Kopar Khairne">Kopar Khairne</option>
                                    <option value="Juhu Nagar">Juhu Nagar</option>
                                    <option value="Vashi">Vashi</option>
                                    <option value="Turbhe">Turbhe</option>
                                    <option value="Sanpada">Sanpada</option>
                                    <option value="Juinagar">Juinagar</option>
                                    <option value="Nerul">Nerul</option>
                                    <option value="Darave">Darave</option>
                                    <option value="Karave Nagar">Karave Nagar</option>
                                    <option value="Passport">CBD Belapur</option>
                                    <option value="Kharghar">Kharghar</option>
                                    <option value="Kamothe">Kamothe</option>
                                    <option value="New Panvel">New Panvel</option>
                                    <option value="Kalamboli">Kalamboli</option>
                                    <option value="Ulwe">Ulwe</option>
                                    <option value="Dronagiri">Dronagiri</option>
                                    <option value="Taloja">Taloja</option>
                                </select></td>
                            <td><select id="source" name="to">
                                    <option value="Choose Identity Type">Choose Destination</option>
                                    <option value="Airoli">Airoli</option>
                                    <option value="Ghansoli">Ghansoli</option>
                                    <option value="Kopar Khairne">Kopar Khairne</option>
                                    <option value="Juhu Nagar">Juhu Nagar</option>
                                    <option value="Vashi">Vashi</option>
                                    <option value="Turbhe">Turbhe</option>
                                    <option value="Sanpada">Sanpada</option>
                                    <option value="Juinagar">Juinagar</option>
                                    <option value="Nerul">Nerul</option>
                                    <option value="Darave">Darave</option>
                                    <option value="Karave Nagar">Karave Nagar</option>
                                    <option value="Passport">CBD Belapur</option>
                                    <option value="Kharghar">Kharghar</option>
                                    <option value="Kamothe">Kamothe</option>
                                    <option value="New Panvel">New Panvel</option>
                                    <option value="Kalamboli">Kalamboli</option>
                                    <option value="Ulwe">Ulwe</option>
                                    <option value="Dronagiri">Dronagiri</option>
                                    <option value="Taloja">Taloja</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td><label for="Validity">Validity:</label></td>
                            <td><label for="price">Price:</label></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" id="1month" name="choice" value="1 Month" onclick='document.getElementById("demo").value = "310"'>
                                <label for="1month">1 Month</label>
                                <input type="radio" id="3month" name="choice" value="3 Month" onclick='document.getElementById("demo").value = "610"'>
                                <label for="1month">3 Month</label>
                            </td>
                            <td><input type="text" name="price" id="demo" ></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" class="btn" value="Submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </section>
    <!--Section Content Ends-->
    <?php
    include("partials/footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="./js/modal.js"></script>
</body>
</html>