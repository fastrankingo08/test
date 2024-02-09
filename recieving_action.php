<?php  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';


// require './PHPMailer/src/PHPMailer.php';
// require './PHPMailer/src/SMTP.php';
// require './PHPMailer/src/Exception.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message =  $_POST['message'];
 
    $table = '<table border="1">
            <tr>
                <th>Name</th>
                <td>' . $username . '</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>' . $email . '</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>' . $phone . '</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>' . $message . '</td>
            </tr>
          </table>';
    try {
    $mail = new PHPMailer(true);

    // SMTP server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'jaydenmitchell0282@gmail.com';
    $mail->Password = 'rtcslwgbcgxkoibh';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Email content
    $mail->setFrom('jaydenmitchell0282@gmail.com', $username);
    // $mail->addAddress('support@spartatelecom.co.uk');
    $mail->addAddress('fastranking08@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'New Taxi Booking from '." ".$username;
    $mail->Body = 'Hello, I have some queries. Here are the details:<br>' . $table;
    
    // Send the email
    $mail->send();
    
    echo 'Email sent successfully';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
     
}
?>
