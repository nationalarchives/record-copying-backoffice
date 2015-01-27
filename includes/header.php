<header role="banner" id="page-header">
    <div id="skip-link-container">
        <a href="http://discovery.nationalarchives.gov.uk/details/rd/N13980137#page_wrap">Skip to Main Content</a>
    </div>

    <div id="retro-disco"><span>This is a wireframe prototype representing only a single route through a potential application process</span>
    </div>

    <div class="container">
        <div id="holds-logo-and-search" class="row">
            <div id="logo-holder" class="col starts-at-full ends-at-half clr">
                <a title="Go to The National Archives homepage" href="http://www.nationalarchives.gov.uk/">
                    <img src="images/logo-white.png" alt="The National Archives" title="The National Archives">
                </a>

                <form id="mobile-global-search" method="get"
                      action="http://apps.nationalarchives.gov.uk/search/quick_search.aspx">
                    <div id="mobile-search-outer-wrapper" style="display: none;">
                        <div id="mobile-search-wrapper">
                            <input type="text" aria-required="true" required="" name="search_text"
                                   placeholder="Search our website..." id="mobile-search-field" autocomplete="off">
                            <input type="submit" id="mobileSearchSubmit" value="">
                        </div>
                        <div id="change-destination">
                            <span><input type="radio" data-fieldname="search_text"
                                         data-placeholder="Search our website..."
                                         data-target="http://apps.nationalarchives.gov.uk/search/quick_search.aspx"
                                         id="websiteSearch" name="searchDestination"
                                         class="mobileSearchDestinationOption" checked=""><label for="websiteSearch">Search
                                    our website</label></span>
                            <span><input type="radio" data-fieldname="_q" data-placeholder="Search our records..."
                                         data-target="/results/r" id="catalogueSearch" name="searchDestination"
                                         class="mobileSearchDestinationOption"><label for="catalogueSearch">Search our
                                    records</label></span>
                        </div>
                    </div>
                </form>
                <span id="search-expander" style="position: absolute; right: 5px;">&nbsp;</span></div>
        </div>

    </div>
    <!-- This is where the mega-menu would be included -->
    <div id="account-controls-wrapper">
        <div id="account-controls" class="container">
            <ul>
                <li id="signin"><a href="http://discovery.nationalarchives.gov.uk/sign-in">Sign in</a></li>
                <li id="register"><a href="http://discovery.nationalarchives.gov.uk/register">Register</a></li>
                <li id="miniBasket">
                <span class="noItems">
                    <img src="images/basket.png" id="basketIcon" alt="Basket icon">
                    No items
                </span>
                </li>

            </ul>
        </div>
    </div>
</header>