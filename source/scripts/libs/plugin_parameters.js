export default function plugindParameters(){
	// Selector styling
	$("select.selectori").each(function(){
		var placeholder = $(this).data('placeholder') || 'Default placeholder';
		$(this).select2({
			allowClear: true,
			minimumResultsForSearch: -1,
			placeholder: placeholder
		}); 
	});
	// Slider
	$(".main_slider").slick({
		autoplay: true,
		dots: false,
		arrows: true,
		infinite: true,
		speed: 1000,
		slidesToShow: 1,
		fade: true,
		adaptiveHeight: true,
		prevArrow: '<em class="ri-arrow-left-s-line"></em>',
		nextArrow: '<em class="ri-arrow-right-s-line"></em>'
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
}