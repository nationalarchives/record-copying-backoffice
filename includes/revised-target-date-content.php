<section class="row new-page">
    <div class="col starts-at-full clr holding-box">
        <div class="heading-holding-banner">
	  <h1><span><span>Revise target date for <?php echo REFERENCE_NUMBER; ?></span></span></h1>
        </div>
        <div class="breather">
	  <p>The current target date for <?php echo REFERENCE_NUMBER; ?> is 24/3/2014</p>

	  <form action="details.php" method="get">
	      <div class="field-row">
		<label for="reason-for-change">Reason for target date change</label>
		<textarea id="reason-for-change" cols="30" rows="10"></textarea>
	      </div>
	      <div class="field-row">
		<input type="date" placeholder="DD/MM/YY" required="required" name="target-date"/>
		<input type="hidden" value="in-progress" name="status"/>
	      </div>
	      <div class="field-row">
		<input type="submit"/>
	      </div>
	  </form>
        </div>
</section>

