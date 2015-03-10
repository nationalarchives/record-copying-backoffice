<section class="row row-tabbed-content">
    <div class="col ends-at-one-third clr box" id="search-filters">
        <ul class="available-filters">
            <li>
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
                            <input id="overdue-page-check" type="checkbox">
                            <label for="overdue-page-check">
                                Overdue
                                <span class="filterNumber">(87)</span>
                            </label>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <h3><a href="#" class="filter-toggler expanded">Copying orders</a></h3>
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
                            <input id="overdue-copying-order" type="checkbox">
                            <label for="overdue-copying-order">
                                Overdue 
                                <span class="filterNumber">(68)</span>
                            </label>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <h3><a href="#" class="filter-toggler expanded">Target date</a></h3>
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
        </ul>
    </div>
    <div class="col ends-at-two-thirds clr box">
        <ul id="search-control-panel">
            <li>38 <span class="not-at-smaller">orders</span></li>
            <li id="sort-form">
                <form method="get">            
                    <fieldset>
                        <span class="not-at-smaller"> Sorted</span> by:
                        <select>
                            <option value="0">Target date - ascending</option>
                            <option value="0">Target date - descending</option>
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
                    $statuses = array('Pending page check', 'Page check in progress', 'Copy order pending', 'Order being copied', 'Copied and dispatched'); 
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