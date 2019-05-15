<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/common/php/config.php'; ?>

<?php getHeader(
    '404 - Page not found',
    "Unfortunately you are looking for a page that doesn't exist.",
    ''
); ?>

<section class="section section--banner">
  <div class="container">
    <h1>404</h1>
  </div>
</section>
<section class="section section--centered">
  <div class="container container--narrow animate--fadein-up" data-emergence="hidden">
    <p><br/>Unfortunately you are looking for a page that doesn't exist. No worries, just click this link to go back to the homepage.</p>
    <a class="btn btn--solid" href="/">Homepage</a>
  </div>
</section>


<?php getFooter(); ?>
