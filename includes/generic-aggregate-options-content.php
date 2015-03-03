<section class="row row-tabbed-content">
    <div class="col ends-at-one-third clr box" id="search-filters">
        <ul class="available-filters">
            <li>
                <h3><a href="#" class="filter-toggler expanded">Status</a></h3>
                <div class="filter-togglee">
                    <ul>
                        <li>
                            <input type="checkbox">
                            <label>
                                Pending page check
                                <span class="filterNumber">(42)</span>
                            </label>
                        </li>
                        <li>
                            <input type="checkbox">
                            <label>
                                Page check in progress
                                <span class="filterNumber">(87)</span>
                            </label>
                        </li>
                        <li>
                            <input type="checkbox">
                            <label>
                                Copying order pending
                                <span class="filterNumber">(26)</span>
                            </label>
                        </li>
                        <li>
                            <input type="checkbox">
                            <label>
                                Order being copied
                                <span class="filterNumber">(88)</span>
                            </label>
                        </li>
                        <li>
                            <input type="checkbox">
                            <label>
                                Complete and dispatched
                                <span class="filterNumber">(845)</span>
                            </label>
                        </li>
                    </ul><input name="Refine dates" value="Refine" type="submit" alt="Refine dates" title="Refine dates">
                </div>
            </li>
            <li>
                <h3><a href="#" class="filter-toggler expanded">Due date</a></h3>
                <div class="filter-togglee">
                    <ul>
                        <li>
                            <label class="inline" for="week-selection">Week commencing: </label>
                            <select name="week-selection" id="week-selection">
                                <option value="">Monday 19th January 2015</option>
                                <option value="" selected="">Monday 26th January 2015</option>
                                <option value="">Monday 2nd February 2015</option>
                            </select>
                        </li>
                        <li></li>
                    </ul>

                    <input name="Refine dates" value="Refine" type="submit" alt="Refine dates" title="Refine dates">
                </div>
            </li>
        </ul>
    </div>
    <div class="col ends-at-two-thirds clr box">
        <ul id="search-control-panel">
            <li>290 <span class="not-at-smaller">orders</span></li>
            <li id="sort-form">
                <form method="get">            
                    <fieldset>
                    <span class="not-at-smaller"> Sorted</span> by:
                    <select>
                        <option value="0">Due date - ascending</option>
                        <option value="0">Due date - descending</option>
                    </select>
                    <input class="discoverySecondaryCallToActionLink" type="submit" value="Sort" id="sort" title="Sort search results">
                </fieldset>
            </form>    </li>
            <li id="printable-view">
                <a title="print">Print these results</a>
            </li>
        </ul>
    </div>
</div>
</section>