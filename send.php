<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'php-mailer/PHPMailer.php';
require 'php-mailer/SMTP.php';
require 'php-mailer/Exception.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

$name        = isset($_POST['name']) ? trim($_POST['name']) : '';
$phone       = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$email       = isset($_POST['email']) ? trim($_POST['email']) : '';
$requirement = isset($_POST['requirement']) ? trim($_POST['requirement']) : '';
$message     = isset($_POST['message']) ? trim($_POST['message']) : '';

if (empty($name) || empty($phone) || empty($requirement)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please fill in all required fields.']);
    exit;
}

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->SMTPAuth   = true;
    $mail->Host       = 'smtp.gmail.com';
    $mail->Port       = 587;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Username   = 'yashcomputer971@gmail.com';
    $mail->Password   = 'frun xkag sgzt yoxw'; // Gmail App Password

    // Recipients
    $mail->setFrom('yashcomputer971@gmail.com', 'Yash Computers Website');
    $mail->addAddress('f4rh4n6710@gmail.com');
    $mail->addAddress('yashcomputer971@gmail.com');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'New Laptop Enquiry: ' . $requirement;
    
    $body  = '<h2>New Laptop Enquiry Form Submission</h2>';
    $body .= '<p>You have received a new enquiry from the Yash Computers website contact form.</p>';
    $body .= '<table border="0" cellpadding="6" cellspacing="0" style="border-collapse: collapse; font-family: sans-serif; font-size: 14px;">';
    $body .= '<tr><td style="font-weight: bold; width: 120px; border-bottom: 1px solid #eee; padding: 8px 0;">Name:</td><td style="border-bottom: 1px solid #eee; padding: 8px 0;">' . htmlspecialchars($name) . '</td></tr>';
    $body .= '<tr><td style="font-weight: bold; border-bottom: 1px solid #eee; padding: 8px 0;">Phone:</td><td style="border-bottom: 1px solid #eee; padding: 8px 0;">' . htmlspecialchars($phone) . '</td></tr>';
    $body .= '<tr><td style="font-weight: bold; border-bottom: 1px solid #eee; padding: 8px 0;">Email:</td><td style="border-bottom: 1px solid #eee; padding: 8px 0;">' . htmlspecialchars(!empty($email) ? $email : 'Not provided') . '</td></tr>';
    $body .= '<tr><td style="font-weight: bold; border-bottom: 1px solid #eee; padding: 8px 0;">Requirement:</td><td style="border-bottom: 1px solid #eee; padding: 8px 0;">' . htmlspecialchars($requirement) . '</td></tr>';
    $body .= '<tr><td style="font-weight: bold; valign: top; padding: 8px 0;">Message:</td><td style="padding: 8px 0;">' . nl2br(htmlspecialchars($message)) . '</td></tr>';
    $body .= '</table>';

    $mail->Body = $body;

    $mail->send();
    echo json_encode(['success' => true, 'message' => 'Email sent successfully.']);
    exit;
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Failed to send email. Mailer Error: ' . $mail->ErrorInfo]);
    exit;
}
