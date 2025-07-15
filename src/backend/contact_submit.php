<?php
header('Content-Type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once '../../PHPMailer-master/src/PHPMailer.php';
require_once '../../PHPMailer-master/src/SMTP.php';
require_once '../../PHPMailer-master/src/Exception.php';
require_once '../config.php'; // this should point to your DB connection file

$response = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if (empty($name) || empty($email) || empty($message)) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill in all fields.']);
        exit();
    }

    $stmt = $conn->prepare("INSERT INTO contact_db (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        try {
            // Mail to admin
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'localhost';
            $mail->Port = 1025;
            $mail->SMTPAuth = false;
            $mail->SMTPSecure = false;

            $mail->setFrom('jc1289716@gmail.com', 'Portfolio Contact');
            $mail->addAddress('jb1289716@gmail.com', 'Joeyboi');
            $mail->addReplyTo($email, $name);

            $mail->isHTML(true);
            $mail->Subject = 'New Contact Form Submission';
            $mail->Body    = "<strong>Name:</strong> $name<br><strong>Email:</strong> $email<br><strong>Message:</strong><br>$message";
            $mail->AltBody = "Name: $name\nEmail: $email\nMessage:\n$message";

            // Mail to sender
            $emails = new PHPMailer(true);
            $emails->isSMTP();
            $emails->Host = 'localhost';
            $emails->Port = 1025;
            $emails->SMTPAuth = false;
            $emails->SMTPSecure = false;

            $emails->setFrom('christiantan120501@gmail.com', 'Christian Ralph R. Tan');
            $emails->addAddress($email, $name);
            $emails->isHTML(true);
            $emails->Subject = 'Thank you for contacting me!';
            $emails->Body    = "Hi {$name},<br><br>Thanks for reaching out! I’ll get back to you as soon as possible.";

            $mail->send();
            $emails->send();

            echo json_encode(['status' => 'success']);
        } catch (Exception $e) {
            echo json_encode(['status' => 'error', 'message' => 'Mailer error: ' . $mail->ErrorInfo]);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to save to the database.']);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request.']);
}
