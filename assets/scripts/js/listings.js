jQuery(document).ready(function($) {

	if (window.location.hash.indexOf("forSale") > -1 ) {
        toggleSale(0);
	} 
	
	if (window.location.hash.indexOf("forRent") > -1 ) {
        toggleRent(0);
	} 
    
    $( "#allButton" ).click(function() {
        toggleAll(500); 
    });
    
    $( "#saleButton" ).click(function() {
        toggleSale(500); 
    });
    
    $( "#rentButton" ).click(function() {
        toggleRent(500);
    });

    function toggleRent(speed) {
        $(".forRent").show(speed);
        $(".forSale").hide(speed);
        $("#allButton").removeClass("listing-selection-button")
        $("#saleButton").removeClass("listing-selection-button")
        $("#rentButton").addClass("listing-selection-button")
    } 
    
    function toggleSale(speed) {
        $(".forSale").show(speed);
        $(".forRent").hide(speed);
        $("#allButton").removeClass("listing-selection-button")
        $("#saleButton").addClass("listing-selection-button")
        $("#rentButton").removeClass("listing-selection-button")
    } 
    
    function toggleAll(speed){
        $(".forSale").show(speed);
        $(".forRent").show(speed);
        $("#allButton").addClass("listing-selection-button")
        $("#saleButton").removeClass("listing-selection-button")
        $("#rentButton").removeClass("listing-selection-button")
    }
    
});
