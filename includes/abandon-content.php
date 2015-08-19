<section class="row" ng-app="recordCopyingBackOffice">
    <div class="col starts-at-full clr holding-box" ng-controller="suspendOrder">
        <div class="heading-holding-banner">
            <h1><span><span>Abandon order</span></span></h1>
        </div>
        <div class="breather abandon-content">
            <form method="get" action="abandonment-confirmation.php">
                <div class="field-row">
                    <label for="reason">Select a common reasons for abandonment</label>
                    <select ng-model="data.selectedReason" ng-options="item.name for item in data.reasons">
                    </select>
                </div>
                <div ng-show="!!data.selectedReason.message">
                    <div class="field-row">
                        <label for="standard-text">Message to user (amend as needed before submitting)</label>
                        <textarea name="response" id="standard-text" cols="30" rows="20">{{ data.selectedReason.message }}</textarea>
                    </div>
                    <div class="holds-columns-together abandon-buttons">
                        <div class="button-holder">
                            <input type="submit" value="Preview message before sending to user">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</section>