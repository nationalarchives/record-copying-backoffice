<section class="row">
    <section class="row new-page">
        <div class="col starts-at-full clr holding-box">
            <div class="heading-holding-banner">
                <h1><span><span>Order details</span></span></h1>
            </div>
            <div class="breather">
                <h2 class="inline">Document details</h2>
                <table class="page-check" width="100%">
                    <caption class="visually-hidden">Document details</caption>
                    <tr>
                        <th scope="row">Document reference</th>
                        <td><a href="">WO 166/500</a></td>
                    </tr>
                    <tr>
                        <th scope="row">Document location</th>
                        <td>4 N 1200</td>
                    </tr>
                    <tr>
                        <th scope="row">Document date</th>
                        <td>1941 Feb.-Oct</td>
                    </tr>
                    <tr>
                        <th scope="row">Description</th>
                        <td>DIVISIONS: 42ND. DIVISION: Reconnaisance Battalion</td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
    <div class="holds-columns-together new-page">
        <form method="get">
            <fieldset>
                <h2><span><span>Job sheet</span></span></h2>
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
                                <label for="comments-to-customer">Customer instructions</label>
                                <textarea id="comments-to-customer" rows="5"></textarea>
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
                <input type="submit" value="Save"/>
            </div>

        <?php endif; ?>
        </form>
    </div>

</section>

