<h2 class="visually-hidden">Search</h2>
<div class="holds-columns-together" ng-app="recordCopyingBackOffice">
    <form ng-controller="searchForms" action="generic-aggregate-options-page.php">
        <fieldset>
            <legend>Search type</legend>
            <div class="form-heading">
                <span><span>Find an order</span></span>
            </div>
            <div class="breather">
                    <div class="field-row">
                        <label for="search-types" class="visually-hidden">Select a search option: </label>
                        <select>
                            <option value="0" class="">Search all</option>
                            <option value="1" label="Search page checks">Search page checks</option>
                            <option value="2" label="Search copying">Search record copying</option>
                        </select>
                        <select ng-model="data.selectedOption" ng-init="data.selectedOption='Order reference number'" ng-options="item for item in searchOptions">
                            <option value="">Select a search option</option>
                        </select>
                        <input type="text" placeholder="Search.." ng-show="!isDateRangeSearch(data.selectedOption) && !isDateSearch(data.selectedOption) && !!data.selectedOption"/>
                        <input type="date" ng-show="isDateRangeSearch(data.selectedOption)">
                        <input type="date" ng-show="isDateSearch(data.selectedOption)">
                        <input type="date" ng-show="isDateRangeSearch(data.selectedOption)">
                        <input type="submit" value="Search">
                    </div>
            </div>
        </fieldset>
    </form>
</div>