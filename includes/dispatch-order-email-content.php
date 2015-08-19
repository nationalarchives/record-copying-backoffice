<?php
$emailFormat = <<<TAG
\nOrder number: %s\n\nImages available until: 15/9/2015\n\nDear John Smith,\n\nThank you for using The National Archives' Record Copying service. Please keep this email as a record of your order.\n\nYour images are now available. If you have not already downloaded them please go to the download screen at:\n\nhttp://www.nationalarchives.gov.uk/filestore/default.asp?dir=recordcopyingd18-08-2015_t11-31-11-32-202329\n\nDescription of items ordered.\n\nDocuments scanned:\n\n1. HO 334/1983/48484\n
TAG;

$emailText = sprintf( $emailFormat, REFERENCE_NUMBER );

?>
<section class="row">
    <div class="col starts-at-full clr holding-box">
        <div class="heading-holding-banner">
            <h1><span><span>Prepare email to customer</span></span></h1>
        </div>
        <div class="breather">
            <form action="dispatch-order-email-review.php" method="post">
                <div class="field-row">
                    <label for="standard-text">Email to send to user (amend before sending)</label>
                    <textarea name="response" id="standard-text" cols="30" rows="20">
                        <?php echo $emailText; ?>
                    </textarea>
                </div>
                <h3 class="inline">Images linked to from email</h3>
                <ul class="emphasis-block">
                    <li><a href="#" class="uploaded-file">RC-5674563-16.png</a></li>
                    <li><a href="#" class="uploaded-file">RC-5674563-15.png</a></li>
                    <li><a href="#" class="uploaded-file">RC-5674563-17.png</a></li>
                    <li><a href="#" class="uploaded-file">RC-5674563-18.png</a></li>
                </ul>
                <div class="holds-columns-together abandon-buttons">
                    <div class="button-holder">
                        <input type="submit" value="Preview message before sending to user">
                    </div>
            </form>
        </div>
</section>