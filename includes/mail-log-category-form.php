<div class="float-right">
    <form action="mail-log.php" method="get">
            <label for="email-category">Category: </label>
            <select id="email-category" name="email-category">
                <option value="No category" <?php if ($_GET['email-category'] == 'No category') { ?>selected="true"<?php }; ?>>No category</option>
                <option value="Enquiry" label="Enquiry" <?php if ($_GET['email-category'] == 'Enquiry') { ?>selected="true"<?php }; ?>>Enquiry</option>
                <option value="Complaint" label="Complaint" <?php if ($_GET['email-category'] == 'Complaint') { ?>selected="true"<?php }; ?>>Complaint</option>
            </select>
            <input type="submit" class="submit-category-form"/>
    </form>
</div>