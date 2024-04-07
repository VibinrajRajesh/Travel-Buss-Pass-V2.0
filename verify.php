<?php
include("connection.php");
require('config.php');

session_start();

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $orderid = $_SESSION['razorpay_order_id'];
    $passno = mt_rand(100000000, 999999999);
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $phone = $_SESSION['phone'];
    $gender = $_SESSION['gender'];
    $dob = $_SESSION['dob'];
    $idtype = $_SESSION['idtype'];
    $idno = $_SESSION['idno'];
    $source = $_SESSION['from'];
    $destination = $_SESSION['to'];
    $validity = $_SESSION['validity'];

    $_SESSION['passno'] = $passno;


    $sql = "insert into booking(orderid,passno,name,email,phone,gender,dob,idtype,idno,source,destination,validity)values('$orderid','$passno','$name','$email','$phone','$gender','$dob','$idtype','$idno','$source','$destination','$validity')";
    $query = mysqli_query($conn,$sql);
    if($query){
        header("location: greet.php");
    }


}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
