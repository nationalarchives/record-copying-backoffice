<?php 
    if(isset($_GET['status'])) {
        $status = $_GET['status'];
    } else {
        $status = 'pending';
    }
    
    switch($status) {
        case 'pending':
            $statusText = 'Page check pending';
        break;
        case 'in-progress':
            $statusText = "Page check in progress";
        break;
        case 'page-check-completed':
            $statusText = "Page check completed";
        break;
        default:
            $statusText = "No status passed in GET array";
    }
?>

<section class="row">
    <div class="col starts-at-full clr holding-box">
        <div class="heading-holding-banner">
            <h1><span><span>Order details</span></span></h1>
        </div>
        <div class="breather">
            <h2 class="inline">Document and request details</h2>
            <table class="page-check">
                <caption class="visually-hidden">Document and request details</caption>
                <tr>
                    <th scope="row">Order reference number</th>
                    <td>RC 5674563 15</td>
                </tr>
                <tr>
                    <th scope="row">Status</th>
                    <td><?php echo($statusText) ?></td>
                </tr>
                <tr>
                    <th class="row">Target date</th>
                    <td>31 March 2014</td>
                </tr>
                <tr>
                    <th scope="row">Document reference</th>
                    <td><a href="">WO 166/500</a></td>
                </tr>
                <tr>
                    <th scope="row">Document location</th>
                    <td>4 N 1200</td>
                </tr>
                <tr>
                    <th scope="row">Document date</th>
                    <td>1941 Feb.-Oct</td>
                </tr>
                <tr>
                    <th scope="row">Description</th>
                    <td>DIVISIONS: 42ND. DIVISION: Reconnaisance Battalion</td>
                </tr>
                <tr>
                    <th scope="row">Customer instructions</th>
                    <td>Looking for information related to John Smith from the Reconnaissance Battalion between the
                        dates March and April 1941.
                    </td>
                </tr>
                <tr>
                    <th scope="row">Customer details</th>
                    <td>Leslie Harper, 41 Park Road, Richmond, TW1 8UX, United Kingdom, 020 8893 0000, <a href="">leslie@cmrnharpr.net</a>
                    </td>
                </tr>
            </table>
            <?php 
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
