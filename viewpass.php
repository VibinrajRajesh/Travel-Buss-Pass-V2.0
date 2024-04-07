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
    <link rel="stylesheet" href="css/view.css">
    <script src="https://kit.fontawesome.com/c7348bdcd6.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="image/favicon.png" type="image/x-icon">
</head>
<body>
    <?php
      include("partials/navl.php");
    ?>
    <!--Section Content Starts-->
        <section id="viewpass">
            <div class="container">
            <h1 class="header"><b>View Pass</b></h1>
            <hr><br>
            <table>
                <tr>
                    <th>Sr No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone No</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Id Type</th>
                    <th>Id Number</th>
                    <th>Source</th>
                    <th>Destination</th>
                    <th>Validity</th>
                    <th>Action</th>
                </tr>
                <?php
                    $email = $_SESSION['email'];
                    $sql = "select * from booking where email = '$email'";
                    $query = mysqli_query($conn,$sql);
                    $serialNumber = 1;
                    while($rows=mysqli_fetch_assoc($query)){
                        ?>
                        <tr>
                            <td><?php echo $serialNumber; ?></td>
                            <td><?php echo $rows['name']?></td>
                            <td><?php echo $rows['email']?></td>
                            <td><?php echo $rows['phone']?></td>
                            <td><?php echo $rows['gender']?></td>
                            <td><?php echo $rows['dob']?></td>
                            <td><?php echo $rows['idtype']?></td>
                            <td><?php echo $rows['idno']?></td>
                            <td><?php echo $rows['source']?></td>
                            <td><?php echo $rows['destination']?></td>
                            <td><?php echo $rows['validity']?></td>
                            <td>Download</td>
                        </tr>
                        <?php
                        $serialNumber++;
                    }
                ?>
            </table>
            </div>
        </section>
    <!--Section Content Starts-->
    <?php
    include("partials/footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="./js/modal.js"></script>
</body>
</html>