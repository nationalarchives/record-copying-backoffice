<?php

$emailText = (isset($_POST['response'])) ? $_POST['response'] : 'No text provided.'

?>
<!DOCTYPE html>
<html lang="en-gb" class="no-js">
<?php require_once('includes/head.php'); ?>
<body class="reports">
<?php require_once('includes/header.php'); ?>
<main id="page_wrap" class="container" role="main">
    <?php require_once('includes/dispatch-order-email-review-breadcrumb.php'); ?>
    <?php require_once('includes/dispatch-order-email-review-content.php'); ?>
</main>
<?php require_once('includes/footer.php'); ?>
<?php require_once('includes/footer-scripts.php'); ?>
</body>
</html>