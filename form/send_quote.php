<?php
// Load PHPMailer classes
require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



// Sanitize input
function sanitize($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

$name     = sanitize($_POST['name'] ?? '');
$phone    = sanitize($_POST['phone'] ?? '');
$email    = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
$address  = sanitize($_POST['address'] ?? '');
$services = $_POST['services'] ?? [];
$budget   = sanitize($_POST['budget'] ?? '');
$details  = sanitize($_POST['details'] ?? '');
$servicesList = !empty($services) ? implode(", ", array_map('sanitize', $services)) : "None selected";

// Compose email
$mail = new PHPMailer(true);
try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;
    $mail->Username = 'juddukes11@gmail.com';            // Your Gmail
    $mail->Password = 'htcp kgfa mlsa dxjy';     // App password from step 1
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Recipients
    $mail->setFrom('juddukes11@gmail.com', 'TLL Web Form');
    $mail->addAddress('brycewes02@gmail.com');          // Your real receiving email

    // Content
    $mail->isHTML(false);
    $mail->Subject = "Quote Request from $name";
    $mail->Body = "
Name: $name
Phone: $phone
Email: $email
Address: $address
Services: $servicesList
Budget: $budget

Details:
$details
";

    $mail->send();
    header('Location: index.php');  // Redirect to homepage or thank you page
    exit;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
