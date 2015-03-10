// jQuery - will refactor to Angular for production

$tabs = $("ul[role='tablist'] li");
$tabs.tabify();

if($(".confirm-and-pay").length) {
    (console && console.log('Class .confirm-and-pay found, indicating current page is confirm-and-pay'));

    // Adding 'completed-step' class to first two tabs

    $tabs.slice(0,2).each(function(){
        var $this = $(this);
        $this.addClass('completed-step');
    });

    // Triggering the tabify() behaviour on the third tab
    $tabs.eq(2).click();

}

$('.print-link').on('click', function(e){
    e.preventDefault();

    var $this = $(this),
        currentText = $this.text();

    if(currentText === 'Add to print queue') {
        $this.text('Added to print queue');
    } else {
        $this.text('Add to print queue');
    }

    var count = $.countElsWithSpecificText('.print-link', 'Added to print queue');
    $.createMultiPrintLink(count);

});

$.countElsWithSpecificText = function(selector, text) {
    var counter = 0; 
    $(selector).each(function(index, element){
        $el = $(element);

        if($el.text() === text) {
            counter++;
        }
    });
    return counter; 
}

$.createMultiPrintLink = function(count) {
    var message = "";
    if(count > 0) {
        message = "Print selected job sheets (" + count + ")";
    } else {
        message = false;
    }

    (message) ? $('#select-and-print').text(message).show() : $('#select-and-print').hide();
    
}


// Angular

var app = angular.module("recordCopyingBackOffice", []);

app.controller("suspendOrder", function($scope) {
    $scope.data = {
        reason : "",
        reasonText : {
            insufficient : "It has been necessary to suspend this order\n\n due to the information provided being insufficient", 
            incorrect : "The information provided was incorrect"
        }
    };
})

