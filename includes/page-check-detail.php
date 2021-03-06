<?php

//START OF Managing statuses
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
    case 'page-check-abandoned':
        $statusText = "Page check abandoned";
        break;
    default:
        $statusText = "No status passed in GET array";
}
// END OF managing statues

// START OF managing target date

$targetDate = filter_input(INPUT_GET, 'target-date');

// END OF managing target date

?>
<section class="row new-page">
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
                    <td><?php echo(REFERENCE_NUMBER); ?></td>
                </tr>
                <tr>
                    <th scope="row">Status</th>
                    <td><?php echo($statusText) ?></td>
                </tr>
                <tr>
                    <th class="row">Target date</th>
                    <td><?php displayTargetDateOrLink($targetDate); ?></td>
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
        </div>
    </div>
</section>