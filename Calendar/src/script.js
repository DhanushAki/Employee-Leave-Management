$(document).ready(function() {
	$(".datepicker").datepicker({
    	prevText: "<",
    	nextText: ">",
    	dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
    });
    $(".datepicker").datepicker({ beforeShowDay: $.datepicker.noWeekends })
});