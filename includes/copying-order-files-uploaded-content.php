<section class="row">
    <div class="col starts-at-full clr holding-box">
        <div class="heading-holding-banner">
            <h1><span><span>Digital delivery</span></span></h1>
        </div>
        <div class="breather">
            <div class="dashboard-component">
                <h3 class="inline">Review uploaded digital images</h3>

                <p>3 files have been uploaded to send to the customer. </p>

                <ul id="uploaded-files">
                    <?php printLinksToUploadedfiles(); ?>
                </ul>

                <p>Use the form below to add more digital images or <a href="dispatch-order-to-customer.php">start
                        again</a>.</p>
                <?php require_once 'file-upload-form.php'; ?>
                <div class="button-holder">
                    <a href="dispatch-order-email.php" class="discoveryPrimaryCallToActionLink">Prepare email</a>
                </div>
            </div>
        </div>
    </div>
</section>
