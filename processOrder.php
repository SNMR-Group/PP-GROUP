<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_desc = $_POST['product_desc'];
    $product_price = $_POST['product_price'];

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 2; // Enable verbose debug output
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'shekharsushant54@gmail.com';
        $mail->Password   = 'zggqjprnifcnjvap'; // Use an app password if 2FA is enabled
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom('shekharsushant54@gmail.com', 'Mailer');
        $mail->addAddress('mahatosanjay207@gmail.com', 'Joe User'); 

        // Content
        $mail->isHTML(false);
        $mail->Subject = "New Order from $name";
        $mail->Body    = "Order Details:\n\nName: $name\nEmail: $email\nPhone: $phone\nAddress: $address\nProduct ID: $product_id\n Product Name: $product_name\n Product description: $product_desc \nProduct price: $product_price";

     
     
       
       

        $mail->send();
        echo 'Thank you for your purchase!';
    } catch (Exception $e) {
        echo "Sorry, there was an error processing your order. Mailer Error: {$mail->ErrorInfo}";
    }
}

?>