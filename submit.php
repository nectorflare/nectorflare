<?php
// ================= DB CONFIG =================
$servername = "localhost";
$username   = "root";
$password   = "Dhee@321";
$dbname     = "nectorflare_form";

// Connect to database
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// ================= GET FORM DATA =================
$name    = $_POST['name'] ?? '';
$phone   = $_POST['phone'] ?? '';
$email   = $_POST['email'] ?? '';
$service = $_POST['service'] ?? '';

// Map service value to readable text
$service_names = [
    "ecommerce-development" => "E-Commerce Development",
    "software-development"  => "Software Development",
    "digital-marketing"     => "Digital Marketing",
    "ui-ux-designing"       => "UI/UX Designing",
    "app-development"       => "App Development",
    "web-development"       => "Web Development"
];
$service_text = $service_names[$service] ?? $service;

// Save to DB
$sql = "INSERT INTO form_submissions (name, phone, email, service) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $phone, $email, $service_text);
$stmt->execute();
$stmt->close();

// ================= PHPMailer =================
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Manual include (no composer needed)
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    // SMTP settings (GoDaddy)
    $mail->isSMTP();
    $mail->Host       = 'smtpout.secureserver.net'; 
    $mail->SMTPAuth   = true;
    $mail->Username   = 'info@nectorflare.com'; 
    $mail->Password   = 'Dheer@321'; 
    $mail->SMTPSecure = 'ssl'; // SSL for port 465
    $mail->Port       = 465;

    // ---------- Mail to Admin ----------
    $mail->setFrom('info@nectorflare.com', 'NectorFlare Website');
    $mail->addAddress('nectorflare@gmail.com'); 
    $mail->isHTML(true);
    $mail->Subject = "New Form Submission - $service_text";
    $mail->Body    = "
      <h2>New Form Submission</h2>
      <table border='1' cellpadding='8' cellspacing='0'>
        <tr><td><strong>Name</strong></td><td>$name</td></tr>
        <tr><td><strong>Phone</strong></td><td>$phone</td></tr>
        <tr><td><strong>Email</strong></td><td>$email</td></tr>
        <tr><td><strong>Service</strong></td><td>$service_text</td></tr>
      </table>
    ";
    $mail->send();

    // ---------- Mail to Client ----------
    $mail->clearAddresses();
    $mail->addAddress($email); 
    $mail->isHTML(true);
    $mail->Subject = "Thanks for contacting NectorFlare";
    $mail->Body    = "
      <p>Hello <strong>$name</strong>,</p>
      <p>Thank you for showing interest in our <strong>$service_text</strong> service.</p>
      <p>Our team will contact you soon.</p>
      <br>
      <p>Best Regards,<br><strong>NectorFlare Team</strong></p>
    ";
    $mail->send();

} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}

$conn->close();

// Redirect after submit
header("Location: index.php");
exit;
?>
