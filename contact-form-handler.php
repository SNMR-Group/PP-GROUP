<?php
// Database connection parameters
 $servername = "localhost";
$username = "u810920872_ppgroup";
$password = "Ppgroup@123";
$dbname = "u810920872_ppgroup"; 


// Include PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Function to send email using PHPMailer
function smtp_mailer($to, $subject, $msg) {
    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'shekharsushant54@gmail.com';
        $mail->Password = 'zggqjprnifcnjvap';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('shekharsushant54@gmail.com', 'PP-GROUP');
        $mail->addAddress($to);

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $msg;
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $firstName = htmlspecialchars(trim($_POST['fname']));
    $lastName = htmlspecialchars(trim($_POST['lname']));
    $email = htmlspecialchars(trim($_POST['email']));
    $messageContent = htmlspecialchars(trim($_POST['message']));

    // Validate the form data
    if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($messageContent) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Create a connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO submissions (first_name, last_name, email, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $firstName, $lastName, $email, $messageContent);

        // Execute the statement
        if ($stmt->execute()) {
            $message = "Message submitted successfully!";
        } else {
            $message = "Error: " . $stmt->error;
        }

        // Close connections
        $stmt->close();
        $conn->close();

        // Email details
        $to = "mahatosanjay207@gmail.com"; // Replace with your email address
        $subject = "New Contact Form Submission from $firstName $lastName";
        $emailBody = "
        <h2>Contact Form Submission</h2>
        <p><strong>First Name:</strong> $firstName</p>
        <p><strong>Last Name:</strong> $lastName</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Message:</strong><br>$messageContent</p>";

        // Send the email using smtp_mailer function
        if (smtp_mailer($to, $subject, $emailBody)) {
            $message .= " Message sent successfully!";
        } else {
            $message .= " Failed to send the message. Please try again later.";
        }
    } else {
        $message = "Please fill in all fields and provide a valid email address.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Form Submission</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Countdown and redirect script
        let countdown = 5; // Start countdown from 5 seconds
        setInterval(function() {
            if (countdown > 0) {
                document.getElementById('counter').innerText = countdown;
                countdown--;
            } else {
                window.location.href = 'index.php'; // Redirect after countdown
            }
        }, 1000); // Update every second
    </script>
</head>
<body>
<div class="container mt-5">
    <div class="alert alert-info text-center" role="alert">
        <?php echo $message; ?><br>
        You will be redirected to the home page in <span id="counter">5</span> seconds.
    </div>
</div>
</body>
</html>
