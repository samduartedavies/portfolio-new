<?php

namespace SendGrid;
require_once $_SERVER['DOCUMENT_ROOT'] . '/common/php/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] .
    '/common/php/vendor/sendgrid-php/sendgrid-php.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formData = compact("name", "email", "message");

$sendgrid_api_key = SENDGRID_API_KEY;

mail_hash(
    'samduarte-davies@hotmail.com',
    'samduarte-davies@protonmail.com',
    'Portfolio Enquiry',
    $formData,
    $sendgrid_api_key
);

function mail_hash($from, $to, $subject, $formData, $key)
{
    $sg = new \SendGrid($key);
    $message =
        "<strong>" .
        $formData['name'] .
        "</strong><br/>" .
        $formData['email'] .
        "<br/><br/>" .
        $formData['message'];

    $content = new \SendGrid\Content("text/html", $message);

    $from = new \SendGrid\Email('Sam Duarte-Davies Portfolio', $from);
    $to = new \SendGrid\Email('Sam Duarte-Davies', $to);
    $mail = new \SendGrid\Mail($from, $subject, $to, $content);
    $result = $sg->client
        ->mail()
        ->send()
        ->post($mail);

    if ($result->statusCode() >= 400) {
        $response = array(
            'status' => 'error',
            'message' => 'Message Failed - ' . $result->statusCode()
        );
    } elseif ($result->statusCode() >= 401) {
        $response = array(
            'status' => 'error',
            'message' => 'Message Failed - ' . $result->statusCode()
        );
    } else {
        $response = array(
            'status' => 'success',
            'message' => 'Message Sent - ' . $result->statusCode()
        );
    }
    echo json_encode($response);
    return;
}
?>
