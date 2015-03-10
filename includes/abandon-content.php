<section class="row" ng-app="recordCopyingBackOffice">
	<div class="col starts-at-full clr holding-box" ng-controller="suspendOrder">
		<div class="heading-holding-banner">
			<h1><span><span>Abandon order</span></span></h1>
		</div>
		<div class="breather">
			<form method="get" action="">
				<div class="grid-within-grid-two-item clr">
					<div>
						<div class="field-row">  
							<label for="reason">Reason for suspension</label>
							<select id="reason" ng-model="data.reason">
								<option value="">Select a reason</option>
								<option value="insufficient">In sufficient information provided by user</option>
								<option value="incorrect">Incorrect information provided by user</option>
							</select>
						</div>  
						<div class="field-row">
							<label for="standard-text">Standard text (amend as needed before submitting)</label>
							<textarea name="response" id="standard-text" cols="30" rows="10">{{ data.reasonText[data.reason] }}</textarea>
						</div> 	
					</div>
				</div>
				<div class="holds-columns-together">
					<div class="button-holder">
						<input type="submit" value="Update">
						<input type="submit" value="Update and send to user">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</section>