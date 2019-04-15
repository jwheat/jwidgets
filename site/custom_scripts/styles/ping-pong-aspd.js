$(function() {
	
	var validNavigation = false;
	var event_active = localStorage.getItem("event_active");
	var event_closed = localStorage.getItem("event_closed");
	
	$(document).on('keypress', function(e) {
		if (e.keyCode == 116){
			validNavigation = true;
		}
	});

	$(document).on("click", "a" , function() {
		validNavigation = true;
	});

	$(document).on("submit", "form" , function() {
		validNavigation = true;
	});

	$(document).bind("click", "input[type=submit]" , function() {
		validNavigation = true;
	});

	$(document).bind("click", "button[type=submit]" , function() {
		validNavigation = true;
	});
	

	if ( (event_active == "true") && (event_closed == null)){
		$('#fixedFooter').addClass('visible');
	}
	else{
		if((event_active == null) && (event_closed == null)){
			ActiveTimeout.set(function () {
				$('#fixedFooter').addClass('visible');
				localStorage.setItem("event_active", "true");
				event_active = localStorage.getItem("event_active");
			}, 3000);
		}
	}
	
	$('#fixedFooter .closeButton').click(function(){
		$('#fixedFooter').removeClass('visible');
		localStorage.setItem("event_closed", "true");
		localStorage.removeItem("event_active");
		event_closed = localStorage.getItem("event_closed");
		event_active = localStorage.getItem("event_active");
	});
	
	window.onbeforeunload = function() {
		if (!validNavigation){
			localStorage.clear();
		}
	}
  
  });