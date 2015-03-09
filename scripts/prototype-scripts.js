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

var app = angular.module("recordCopying", []);

app.controller("startPageCheck", function($scope, $log) {
    $scope.data = {};
    $scope.data.showPageCheckForm = false;

    $scope.togglePageCheckForm = function() {
        $log.log('togglePageCheckForm function called');
        $scope.data.showPageCheckForm = !$scope.data.showPageCheckForm;
    }
});

app.controller("confirmAndPay", function ($scope, $log) {

    $scope.quantities = {
        a3Pages : 25,
        a3PlusPages : 3
    };

    $scope.prices = {
        a3PaperColourPrice : 3.00,
        a3PaperMonoPrice : 1.00,
        a3PlusPaperPrice : 13.00,
        a3DigitalPrice : 2.80,
        a3PlusDigitalPrice : 10.00
    };

    $scope.options = {
        deliveryType : "paper",
        printingOption : "colour",
        deliveryAddress : "stored",
        selectedCountry : 'United Kingdom',
        availableCountries : [
            'United Kingdom',
            'Australia',
            'New Zealand',
            'Zambia'
        ]
    };

    $scope.totalPrice = false;

    $scope.calculateTotalPrice = function (type, printingOption) {
        if(type == "digital") {
            $scope.totalPrice = ($scope.quantities.a3Pages * $scope.prices.a3DigitalPrice) + ($scope.quantities.a3PlusPages * $scope.prices.a3PlusDigitalPrice);
        } else if(type == "paper") {
            switch (printingOption) {
                case "colour" :
                    $scope.totalPrice = ($scope.quantities.a3Pages * $scope.prices.a3PaperColourPrice) + ($scope.quantities.a3PlusPages * $scope.prices.a3PlusPaperPrice);
                    break;
                case "mono" :
                    $scope.totalPrice = ($scope.quantities.a3Pages * $scope.prices.a3PaperMonoPrice) + ($scope.quantities.a3PlusPages * $scope.prices.a3PlusPaperPrice);
                    break;
                default :
                    $log.log("Problem with calculateTotalPrice()")
            }

        }
    };

    $scope.totalPages = function () {
        return $scope.quantities.a3Pages + $scope.quantities.a3PlusPages;
    };


})