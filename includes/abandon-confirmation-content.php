<section class="row">
	<div class="col starts-at-full clr holding-box">
		<div class="heading-holding-banner">
			<h1><span><span>Abandon order - Preview message to send to user</span></span></h1>
		</div>
		<div class="breather abandon-content">
			<?php 
				$response = (isset($_GET['response'])) ? $_GET['response'] : 'There was no response sent by the user'; 

				echo(nl2br($response));
			?>
			<div class="holds-columns-together abandon-buttons">
				<div class="button-holder">
					<a href="abandon.php" class="abandon-link">Cancel</a>
					<input type="submit" value="Send to user">
				</div>
			</div>
		</div>
	</div>
</div>
</section>