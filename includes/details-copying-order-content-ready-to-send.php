<section class="row copy-order-details">
        <div class="col starts-at-full clr holding-box">
            <div class="heading-holding-banner">
                <h1>
                <span>
                    <span>Order details</span>
                </span>
                </h1>
            </div>
            <div class="breather avoid-breaking">
                <h2 class="inline">Order reference number: <?php echo(REFERENCE_NUMBER);?></h2>
                <div class="dashboard-component">

                    <div class="responsive-table">
                        <table>
                            <tbody>
                            <tr>
                                <th scope="col">
                                    Mono
                                </th>
                                <th scope="col">
                                    Colour
                                </th>
                                <th scope="col">
                                    Digital
                                </th>
                                <th scope="col">
                                    Certified
                                </th>
                                <th scope="col">
                                    Entire<br />document
                                </th>
                                <th scope="col">
                                    A3
                                </th>
                                <th scope="col">
                                    A3+
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <img src="http://www.nationalarchives.gov.uk/wp-content/themes/tna/images/records/icon-availability-none.png">
                                </td>
                                <td>
                                    <img src="http://www.nationalarchives.gov.uk/wp-content/themes/tna/images/records/icon-availability-all.png">
                                </td>
                                <td>
                                    <img src="http://www.nationalarchives.gov.uk/wp-content/themes/tna/images/records/icon-availability-none.png">
                                </td>
                                <td>
                                    <img src="http://www.nationalarchives.gov.uk/wp-content/themes/tna/images/records/icon-availability-none.png">
                                </td>
                                <td>
                                    <img src="http://www.nationalarchives.gov.uk/wp-content/themes/tna/images/records/icon-availability-all.png">
                                </td>
                                <td>1</td>
                                <td>0</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
                <div class="dashboard-component">
                    <div class="responsive-table">
                        <table>
                            <caption class="visually-hidden">Document and request details</caption>
                            <tbody>
                            <tr>
                                <th scope="row">Status</th>
                                <td>Record copying order completed - ready to send to customer</td>
                            </tr>
                            <tr>
                                <th scope="row">Price</th>
                                <td>&#163;25.00</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="dashboard-component">
                    <h3 class="inline">Document reference: <a href="http://localhost:81/details/r/C12297827" target="_blank">HO 334/1983/48484</a></h3>
                    <div class="responsive-table">
                        <table>
                            <tbody>
                            <tr>
                                <th scope="row">Document date</th>
                                <td>1980 Mar 21</td>
                            </tr>
                            <tr>
                                <th scope="row">Discovery description</th>
                                <td>Naturalisation Certificate: Ho Shu-hing known as Ho Wai-ping known as Lily Ho known as Ho Yuk-jun. From China. Resident in Hong Kong. Certificate O48484 issued 21 March 1980.</td>
                            </tr>
                            <tr>
                                <th scope="row">Document location</th>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <th scope="row">Temporary location</th>
                                <td>&nbsp;
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Customer instructions</th>
                                <td>&nbsp;

                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Staff instructions</th>
                                <td>&nbsp;
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="dashboard-component">
                    <h3 class="inline">Delivery type: Digital delivery</h3>
                    <div class="responsive-table">
                        <table>
                            <tbody>
                            <tr>
                                <th scope="row">Customer name</th>
                                <td>
                                    Dr John Smith
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Customer email</th>
                                <td>
                                    <a href="mailto:test.recordcopying@gmail.com?Subject=Page check - RC1000001" target="_top">test.recordcopying@gmail.com</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Address</th>
                                <td>
                                    23 1st Cross Street , KW85DU , United Kingdom
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="holds-columns-together">
                    <div class="button-holder">

                    <form action="dispatch-order-to-customer.php" method="post"><input id="Id" name="Id" type="hidden" value="RC1000001" />
                        <a href="suspended-order-history.php" class="abandon-link">History</a>
                        <input type="submit" value="Send to customer - Digital delivery">
                    </form>
                    </div>
                </div>
            </div>


    </div>

</section>

