<section class="row">
    <div class="col starts-at-full clr holding-box">
        <div class="heading-holding-banner">
            <h1><span><span>Page checks due <?php echoDate(); ?></span></span></h1>
        </div>
        <div class="breather">
            <p>Page checks report shows all page checks for completion on 3/02/2015 </p>
            <div class="dashboard-component">
                <div class="responsive-table">
                    <table class="sortable">
                        <caption class="visually-hidden">Page check dashboard</caption>
                        <tr>
                            <th scope="col" data-longform="Page check reference" data-shortform="Page Ct. Ref."><span>Page check reference</span>
                            </th>
                            <th scope="col" data-longform="Status" data-shortform="Status"><span>Status</span></th>
                            <th scope="col" data-longform="Document reference" data-shortform="Doc. Ref"><span>Document reference</span>
                            </th>
                            <th scope="col" data-longform="Target date" data-shortform="Target dt.">
                                <span>Target date</span></th>
                            <th scope="col" data-longform="Amended date" data-shortform="Amended dt.">
                                <span>Amended date</span></th>
                            <th scope="col" data-longform="Customer" data-shortform="Customer"><span>Customer</span>
                            </th>
                        </tr>
                        <tr>
                            <td><a href="page-check.php">RC000051</a></td>
                            <td>Revised</td>
                            <td>ZPER 2/5</td>
                            <td>28/12/2015</td>
                            <td>01/01/2016</td>
                            <td><a href="">F. Sinatra</a></td>
                        </tr>
                        <tr>
                            <td><a href="">RC000052</a></td>
                            <td>Waiting</td>
                            <td>WO 1/1</td>
                            <td>01/01/ 2016</td>
                            <td></td>
                            <td><a href="">J Henderson</a></td>
                        </tr>
                        <tr>
                            <td><a href="">RC000053</a></td>
                            <td>In progress <span class="staff-member">JNH</span></td>
                            <td>FO 3/2</td>
                            <td>01/01/2016</td>
                            <td></td>
                            <td><a href="">M. Brando</a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="grid-within-grid-two-item">
                <div class="definitions">
                    <span class="key">Table key</span>
                    <dl>
                        <dt>Waiting</dt>
                        <dd>received from customer and ready to be counted</dd>
                        <dt>In progress</dt>
                        <dd>Page check being carried out, locked to indicated user</dd>
                        <dt>Revised</dt>
                        <dd>Page check has been altered but not sent to customer</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</section>
