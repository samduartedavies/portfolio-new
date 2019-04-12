<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/php/functions.php'; ?>

<?php getHeader('Bellhouse Joseph - Lorem Ipsum', 'Lorm ipsum', ''); ?>

<section class="section section--banner">
  <div class="container">
    <h1>Contact</h1>
  </div>
</section>
<section class="section section--centered">
  <div class="container container--narrow">
    <p><br/>I am currently available for freelance work - so if you have a project you would like to get in contact with me about or simply just want to say hello; use the contact form below or email me at: <a href="mailto:samduarte-davies@hotmail.com?subject=Website Portfolio Enquiry">samduarte-davies@hotmail.com</a>.</p>
  </div>
</section>
<section class="section section--centered">
  <div class="container container--narrow">
    <form action="" enctype="multipart/form-data" class="form form-ajax-send">
      <input type="hidden" name="action" value="submit">
      <input name="name" type="text" placeholder="Name" required size="30"/><br>
      <input name="email" type="text" placeholder="Email" required size="30"/><br>
      <textarea name="message" placeholder="How can I help you?" columns="7" rows="6" required></textarea><br>
      <div class="form-notifications text-red"></div>
      <input type="submit" value="Send" class="btn btn--solid"/>
    </form>
  </div>
</section>


<?php getFooter(); ?>
