<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/php/functions.php'; ?>

<?php getHeader('Bellhouse Joseph - Lorem Ipsum', 'Lorm ipsum', 'page-home'); ?>

<?php
echo $_POST['submit'];
$action = $_REQUEST['action'];
if ($action == "") { ?>
  <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
      Your name:<br>
    <input name="name" type="text" value="" size="30"/><br>
      Your email:<br>
    <input name="email" type="text" value="" size="30"/><br>
      Your message:<br>
    <textarea name="message" rows="7" cols="30"></textarea><br>
    <input type="submit" value="Send email"/>
  </form>
  <?php } else {$name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];
    if ($name == "" || $email == "" || $message == "") {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
    } else {
        $from = "From: $name<$email>\r\nReturn-path: $email";
        $subject = "Message sent using your contact form";
        mail("samduarte-davies@hotmail.com", $subject, $message, $from);
        echo "Email sent!";
    }}
?>


<?php getFooter(); ?>
