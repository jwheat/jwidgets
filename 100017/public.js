$(document).ready(function() {
	if ($('.xcounter').exists()) {
		$('.fact-slider').appear(function(){
			$('.counter').addClass('counter-analog').counter({
				initial: '0',
				direction: 'up',
				interval: '25',
				format: '99',
				stop: '98'
			});
		});
	}
});