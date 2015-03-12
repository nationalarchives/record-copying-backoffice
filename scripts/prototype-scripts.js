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

app.factory("dataService", function() {
    return {
        getMessages : function() {
            return [
            {
                name : 'Blank template', 
                message : 'Dear Customer,\n\nThank you for contacting The National Archives with your request for a page check for the cost of copies of records.\n\nWe are unable to process your request...\n\nRecords copying team'
            },
            {
                name : 'Insufficient information', 
                message : 'Dear Customer,\n\nThank you for contacting The National Archives with your request for a page check for the cost of copies of records.\n\nUnfortunately the information that you have provided is insufficient to enable us to process the page check. We cannot provide a page check if it would be necessary to search through a document to find specific pieces of information which may be located randomly throughout a document. In some cases, items which are listed is Discovery, our catalogue, are not physically separate documents. Instead they form part of a larger document and have to be located within that document in order to provide a page check. We will make every effort to locate such items but, occasionally, this is not possible\n\nThere are other ways for you to identify the material you want copied\n\n Record Copying Team'
            }
        ]},
        getSearchOptions : function() {
            return ["Customer's name", "Customer's postcode", "Request reference number", "Date", "Date range", "Document reference", "Category"];
        }
    }
})

app.controller("suspendOrder", function($scope, $log, dataService) {

    $scope.data = {
        selectedReason : '',
        reasons : dataService.getMessages()
    };
})

app.controller("searchForms", function($scope, $log, dataService) {
    $scope.searchOptions = dataService.getSearchOptions();


    $scope.isDateRangeSearch = function(str) {
        if(str == "Date range") {
            return true;
        } else {
            return false;
        }
    }

    $scope.isDateSearch = function(str) {
        if(str == "Date") {
            return true;
        } else { 
            return false;
        }
    }

})