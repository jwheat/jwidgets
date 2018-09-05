$(document).ready(function() {
	// When the form changes
	$('#mapForm').change(function(){
		var selectedBuilding = $('#mapForm option:selected').val();
		if(selectedBuilding=='ALL'){
			$('a.dot').show(1000);
		}else{
			$('a.dot[building*="'+selectedBuilding+'"]').show(1000);
			$('a.dot[building!="'+selectedBuilding+'"]').hide(1000);
		}
		$('a.dot').removeClass('selected');
		$('.submenu_detail').fadeOut(500);
	});

// Mouseover leaf display panel
$('a.dot').click(function(){
	has_class = $('a.dot').hasClass('selected');
	if (has_class) {
		$('a.dot').removeClass('selected');	
	} else {
		$(this).addClass('selected');
	}
	
	$('.submenu_detail').fadeOut(500);

	$(this).addClass('selected');
	var building='#' + $(this).attr('building');
	
	$(building).fadeOut(500, function(){
	$(building).fadeIn(500);
	});
});

// Exit display panel
$('.cancel').click(function () {
	$('a.dot').removeClass('selected');
	$('.submenu_detail').fadeOut(500);
});

// Click a link in a link panel dipslay the image information
$('a.p_link').click(function(){
	var feature='.feature_detail#'+$(this).attr('feature');
	var htmlCode=$(feature).html();
	$('.detail_container').fadeOut(300, function(){
		$('.detail_container .feature_detail').html(htmlCode);
		$('.detail_container').fadeIn(300);
	});
});


// end Ready
	
});
