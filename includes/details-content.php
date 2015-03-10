<section class="row">
            <?php 
                require_once('includes/page-check-detail.php');

                switch($status) {
                    case 'pending' : 
                        require_once('change-to-in-progress.php');
                        break;
                    case 'in-progress' : 
                        require_once('page-check-form.php');
                        break;
                    case 'page-check-completed' :
                        require_once('page-check-form-completed.php');
                }
            ?>
        </div>
    </div>
</section>
