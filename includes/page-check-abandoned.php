<?php 
$reason = (isset($_GET['abandonment-reason'])) ? $_GET['abandonment-reason'] : 'No text provided.';

?>

<div class="holds-columns-together">
    <div class="emphasis-block">       
        <h2>Abandonment message provided to user</h2>
        <div class="message-preview">
            <div class="message-information">Page check abandoned on 25 January 2015 by Ian Gillenwater.</div>   
            <?php echo(nl2br($reason)); ?>
        </div>
    </div>
</div>