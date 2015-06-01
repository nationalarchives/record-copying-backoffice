<div class="float-right">
			<?php $emailid++; ?>
		<form action="mail-log.php" method="get">
            <label for="email-category-<?php echo $emailid; ?>">Category: </label>
            <select class="email-category" name="email-category-<?php echo $emailid; ?>">
                <option value="General Enquiry" label="General Enquiry" <?php if ($_GET['email-category-'.$emailid] == 'General Enquiry') { ?>selected="true"<?php }; ?>>General Enquiry</option>
                <option value="Complaint" label="Complaint" <?php if ($_GET['email-category-'.$emailid] == 'Complaint') { ?>selected="true"<?php }; ?>>Complaint</option>
            </select>
            <input type="submit" class="submit-category-form"/>
        </form>
</div>