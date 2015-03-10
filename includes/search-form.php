<h2 class="visually-hidden">Search</h2>
<div class="holds-columns-together" ng-app="recordCopyingBackOffice">
    <form ng-controller="searchForms" action="generic-aggregate-options-page.php">
        <fieldset>
            <legend>Search type</legend>
            <div class="form-heading">
                <span><span>Search</span></span>
            </div>
            <div class="breather">
                    <div class="field-row">
                        <label for="search-types" class="visually-hidden">Select a search option: </label>
                        <select ng-model="data.selectedOption" ng-options="item for item in searchOptions">
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