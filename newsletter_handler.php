<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


//data base connection
$servername = "localhost";
$username = "u810920872_ppgroup";
$password = "Ppgroup@123";
$dbname = "u810920872_ppgroup"; 




// Establish database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to send email using PHPMailer
function smtp_mailer($to, $subject, $msg) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'shekharsushant54@gmail.com';
        $mail->Password = 'zggqjprnifcnjvap';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('shekharsushant54@gmail.com', 'PP-GROUP');
        $mail->addAddress($to);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $msg;

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

// Initialize the message variable
$message = "";

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));

    // Validate input fields
    if (!empty($name) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Prepare and bind the query
        $stmt = $conn->prepare("INSERT INTO newsletter_form (name, email) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $email);

        // Execute the query
        if ($stmt->execute()) {
            // Email details
            $to = "mahatosanjay207@gmail.com";
            $subject = "Newsletter $name";
            $emailBody = "<h2>Newsletter</h2><p><strong>Name:</strong> $name</p><p><strong>Email:</strong> $email</p>";

            // Send email
            if (smtp_mailer($to, $subject, $emailBody)) {
                $message = "Message sent and data saved successfully!";
            } else {
                $message = "Data saved, but failed to send the email.";
            }
        } else {
            $message = "Failed to save the data.";
        }

        $stmt->close();
    } else {
        $message = "Please fill in all fields and provide a valid email address.";
    }

    // Display the message and set a timer to redirect to the homepage
    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <title>Form Submission</title>
        <!-- Bootstrap CSS -->
        <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' rel='stylesheet'>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
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
    <div class='container mt-5'>
        <div class='alert alert-info text-center' role='alert'>
            $message<br>
            You will be redirected to the home page in <span id='counter'>5</span> seconds.
        </div>
    </div>
    </body>
    </html>
    ";
    exit(); // Stop further execution
}

$conn->close();
?>

<!-- HTML Form for Newsletter -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Newsletter Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Newsletter Signup</h2>
        <form action="newsletter_handler.php" method="post" class="row g-3">
            <div class="col-auto">
                <input type="text" class="form-control" name="name" placeholder="Enter your name">
            </div>
            <div class="col-auto">
                <input type="email" class="form-control" name="email" placeholder="Enter your email">
            </div>
            <div class="col-auto">
                <button class="btn btn-primary" type="submit">
                    <span class="fa fa-paper-plane"></span> Submit
                </button>
            </div>
        </form>
    </div>
</body>
</html>
