<?php

require_once("inc/config.php");

$pageTitle = "Thank you for your order!";
$section = "none";
include(ROOT_PATH . "inc/header.php"); ?>

  <div class ="section page">

    <div class="wrapper">

      <h1>Thank You!</h1>
      <p>Thank you for your payment. Your transaction has been completed, and a receipt for your purchase has been emailed to you. You may log into your account at <a href="http://www.paypal.com/us">www.paypal.com/us</a> to view details of this transaction.</p>
    </div>
      <p>Need another shirt already? Visit the <a href="<?php echo BASE_URL; ?>shirts.php">shirts page.</a></p>
  </div>

<?php include(ROOT_PATH . "inc/footer.php"); ?>