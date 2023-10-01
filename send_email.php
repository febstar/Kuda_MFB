<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $ipAddress = $_POST['ipAddress'];

        // Replace with your email settings
        $to = 'febechukwuonyeyili@gmail.com'; // Recipient's email address
        $subject = 'IP Address Report';
        $message = 'The IP address is: ' . $ipAddress;
        $headers = 'From: febechukwuonyeyili@gmail.com' . "\r\n" .
            'Reply-To: febechukwuonyeyili@gmail.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        // Send the email
        if (mail($to, $subject, $message, $headers)) {
            echo 'Email sent successfully!';
        } else {
            echo 'Email could not be sent.';
        }
    }
    ?>