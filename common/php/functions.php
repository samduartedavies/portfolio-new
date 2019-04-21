<?php

function getHeader($title, $description, $class = "body")
{
    $bodyClass = ' class="' . $class . '"';

    include $_SERVER['DOCUMENT_ROOT'] . '/common/inc/header.php';
}

function getFooter()
{
    include $_SERVER['DOCUMENT_ROOT'] . '/common/inc/footer.php';
}
?>
