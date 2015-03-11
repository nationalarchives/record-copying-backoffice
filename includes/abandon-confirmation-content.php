<?php $response = (isset($_GET['response'])) ? $_GET['response'] : 'There was no response sent by the user'; ?>
<section class="row">
	<div class="col starts-at-full clr holding-box">
		<div class="heading-holding-banner">
			<h1><span><span>Abandon order - Preview message to send to user</span></span></h1>
		</div>
		<div class="breather abandon-content">
			<div class="emphasis-block">
				<div class="message-preview">
					<?php echo(nl2br($response)); ?>	
				</div>
			</div>
			<div class="holds-columns-together abandon-buttons">
				<form action="details.php">				
					<div class="button-holder">
						<a href="abandon.php" class="abandon-link">Cancel</a>
						<input type="hidden" name="abandonment-reason" value="<?php echo($response); ?>">
						<input type="hidden" name="status" value="page-check-abandoned">
						<input type="submit" value="Send to user">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</section>