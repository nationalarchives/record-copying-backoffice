<section class="row new-page">
    <div class="col starts-at-full clr holding-box">
        <div class="heading-holding-banner">
	  <h1><span><span>Refund</span></span></h1>
        </div>
        <div class="breather">
            <section>
                <h3>Order reference number: RC 5674563 15</h3>
                <table>
                    <tbody>
                    <tr>
                        <th>Date</th>
                        <td>01/03/2015</td>
                    </tr>
                    <tr>
                        <th>Transaction number</th>
                        <td>R/15/00172073R</td>
                    </tr>
                    <tr>
                        <th>Order amount</th>
                        <td>14.20</td>
                    </tr>
                    <tr>
                        <th>Authorised amount</th>
                        <td>14.20</td>
                    </tr>
                    <tr>
                        <th>Captured amount</th>
                        <td>14.20</td>
                    </tr>
                    <tr>
                        <th>Refunded amount</th>
                        <td>
                            <?php
                            //START OF Managing statuses
                            if(isset($_GET['status'])) {
                                $status = $_GET['status'];
                            } else {
                                $status = 'new';
                            }
                            switch($status) {
                                case 'new' :
                                    echo '0.00';
                                    break;
                                case 'pending-approval' :
                                    echo '0.00';
                                    break;
                                case 'pending' :
                                    echo '0.00';
                                    break;
                                case 'approved' :
                                    echo '14.20';
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Card type</th>
                        <td>Visa</td>
                    </tr>
                    </tbody>
                </table>
                <div class="holds-columns-together new-page">
                    <?php
                    switch($status) {
                        case 'new' : ?>
                            <form method="get">
                                <fieldset>
                                    <div class="breather">
                                        <h3>Raise refund</h3>
                                        <div class="grid-within-grid-two-item staff-comments">
                                            <div>
                                                <div class="field-row">
                                                    <label for="refund-amount">Refund amount</label>
                                                    <input id="refund-amount" type="text" value="Refund amount">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="field-row">
                                                    <label for="comments">Comments</label>
                                                    <textarea id="comments" rows="5">Refund comments</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="button-holder">
                                    <input type="hidden" name="status" value="pending-approval">
                                    <a href="details.php" class="abandon-link">Cancel</a>
                                    <input type="submit" value="Refund now">
                                </div>
                            </form>
                    <?php  break;
                        case 'pending-approval' : ?>
                            <form method="get">
                                <fieldset>
                                    <div class="breather">
                                        <h3>Refund pending</h3>
                                        <p>Refund was raised by *** on 03/03/2015 pending approval.</p>
                                        <div class="grid-within-grid-two-item staff-comments">
                                            <div>
                                                <div class="field-row">
                                                    <label for="refund-amount">Refund amount raised</label>
                                                    <input id="refund-amount" type="text" value="14.20" disabled>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="field-row">
                                                    <label for="comments">Comments</label>
                                                    <textarea id="comments" rows="5" disabled>Document error</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="button-holder">
                                    <input type="hidden" name="status" value="new">
                                    <input type="submit" value="Cancel refund">
                                </div>
                            </form>
                    <?php  break;
                        case 'pending' : ?>
                            <form method="get">
                                <fieldset>
                                    <div class="breather">
                                        <h3>Refund pending</h3>
                                        <p>Refund was raised by *** on 03/03/2015. Do you want to approve this refund?</p>
                                        <div class="grid-within-grid-two-item staff-comments">
                                            <div>
                                                <div class="field-row">
                                                    <label for="refund-amount">Refund amount raised</label>
                                                    <input id="refund-amount" type="text" value="14.20" disabled>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="field-row">
                                                    <label for="comments">Comments</label>
                                                    <textarea id="comments" rows="5" disabled>Document error</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="button-holder">
                                    <input type="hidden" name="status" value="approved">
                                    <input type="submit" value="Cancel refund">
                                    <input type="submit" value="Approve refund">
                                </div>
                            </form>
                    <?php break;
                        case 'approved' : ?>
                            <form method="get">
                                <fieldset>
                                    <div class="breather">
                                        <h3>Refund approved</h3>
                                        <p>Refund was raised by *** on 03/03/2015 and approved by *** on 04/03/2015.</p>
                                        <div class="grid-within-grid-two-item staff-comments">
                                            <div>
                                                <div class="field-row">
                                                    <label for="refund-amount">Approved refund</label>
                                                    <input id="refund-amount" type="text" value="14.20" disabled>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="field-row">
                                                    <label for="comments">Comments</label>
                                                    <textarea id="comments" rows="5" disabled>Document error</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                    <?php }
                    ?>
                </div>
            </section>
        </div>

        </div>
</section>

