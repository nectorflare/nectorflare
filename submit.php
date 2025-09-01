<?php
// ================= DB CONFIG =================
$servername = "localhost";
$username   = "root";
$password   = "Dhee@321";
$dbname     = "nectorflare_form";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// ================= reCAPTCHA CONFIG =================
$secretKey = "6LcjmborAAAAAHV3Jn9Df7uIV1RjO88hg2vNeDKT";

// Verify reCAPTCHA
$token = $_POST['g-recaptcha-response'] ?? '';
$ip    = $_SERVER['REMOTE_ADDR'];

$verifyURL = "https://www.google.com/recaptcha/api/siteverify";
$response   = file_get_contents($verifyURL . "?secret=" . $secretKey . "&response=" . $token . "&remoteip=" . $ip);
$responseKeys = json_decode($response, true);

if (!$responseKeys["success"] || $responseKeys["score"] < 0.5) {
    die("❌ Bot detected, form submission blocked!");
}

// ================= Database Connection =================
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Database Connection failed: " . $conn->connect_error);
}

// Get form data
$name    = $_POST['name'] ?? '';
$phone   = $_POST['phone'] ?? '';
$email   = $_POST['email'] ?? '';
$service = $_POST['service'] ?? '';

// Save to database
$stmt = $conn->prepare("INSERT INTO form_submissions (name, phone, email, service) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $phone, $email, $service);
$stmt->execute();
$stmt->close();
$conn->close();

// ================= Send Emails using PHPMailer =================
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtpout.secureserver.net'; // GoDaddy SMTP
    $mail->SMTPAuth   = true;
    $mail->Username   = 'info@nectorflare.com';  // GoDaddy email
    $mail->Password   = 'Dheer@321';             // Email password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // ✅ Admin Mail
    $mail->setFrom('info@nectorflare.com', 'NectorFlare');
    $mail->addAddress('nectorflare@gmail.com'); // Admin Email
    $mail->isHTML(true);
    $mail->Subject = "New Lead from Website";
    $mail->Body    = "
        <h3>New Lead Details</h3>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Service:</strong> {$service}</p>
    ";
    $mail->send();

    // ✅ Client Thank You Mail
    $mail->clearAddresses();
    $mail->addAddress($email); // Client ka actual email field use kiya
    $mail->Subject = "Thank you for contacting NectorFlare";
    $mail->Body    = "
        Hi {$name},<br><br>
        Thank you for contacting us regarding <b>{$service}</b>. 
        Our team will get back to you shortly.<br><br>
        Regards,<br>
        <b>NectorFlare Team</b>
    ";
    $mail->send();

} catch (Exception $e) {
    echo "❌ Mailer Error: {$mail->ErrorInfo}";
    exit;
}

// ✅ Redirect to homepage with success message
header("Location: index.php?status=success");
exit;
?>
