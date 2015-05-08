<section class="row row-tabbed-content">
    <div class="col ends-at-one-third clr box" id="search-filters">
    <form ng-app>
        <ul class="available-filters">
            <li>
                <h3><a href="#" class="filter-toggler expanded">Filter by</a></h3>
                <div class="filter-togglee">
                    <ul>
                        <li>
                            <select ng-model="selection" ng-init="selection='all'">
                                <option value="all" label="All" class="">All</option>
                                <option value="pagechecks" label="Page checks">Page checks</option>
                                <option value="copyingorders" label="Copying orders">Copying orders</option>
                            </select>
                        </li>
                    </ul>
                </div>
            </li>
            <li ng-show="selection == 'all' || selection == 'pagechecks'">
                <h3><a href="#" class="filter-toggler expanded">Page checks</a></h3>
                <div class="filter-togglee">
                    <ul>
                        <li>
                            <input checked="checked" id="new-page-check" type="checkbox">
                            <label for="new-page-check">
                                New 
                                <span class="filterNumber">(42)</span>
                            </label>
                        </li>
                        <li>
                            <input id="requests-page-check" type="checkbox">
                            <label for="requests-page-check">
                                Requests received 
                                <span class="filterNumber">(12)</span>
                            </label>
                        </li>
                        <li>
                            <input id="inprogress-page-check" type="checkbox">
                            <label for="inprogress-page-check">
                                In progress 
                                <span class="filterNumber">(17)</span>
                            </label>
                        </li>
                        <li>
                            <input id="completed-page-check" type="checkbox">
                            <label for="completed-page-check">
                                Completed 
                                <span class="filterNumber">(51)</span>
                            </label>
                        </li>
                        <li>
                            <input id="onhold-page-check" type="checkbox">
                            <label for="onhold-page-check">
                                On hold 
                                <span class="filterNumber">(2)</span>
                            </label>
                        </li>
                        <li>
                            <input id="expired-page-check" type="checkbox">
                            <label for="expired-page-check">
                                Expired 
                                <span class="filterNumber">(6)</span>
                            </label>
                        </li>
                        <li>
                            <input id="abandoned-page-check" type="checkbox">
                            <label for="abandoned-page-check">
                                Abandonded 
                                <span class="filterNumber">(29)</span>
                            </label>
                        </li>
                        <li>
                            <input id="overdue-page-check" type="checkbox">
                            <label for="overdue-page-check">
                                Overdue
                                <span class="filterNumber">(25)</span>
                            </label>
                        </li>
                    </ul>
                </div>
            </li>
            <li ng-show="selection == 'all' || selection == 'copyingorders'">
                <h3><a href="#" class="filter-toggler expanded">Record copying orders</a></h3>
                <div class="filter-togglee">
                    <ul>
                        <li>
                            <input id="new-copying-order" type="checkbox">
                            <label for="new-copying-order">
                                New 
                                <span class="filterNumber">(84)</span>
                            </label>
                        </li>
                        <li>
                            <input id="orders-copying-order" type="checkbox">
                            <label for="orders-copying-order">
                                Orders received 
                                <span class="filterNumber">(16)</span>
                            </label>
                        </li>
                        <li>
                            <input id="inprogress-copying-order" type="checkbox">
                            <label for="inprogress-copying-order">
                                In progress 
                                <span class="filterNumber">(49)</span>
                            </label>
                        </li>
                        <li>
                            <input id="completed-copying-order" type="checkbox">
                            <label for="completed-copying-order">
                                Completed & dispatched
                                <span class="filterNumber">(74)</span>
                            </label>
                        </li>
                        <li>
                            <input id="overdue-copying-order" type="checkbox">
                            <label for="overdue-copying-order">
                                Overdue 
                                <span class="filterNumber">(18)</span>
                            </label>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <h3><a href="#" class="filter-toggler expanded">Date due</a></h3>
                <div class="filter-togglee">
                    <ul>
                        <li>
                            <label for="week-selection">From:</label>
                            <select name="week-selection" id="week-selection">
                                <option value="">1 February 2015</option>
                            </select>
                        </li>                                                
                        <li>
                            <label for="week-selection">To:</label>
                            <select name="week-selection" id="week-selection">
                                <option value="">1 February 2015</option>
                            </select>
                        </li> 
                    </ul>
                </div>
            </li>
            <li>
                <h3><a href="#" class="filter-toggler expanded">Completed date</a></h3>
                <div class="filter-togglee">
                    <ul>
                        <li>
                            <div class="search-box">
                                <input type="date" placeholder="dd/mm/yyyy" class="">
                                <input type="submit" value="Search">
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <h3><a href="#" class="filter-toggler expanded">Start new search</a></h3>
                <div class="filter-togglee">
                    <ul>
                        <li>
                            <div class="search-box">
                                <input type="text" placeholder="Search..." class="">
                                <input type="submit" value="Search">
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </form>
    </div>
    <div class="col ends-at-two-thirds clr box">
        <ul id="search-control-panel">
            <li>38 <span class="not-at-smaller">orders</span></li>
            <li id="sort-form">
                <form method="get">            
                    <fieldset>
                        <span class="not-at-smaller"> Sorted</span> by:
                        <select>
                            <option value="0">Date due - ascending</option>
                            <option value="0">Date due - descending</option>
                        </select>
                        <input class="discoverySecondaryCallToActionLink" type="submit" value="Sort" id="sort" title="Sort search results">
                    </fieldset>
                </form>    </li>
                <li id="printable-view">
                    <a title="print" href="multi-print.php">Print all</a>
                    <a href="multi-print.php" id="select-and-print">&nbsp</a>
                </li>
            </ul>
            <ul id="search-results">
                <?php for ($i=0; $i < 38; $i++) { 
                    $rand = "RC " . rand(1000000, 9000000) . " 15";
                    $statuses = array('Pending page check', 'Page check in progress', 'Copy order pending', 'Record copying order in progress', 'Record copying order complete and dispatched'); 
                    $randomStatus = $statuses[array_rand($statuses)];
                    printf("<li class='order-item'><h3><a href='details.php'>%s</a></h3>", $rand);
                    printf("<p class='smaller'><strong>Status:</strong> %s</p>", $randomStatus);
                    printf("<span class='creator-type'><a href='#' class='print-link' id='%d'>Add to print queue</a></span>", $i);
                    print("</li>");
                }
                ?>
            </ul>
        </div>
    </div>
</section>