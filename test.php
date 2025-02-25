<?php
$to = 'bevowa1331@fryshare.com';
$subject = 'Тестовое письмо';
$message = 'Привет! Это тестовое письмо, отправленное через PHP.';
$headers = 'From: sender@example.com' . "\r\n" .
    'Reply-To: sender@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo 'Письмо успешно отправлено!';
} else {
    echo 'Ошибка при отправке письма!';
}
?>