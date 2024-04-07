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
    <link rel="stylesheet" href="css/order.css">
    <script src="https://kit.fontawesome.com/c7348bdcd6.js" crossorigin="anonymous"></script>
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
                    <table style="border:2px solid #000;">
                        <tr>
                            <td><label for="name">Name:</label></td>
                            
                        </tr>
                        <tr>
                            <td><?php echo $_SESSION["name"];?></td>
                            
                        </tr>
                        <tr>
                            <td><label for="email">Email:</label></td>
                            <td><label for="phone">Phone:</label></td>
                        </tr>
                        <tr>
                            <td><?php echo $_SESSION["email"];?></td>
                            <td><?php echo $_SESSION["phone"];?></td>
                        </tr>
                        <tr>
                            <td><label for="email">Gender:</label></td>
                            <td><label for="phone">Date of Birth:</label></td>
                        </tr>
                        <tr>
                            <td><?php echo $_SESSION["gender"];?></td>
                            <td><?php echo $_SESSION["dob"];?></td>
                        </tr>
                        <tr>
                            <td><label for="idtype">Identity Type:</label></td>
                            <td><label for="idno">Identity Number:</label></td>
                        </tr>
                        <tr>
                            <td><?php echo $_SESSION["idtype"];?></td>
                            <td><?php echo $_SESSION["idno"];?></td>
                        </tr>
                        <tr>
                            <td><label for="source">Source:</label></td>
                            <td><label for="destination">Destination:</label></td>
                        </tr>
                        <tr>
                            <td><?php echo $_SESSION["from"];?></td>
                            <td><?php echo $_SESSION["to"];?></td>
                        </tr>
                        <tr>
                            <td><label for="Validity">Validity:</label></td>
                            <td><label for="price">Price:</label></td>
                        </tr>
                        <tr>
                            <td>
                                <?php echo $_SESSION['validity']?></td>
                            <td><?php echo $_SESSION["price"];?></td>
                        </tr>
                        <tr>
                            <td colspan="2"><button id="rzp-button1" class="btn">Continue to Payment</button></td>
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



<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<form name='razorpayform' action="verify.php" method="POST">
    <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
    <input type="hidden" name="razorpay_signature"  id="razorpay_signature" >
</form>
<script>
// Checkout details as a json
var options = <?php echo $json?>;

/**
 * The entire list of Checkout fields is available at
 * https://docs.razorpay.com/docs/checkout-form#checkout-fields
 */
options.handler = function (response){
    document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
    document.getElementById('razorpay_signature').value = response.razorpay_signature;
    document.razorpayform.submit();
};

// Boolean whether to show image inside a white frame. (default: true)
options.theme.image_padding = false;

options.modal = {
    ondismiss: function() {
        console.log("This code runs when the popup is closed");
    },
    // Boolean indicating whether pressing escape key 
    // should close the checkout form. (default: true)
    escape: true,
    // Boolean indicating whether clicking translucent blank
    // space outside checkout form should close the form. (default: false)
    backdropclose: false
};

var rzp = new Razorpay(options);

document.getElementById('rzp-button1').onclick = function(e){
    rzp.open();
    e.preventDefault();
}
</script>