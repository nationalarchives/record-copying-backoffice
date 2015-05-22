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


$("#email-category").change(function () {
    this.form.submit();
});


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
                message : 'Dear [],\n\nPage count number: RC00001\n\nThank you for contacting The National Archives with your request for a page count for the cost of copies of records.\n\nUnfortunately the information that you have provided is insufficient to enable us to process the page count. We cannot provide a page count if it would be necessary to search through a document to find specific pieces of information which may be located randomly throughout a document.\n\nIn some cases, items which are listed in Discovery, our catalogue, are not physically separate documents. Instead they form part of a larger document and have to be located within that document in order to provide a page count. We will make every effort to locate such items but, occasionally, this is not possible.\n\nThere are three other ways for you to identify the material you want copied:\n\n1. You, or someone acting on your behalf, are welcome to visit us to do the research yourself. Our staff will give you advice free of charge. For visiting details, please go to http://www.nationalarchives.gov.uk/visit/. The only payment would be if you then wanted to buy copies from our Record Copying Department or use the self-service copying facilities (where available). You can take photographs of documents using your own digital camera, under certain rules. For details of the options go to http://www.nationalarchives.gov.uk/recordcopying/.\n\n2. You can hire an independent researcher to carry out specific or wider-ranging research for you, both at The National Archives and in other relevant archives. For details, and for a list of independent researchers who conduct research at The National Archives, look at http://www.nationalarchives.gov.uk/irlist/.\n\n3. You can use our paid search service, if you have a specific request: we cannot undertake wide-ranging research. We will reply to your request within 20 working days of receiving it, excluding any days between asking for and receiving your payment. For details go to http://www.nationalarchives.gov.uk/foi/research.htm.\n\nWe wish you every success in your research, but please be aware that the records in our custody are not always complete: they were not created or kept for research purposes, but for use by the government or law courts of the day. We cannot guarantee that you will find what you are looking for.\n\n'
            },
            {
                name : 'Research required', 
                message : 'Dear [],\n\nPage count number: 637284\n\nThank you for your request for a page count for the cost of copying records from The National Archives.\n\nOur initial examination of your request shows that specific information within this document is not easily identifiable and will require further research.\n\nUnfortunately we cannot provide  a page count if it would be necessary to search through a document to find specific pieces of information which may be located randomly throughout a document so this has been closed and we will refund the fee to your card account.\n\nIn some ases, items which are listed in Discovery, our catalogue, are not physically separate documents. Instead they form part of a larger document and have to be located within that document in order to provide an estimate. We will make every effort to locate such items but, occasionally, this is not possible.\n\nThere are three other ways for you to identify the material you want copied:\n\n1. You, or someone acting on your behalf, are welcome to visit us to do the research yourself. Our staff will give you advice free of charge. For visiting details, please go to http://www.nationalarchives.gov.uk/visit/. The only payment would be if you then wanted to buy copies from our Record Copying Department or use the self-service copying facilities (where available). You can take photographs of documents using your own digital camera, under certain rules. For details of the options go to http://www.nationalarchives.gov.uk/recordcopying/.\n\n2. You can hire an independent researcher to carry out specific or wider-anging research for you, both at The National Archives and in other relevant archives. For details, and for a list of independent researchers who conduct research at The National Archives, look at http://www.nationalarchives.gov.uk/irlist/.\n\n3. You can use our paid search service, if you have a specific request: we cannot undertake wide-ranging research. We will reply to your request within 20 working days of receiving it, excluding any days between asking for and receiving your payment. For details go to http://www.nationalarchives.gov.uk/foi/research.htm.\n\nWe wish you everys uccess in your research, but please be aware that the records in our custody are not always complete. The records we hold were not created or kept for research purposes, but for use by the government or law courts of the day. We cannot guarantee that you will always find what you are looking for.'
            }
        ]},
        getSearchOptions : function() {
            return ["Customer's name", "Customer's postcode", "Order reference number", "Date due", "Date range", "Date completed", "Document reference", "Category"];
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
        if(str == "Date due" || str == "Date completed") {
            return true;
        } else { 
            return false;
        }
    }

})
