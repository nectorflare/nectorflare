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

// Database connection
$servername = "localhost";
$username   = "root";
$password   = "Dhee@321";
$dbname     = "nectorflare_form";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Database Connection failed: " . $conn->connect_error);
}

// Get form data
$name    = $_POST['name'] ?? '';
$phone   = $_POST['phone'] ?? '';
$service = $_POST['service'] ?? '';

// Save to database
$stmt = $conn->prepare("INSERT INTO form_submissions (name, phone, service) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $phone, $service);
$stmt->execute();
$stmt->close();
$conn->close();

// Send Email
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtpout.secureserver.net';
    $mail->SMTPAuth   = true;
<<<<<<< HEAD
    $mail->Username   = 'info@nectorflare.com';  // GoDaddy email
    $mail->Password   = 'Dheer@321';   // Email password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
=======
    $mail->Username   = 'info@nectorflare.com'; 
    $mail->Password   = 'Dheer@321'; 
    $mail->SMTPSecure = 'ssl'; // SSL for port 465
>>>>>>> 9193d20421d91c3612249300495b7358f30c18e2
    $mail->Port       = 465;

    // Admin Mail
    $mail->setFrom('info@nectorflare.com', 'NectorFlare');
    $mail->addAddress('nectorflare@gmail.com');
    $mail->isHTML(true);
    $mail->Subject = "New Lead from Website";
    $mail->Body    = "
        <h3>New Lead Details</h3>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Service:</strong> {$service}</p>
    ";
    $mail->send();

    // Client Thank You Mail
    $mail->clearAddresses();
    $mail->addAddress($phone."@example.com"); // <-- agar client ka email field h to use karo
    $mail->Subject = "Thank you for contacting NectorFlare";
    $mail->Body    = "Hi {$name},<br><br>Thank you for contacting us regarding {$service}. Our team will get back to you shortly.<br><br>Regards,<br>NectorFlare Team";
    $mail->send();

} catch (Exception $e) {
    echo "❌ Mailer Error: {$mail->ErrorInfo}";
}

// Redirect to homepage
header("Location: index.php?status=success");
exit;
?>

