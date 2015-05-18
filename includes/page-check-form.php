<div class="holds-columns-together new-page">
    <form method="get">
        <fieldset>
            <h2><span><span>Page check job sheet</span></span></h2>
            <div class="breather">
                <div class="grid-within-grid-two-item staff-comments">
                    <div>
                        <div class="field-row">
                            <label for="temp-location">Temporary storage location</label>
                            <input id="temp-location" type="text" value="Shelf 25"/>
                        </div>
                        <div class="field-row">
                            <label for="a3">Pages A3</label>
                            <input id="a3" type="number"/>
                        </div>
                        <div class="field-row">
                            <label for="a3Plus">Pages A3+</label>
                            <input id="a3Plus" type="number"/>
                        </div>
                        <div class="field-row">
                            <label for="certified-pages">Certified pages</label>
                            <input id="certified-pages" type="number"/>
                        </div>
                        <div class="process-selection">
                            <h3 class="inline">Suitable copying options for user</h3>
                            <div class="field-row">
                                <input id="paper-mono" type="checkbox" checked/>
                                <label for="paper-mono">Paper monochrome</label>
                            </div>
                            <div class="field-row">
                                <input id="paper-colour" type="checkbox" checked/>
                                <label for="paper-colour">Paper colour</label>
                            </div>
                            <div class="field-row">
                                <input id="ditital-images" type="checkbox" checked/>
                                <label for="ditital-images">Digital images</label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="field-row">
                            <label for="comments-to-customer">Comments to customer</label>
                            <textarea id="comments-to-customer" rows="5" disabled>All pages can be copied</textarea>
                        </div>
                        <div class="field-row">
                            <label for="comments-to-staff">Comments to staff</label>
                            <textarea id="comments-to-staff" rows="5"></textarea>
                        </div>
                        <div class="field-row">
                            <input type="checkbox" id="whole-document">
                            <label for="whole-document">Order for whole document</label>
                        </div>
                    </div>
                </div>
            </div> 
        </fieldset>
        <?php if(!checkFileName('multi-print.php')) : ?>
        <div class="button-holder">
            <input type="hidden" name="status" value="page-check-completed">
            <a href="abandon.php" class="abandon-link">Abandon page check</a>
            <input type="submit" value="Save"/>
            <input type="submit" value="Send to customer">
        </div>

    <?php endif; ?>
    </form>
</div>