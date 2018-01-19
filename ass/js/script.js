$(document).ready(function(){

	// set Options 
	var speed = 500;	//fade Speed
	var autoSw = true;	//
	var autoSwSpeed = 4000;

	// add initial active class
	$('.slide').first().addClass('active');

	//hide all slides
	$('.slide').hide();
	//Show the Active slider
	$('.active').show();

	//Slide to next 
	$('#next').on('click', goToNext);
	//Slide to prev
	$('#prev').on('click', goToPrev);

	//Check If User activate ye auto switch
	if (autoSw === true) {
		setInterval(goToNext,autoSwSpeed);
	}

	//Function next slider
	function goToNext(){
		$('.active').removeClass('active').addClass('oldActive');
		if ($('.oldActive').is(':last-child')) {
			$('.slide').first().addClass('active');
		}else{
			$('.oldActive').next().addClass('active');
		}
		$('.oldActive').removeClass('oldActive');
		$('.slide').fadeOut(speed, function() {
			
		});
		$('.active').fadeIn(speed, function() {
			
		});
	}


	//Function prev slider
	function goToPrev(){

		$('.active').removeClass('active').addClass('oldActive');
		if ($('.oldActive').is(':first-child')) {
			$('.slide').last().addClass('active');
		}else{
			$('.oldActive').prev().addClass('active');
		}
		$('.oldActive').removeClass('oldActive');
		$('.slide').fadeOut(speed, function() {
			
		});
		$('.active').fadeIn(speed, function() {
			
		});
	}



});
