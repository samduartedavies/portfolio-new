<?php

namespace SendGrid;
require_once 'config.php';
require_once SITE_ROOT . 'common/php/vendor/sendgrid-php/sendgrid-php.php';

$formData = json_decode($_POST['data']);

mail_hash(
    'samduarte-davies@hotmail.com',
    'samduarte-davies@hotmail.com',
    'Portfolio Enquiry',
    $formData
);

function mail_hash($from, $to, $subject, $formData)
{
    $sendgrid_api_key =
        "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";
    $sg = new \SendGrid($sendgrid_api_key);
    $message = "";
    foreach ($formData as $k => $v) {
        $message .= "<strong>" . $k . "</strong>:<br> " . $v . "<br/>";
    }

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
