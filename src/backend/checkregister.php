<?php
require("../config.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../PHPMailer-master/src/PHPMailer.php';
require '../../PHPMailer-master/src/SMTP.php';
require '../../PHPMailer-master/src/Exception.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($name) || empty($email) || empty($password)) {
        echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $token = bin2hex(random_bytes(16));
    $token_hash = hash("sha256", $token);

    $stmt = $conn->prepare("INSERT INTO users (name, email, password, account_activation_hash) VALUES (?, ?, ?, ?)");
    $stmt->bind_param('ssss', $name, $email, $hashedPassword, $token_hash);

    if ($stmt->execute()) {
        $activationLink = "http://localhost/christian/personal-portfolio/src/backend/activate-account.php?token=$token";

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'localhost'; 
            $mail->Port = 1025;        
            $mail->setFrom("noreply@example.com", "Your App");
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = "Activate Your Account";
            $mail->Body = "Click <a href='$activationLink'>here</a> to activate your account.";

            $mail->send();
            echo json_encode(['status' => 'success', 'message' => 'Registration successful. Please check your email.']);
        } catch (Exception $e) {
            echo json_encode(['status' => 'error', 'message' => "Mailer Error: {$mail->ErrorInfo}"]);
        }
    } else {
        if ($conn->errno === 1062) {
            echo json_encode(['status' => 'error', 'message' => 'Email already taken.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $conn->error]);
        }
    }

    $stmt->close();
    $conn->close();
}
?>