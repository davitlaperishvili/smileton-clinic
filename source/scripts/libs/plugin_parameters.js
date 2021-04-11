$(document).ready(function(){
	//Swipper slider 
	let mainSlider = new Swiper('.main_slider', {
		speed: 1000,
		loop: true,
		slidesPerView: 1,
		navigation: {
			nextEl: '.main_slider_next',
			prevEl: '.main_slider_prev',
		}
	});
	// Selector styling
	$("select.selectori").select2({
		allowClear: true,
		minimumResultsForSearch: -1
	});
	// Gallery
	$(".magnific").each(function(){
		$(this).magnificPopup({
			delegate: "a",
			type: "image",
			gallery:{
				enabled: true
			},
			zoom:{
				enabled: true,
				duration: 300
			}
		});
	});
	if($(".magnific_video").length){
		$(".magnific_video").magnificPopup({
			disableOn: 700,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});
	}
});