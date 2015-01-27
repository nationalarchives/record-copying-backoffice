<section class="row">
    <div class="col starts-at-full clr holding-box">
        <div class="heading-holding-banner">
            <h1><span><span>Dashboard</span></span></h1>
        </div>
        <div class="breather">

            <h2 class="inline">Page count dashboard</h2>

            <form method="get">
                <label class="inline" for="week-selection">Show week commencing</label>
                <select name="week-selection" id="week-selection">
                    <option value="">Monday 19th January 2015</option>
                    <option value="" selected>Monday 26th January 2015</option>
                    <option value="">Monday 2nd February 2015</option>
                </select>
            </form>
            <?php require_once('includes/page-count-dashboard.php'); ?>
        </div>
    </div>
</section>
