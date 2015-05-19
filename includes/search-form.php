<h2 class="visually-hidden">Search</h2>
<div class="holds-columns-together" ng-app="recordCopyingBackOffice">
    <form ng-controller="searchForms" class="ng-cloak" action="generic-aggregate-options-page.php">
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
		<select ng-model="data.selectedOption" ng-init="data.selectedOption='Order reference number'"
		        ng-options="item for item in searchOptions">
		    <option value="">Select a search option</option>
		</select>
		<input type="text" placeholder="Search.."
		       ng-show="!isDateRangeSearch(data.selectedOption) && !isDateSearch(data.selectedOption) && !!data.selectedOption"/>
		<input type="date" ng-show="isDateRangeSearch(data.selectedOption)">
		<input type="date" ng-show="isDateSearch(data.selectedOption)">
		<input type="date" ng-show="isDateRangeSearch(data.selectedOption)">
		<input type="submit" value="Search">
	      </div>
	  </div>
        </fieldset>
    </form>
    <div class="non-js-search">
        <div class="box">

	  <form action="generic-aggregate-options.php">

	      <fieldset>
		<div class="form-heading">
		    <span><span>Find an order</span></span>
		</div>
		<div class="breather">
		    <div class="field-row">
		        <label for="search-order-reference-number">Order reference number</label>
		        <input id="search-order-reference-number" type="text" placeholder="Search..">
		        <input type="submit" value="Search">
		    </div>
		    <div class="field-row">
		        <label for="search-customers-name">Customer's name</label>
		        <input id="search-customers-name" type="text" placeholder="Search..">
		        <input type="submit" value="Search">
		    </div>
		    <div class="field-row">
		        <label for="search-customers-postcode">Customer's postcode</label>
		        <input id="search-customers-postcode" type="text" placeholder="Search..">
		        <input type="submit" value="Search">
		    </div>

		    <div class="field-row">
		        <label for="search-date-due">Date due</label>
		        <input id="search-date-due" type="date" placeholder="dd/mm/yyyy">
		        <input type="submit" value="Search">
		    </div>

		    <div class="field-row">
		        <label for="search-date-range">Date range</label>
		        <input id="search-date-range" type="date" placeholder="dd/mm/yyyy">
		        <input id="search-date-range" type="date" placeholder="dd/mm/yyyy">
		        <input type="submit" value="Search">
		    </div>

		    <div class="field-row">
		        <label for="search-date-completed">Date completed</label>
		        <input id="search-date-completed" type="date" placeholder="dd/mm/yyyy">
		        <input type="submit" value="Search">
		    </div>

		    <div class="field-row">
		        <label for="search-document-reference">Document reference</label>
		        <input id="search-document-reference" type="text" placeholder="Search..">
		        <input type="submit" value="Search">
		    </div>

		    <div class="field-row">
		        <label for="search-category">Category</label>
		        <input id="search-category" type="text" placeholder="Search..">
		        <input type="submit" value="Search">
		    </div>
		</div>
	      </fieldset>
	  </form>
        </div>

    </div>


</div>
