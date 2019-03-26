<?php

function getPage($url = null)
{
    include $_SERVER['DOCUMENT_ROOT'] . '/pages/' . $url . '.php';
    //Load specified URL or default to current page URL
    if ($url == null) {
        $url = $_SERVER['REQUEST_URI'] . '/';
    }

    //Remove Query & fragments
    $url = parse_url($url);
    $url = $url['path'];

    //If URL end is slash, load index page
    if (endsWith($url, '/')) {
        $url .= 'index';
    }

    //Remove the base directory of the site
    echo 'before ' . $url;
    $url = preg_replace(
        '/^' . preg_quote($_SERVER['REQUEST_URI'], '/') . '/',
        '',
        $url
    );
    echo 'before ' . $url;
    if (is_file($_SERVER['DOCUMENT_ROOT'] . 'pages/' . $url . '.php')) {
        include $_SERVER['DOCUMENT_ROOT'] . 'pages/' . $url . '.php';
        return;
    } else {
        header("HTTP/1.1 404 Not Found");
        include $_SERVER['DOCUMENT_ROOT'] . 'pages/404.php';
        return;
    }
}

function getHeader($title, $description, $class = "body")
{
    $bodyClass = ' class="' . $class . '"';

    include $_SERVER['DOCUMENT_ROOT'] . '/common/inc/header.php';
}

function getFooter()
{
    include $_SERVER['DOCUMENT_ROOT'] . '/common/inc/footer.php';
}

function getNavigation()
{
    include $_SERVER['DOCUMENT_ROOT'] . '/common/inc/navigation.php';
}
function getSearch($form = null, $is_header = false)
{
    if (!is_null($form)) {
        $form = '-' . $form;
    }
    include $_SERVER['DOCUMENT_ROOT'] . '/common/inc/search' . $form . '.php';
}
function getForm($form)
{
    include $_SERVER['DOCUMENT_ROOT'] . '/common/inc/form-' . $form . '.php';
}
function getTout($tout)
{
    include $_SERVER['DOCUMENT_ROOT'] . '/common/inc/tout-' . $tout . '.php';
}
function getAboutSubNav()
{
    include $_SERVER['DOCUMENT_ROOT'] . '/pages/about/about-nav.php';
}
?>
