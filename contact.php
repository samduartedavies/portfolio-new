<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/common/php/config.php'; ?>

<?php getHeader(
    'Contact me',
    'I am currently available for freelance work! If you have a project you would like to get in contact with me about or simply just want to say hello - use the contact form below or email me at:
contact@samduartedavies.com.',
    ''
); ?>

<section class="section section--banner">
  <div class="container">
    <h1>Contact</h1>
  </div>
</section>
<section class="section section--centered">
  <div class="container container--narrow animate--fadein-up" data-emergence="hidden">
    <p><br/>I am currently available for freelance work! If you have a project you would like to get in contact with me about or simply just want to say hello - use the contact form below or email me at:<br/> <a href="mailto:contact@samduartedavies.com?subject=Website Portfolio Enquiry">contact@samduartedavies.com</a>.</p>
  </div>
</section>
<section class="section section--centered">
  <div class="container container--narrow">
    <form action="" enctype="multipart/form-data" class="form form-ajax-send">
      <input type="hidden" name="action" value="submit" class="animate--fadein-up" data-emergence="hidden">
      <input name="name" type="text" placeholder="Name" required size="30" class="animate--fadein-up delay--02" data-emergence="hidden"/>
      <input name="email" type="text" placeholder="Email" required size="30" class="input-email animate--fadein-up delay--04" data-emergence="hidden"/>
      <textarea name="message" placeholder="How can I help you?" columns="7" rows="6" required class="animate--fadein-up delay--06" data-emergence="hidden"></textarea>
      <div class="form-notifications text-red"></div>
      <input type="submit" value="Send" class="btn btn--solid animate--fadein-up" data-emergence="hidden"/>
    </form>
  </div>
</section>


<?php getFooter(); ?>
