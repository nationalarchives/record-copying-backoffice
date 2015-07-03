<?php

if(isset($_GET['results'])) {
    $results = $_GET['results'];
}
else {
    $results = 'Search...';
}
?>
<section class="row new-page">
    <div class="col starts-at-full clr holding-box">
        <div class="heading-holding-banner">
	  <h1><span><span>New record copying order</span></span></h1>
        </div>
        <div class="breather">
            <h2 class="visually-hidden">Search</h2>
            <div class="holds-columns-together">
                <form method="get">
                    <fieldset>
                        <legend>Search type</legend>
                        <div class="form-heading">
                            <span><span>Find document by reference number</span></span>
                        </div>
                        <div class="breather">
                            <div class="field-row">
                                <input type="text" placeholder="<?php echo $results; ?>" name="results"/>
                                <input type="submit" value="Search">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <section class="row">
            <?php

            switch(true) {
                case $results != 'Search...':
                    require_once('create-record-copying-results.php');
                    break;
                default:
                    echo '';
            }
            ?>
        </section>


        </div>
</section>

