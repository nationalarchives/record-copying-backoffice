/**
 * Created by gjones on 06/01/2015.
 */

//  The purpose of this script is to override the standard behaviour of
//  user interface elements that are not relevant to the prototype tasks

$('a', '#holds-breadcrumb').on('click', function (e) {
    $this = $(this);
    if($this.hasClass('proceed')) {
        console.log('Click allowed because of "proceed" class presence. See prototype-overrides.js');
    } else {    
        console.log('Click default prevented by prototype-overrides.js');
        e.preventDefault();
    }
});

// Updating the selected state of the menu to reflect a class on the body
// Note: this is for the prototype only and will not be used in production

(function () {
    'use strict';
    var bodyClass = $('body').attr("class");
    if (bodyClass.length) {
        $('li', '#account-controls').each(function(){
            var $this = $(this),
                id = $this.attr('id');
            if(id == bodyClass) {
                $this.addClass('currently-selected');
            }
        })
    };
})();



