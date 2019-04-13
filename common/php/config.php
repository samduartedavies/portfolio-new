<?php
session_start();
//SEO
define("SITE_NAME", "Sam Duarte-Davies");
define("SITE_COLOR", "#e0ebe8");

//Debug Mode
define("SITE_DEBUG", true);

//Site Install Directory
define("SITE_DIRECTORY", '/');

//Site URL
define("SITE_URL", getenv('SITE_URL'));

//Site ROOT URL
define("SITE_ROOT", "d:/REPOS/portfolio-new/");

//sendgrid api ref
putenv(
    "SENDGRID_API_KEY=
    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"
);

//DO NOT EDIT
include SITE_ROOT . 'common/php/functions.php';
?>
