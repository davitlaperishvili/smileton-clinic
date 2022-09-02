/* РћС‚РїСЂР°РІРєР° С„РѕСЂРјС‹ РІ php BEGIN */
$(function () {
	$(".ajax-form").on("submit", function (event) {
		const form = $(this);
		const submitBtn = form.find(".btn");
		let send = true;
		event.preventDefault();

		$(this)
			.find("[data-req='true']")
			.each(function () {
				if ($(this).val() === "") {
					$(this).addClass("error");
					send = false;
				}
				if ($(this).is("select")) {
					if ($(this).val() === null) {
						$(this).addClass("error");
						send = false;
					}
				}
				if ($(this).is('input[type="checkbox"]')) {
					if ($(this).prop("checked") !== true) {
						$(this).addClass("error");
						send = false;
					}
				}
				if ($(this).is('input[type="tel"]')) {
					if ($(this).cleanVal().length < 11) {
						$(this).addClass("error");
						send = false;
					}
				}
			});

		$(this)
			.find("[data-req='true']")
			.on("focus", function () {
				$(this).removeClass("error");
			});

		// empty file inputs fix for mac
		const fileInputs = $('input[type="file"]:not([disabled])', form);
		fileInputs.each(function (_, input) {
			if (input.files.length > 0) return;
			$(input).prop("disabled", true);
		});

		const form_data = new FormData(this);

		fileInputs.prop("disabled", false);

		$("[data-label]").each(function () {
			const input_name = $(this).attr("name");
			const input_label__name = input_name + "_label";
			const input_label__value = $(this).data("label").toString();
			form_data.append(input_label__name, input_label__value);
		});

		if (send === true) {
			submitBtn.prop("disabled", true);
			$.ajax({
				type: "POST",
				async: true,
				url: "/ajax/send.php",
				cache: false,
				contentType: false,
				processData: false,
				data: form_data,
				success: function (result) {
					console.log(result);
					$.fancybox.close();
					if (result.indexOf("Mail FAIL") !== -1) {
						$.fancybox.open({ src: "#modal-error" });
					} else {
						setTimeout(function () {
							$.fancybox.open({ src: "#modal-thanks" });
						}, 600);
						setTimeout(function () {
							// $.fancybox.close();
						}, 4500);
						form[0].reset();
					}
					submitBtn.prop("disabled", false);
				},
			});
			setTimeout(function () {
				submitBtn.prop("disabled", false);
			}, 4500);
		}
	});
});
/* РћС‚РїСЂР°РІРєР° С„РѕСЂРјС‹ РІ php END */

/* Input mask BEGIN */
$(function () {
	const telInputs = $("input[type='tel']");
	String.prototype.replaceAt = function (index, replacement) {
		return (
			this.substr(0, index) +
			replacement +
			this.substr(index + replacement.length)
		);
	};

	const options = {
		onKeyPress: function (cep, event, currentField, options) {
			if (cep.charAt(1) === "8") {
				const currentValue = currentField.get(0).value;
				currentField.get(0).value = currentValue.replaceAt(1, "7");
			}
		},
	};

	telInputs.mask("+0 (000) 000-00-00", options);

	telInputs.on("focus", function () {
		if ($(this).get(0).value.length < 2) {
			$(this).get(0).value = "+";
		}
	});

	telInputs.on("blur", function () {
		if ($(this).get(0).value === "+") {
			$(this).get(0).value = "";
		}
	});
});
/* Input mask END */

/* fancybox BEGIN */
$(function ($) {
	$.fancybox.defaults.backFocus = false;
	$.fancybox.defaults.autoFocus = false;
	$.fancybox.defaults.lang = "ru";
	$.fancybox.defaults.buttons = ["close"];
	$.fancybox.defaults.i18n = {
		ru: {
			CLOSE: "Р—Р°РєСЂС‹С‚СЊ",
			NEXT: "Р”Р°Р»СЊС€Рµ",
			PREV: "РќР°Р·Р°Рґ",
			ERROR: "РќРµ СѓРґР°РµС‚СЃСЏ Р·Р°РіСЂСѓР·РёС‚СЊ. <br/> РџРѕРїСЂРѕР±СѓР№С‚Рµ РїРѕР·РґРЅРµРµ.",
			PLAY_START: "РќР°С‡Р°С‚СЊ СЃР»Р°Р№РґС€РѕСѓ",
			PLAY_STOP: "РћСЃС‚Р°РЅРѕРІРёС‚СЊ СЃР»Р°Р№РґС€РѕСѓ",
			FULL_SCREEN: "РќР° РІРµСЃСЊ СЌРєСЂР°РЅ",
			THUMBS: "РџСЂРµРІСЊСЋ",
		},
	};
});

function initFancy() {
	$(".fancy").fancybox({
		buttons: ["close"],
	});
	$(".fancy-modal").fancybox({
		selector: "",
		touch: false,
	});
	$(".fancy-map").fancybox({
		toolbar: false,
		smallBtn: true,
		defaultType: "iframe",
	});
	$(".fancy-video").fancybox({
		toolbar: false,
		smallBtn: true,
		youtube: {
			controls: 1,
			showinfo: 0,
			autoplay: 1,
		},
	});
}

$(function () {
	initFancy();
});
/* fancybox END */

/* РџСЂРѕРєСЂСѓС‚РєР° Рє СЃРµРєС†РёСЏРј BEGIN */
$(function () {
	$(".scrollto").on("click", function () {
		const elementClick = $(this).attr("href");
		const destination = $(elementClick).offset().top;
		$("html,body").stop().animate({ scrollTop: destination }, 1000);
		return false;
	});
});
/* РџСЂРѕРєСЂСѓС‚РєР° Рє СЃРµРєС†РёСЏРј END */

/* Waypoints BEGIN */
$(function () {
	$(".anim").waypoint(
		function () {
			$(this.element).toggleClass("animated");
		},
		{
			offset: "85%",
		}
	);
});
/* Waypoints END */

/* Lazy BEGIN */
function lazyLoad() {
	const lazyImgs = $("[data-lazy]");
	lazyImgs.each(function () {
		const lazyImage = $(this);
		const src = lazyImage.attr("data-lazy");
		lazyImage.attr("src", src);
	});
}

function lazyLoadBg() {
	const lazyImgs = $("[data-lazybg]");

	lazyImgs.each(function () {
		const lazyImage = $(this);
		const src = lazyImage.attr("data-lazybg");
		lazyImage.css("background-image", "url(" + src + ")");
	});
}

function lozadInit() {
	const observer = lozad(".lozad", {
		rootMargin: "600px 0px",
		loaded: function () {
			Waypoint.refreshAll();
		},
	});
	observer.observe();
}

$(function () {
	lazyLoad();
	lazyLoadBg();
	lozadInit();
});

$(window).on("load", function () {
	Waypoint.refreshAll();
});
/* Lazy END */

/* Mob menu BEGIN */
$(function () {
	$(".burger").on("click", function () {
		$(this).toggleClass("active");
		$(".page__aside").toggleClass("active");
		$("body").toggleClass("stopped");
	});

	$(document).on("click touchstart", function (e) {
		const div = $(".burger,.page__aside");
		if (!div.is(e.target) && div.has(e.target).length === 0) {
			$(".burger").removeClass("active");
			$(".page__aside").removeClass("active");
			$("body").removeClass("stopped");
		}
	});
});
/* Mob menu END */

/* Steps form BEGIN */
$(function ($) {
	$(".js-form-step-next").on("click", function (e) {
		e.preventDefault();
		const thisForm = $(this).closest(".form-steps");
		const step1 = thisForm.find(".form-step-1");
		const step2 = thisForm.find(".form-step-2");
		step1.hide();
		step2.show();
	});
});
/* Steps form END */

/* Why slider BEGIN */
$(function ($) {
	let whySlider = $(".why-slider").flickity({
		cellAlign: "left",
		pageDots: false,
		lazyLoad: 4,
		percentPosition: false,
		imagesLoaded: true,
		arrowShape:
			"M45.7,36.2L32.1,49.7c-0.2,0.1-0.2,0.4,0,0.5l13.6,13.6c0.2,0.2,0.4,0.2,0.5,0l1.7-1.7L37.3,51.4h29.2 c0.8,0,1.5-0.7,1.5-1.5l0,0c0-0.8-0.7-1.5-1.5-1.5h-29L48,37.9l-1.7-1.7C46.1,36,45.8,36,45.7,36.2L45.7,36.2z",
	});

	whySlider.on("select.flickity", function () {
		whySlider.find(".why-slider__slide.is-selected").removeClass("past");
		whySlider
			.find(".why-slider__slide.is-selected")
			.eq(0)
			.prevAll(".why-slider__slide")
			.addClass("past");
		whySlider
			.find(".why-slider__slide.is-selected")
			.nextAll(".why-slider__slide")
			.removeClass("past");
	});
});
/* Why slider END */

/* Cases BEGIN */
$(function ($) {
	let casesThumbsSlider = $(".cases-thumbs").flickity({
		cellAlign: "left",
		pageDots: false,
		contain: true,
		percentPosition: false,
		imagesLoaded: true,
		groupCells: true,
		dragThreshold: 5,
		arrowShape:
			"M45.7,36.2L32.1,49.7c-0.2,0.1-0.2,0.4,0,0.5l13.6,13.6c0.2,0.2,0.4,0.2,0.5,0l1.7-1.7L37.3,51.4h29.2 c0.8,0,1.5-0.7,1.5-1.5l0,0c0-0.8-0.7-1.5-1.5-1.5h-29L48,37.9l-1.7-1.7C46.1,36,45.8,36,45.7,36.2L45.7,36.2z",
	});

	$(".case__ba").twentytwenty({
		no_overlay: true,
		move_slider_on_hover: false,
	});

	$(".case__ba").imagesLoaded(function () {
		$(window).trigger("resize.twentytwenty");
	});

	const thumbs = $(".case-thumb");
	const cases = $(".case");
	thumbs.on("click", function (e) {
		e.preventDefault();
		const index = $(this).index(".case-thumb");
		thumbs.removeClass("active");
		$(this).addClass("active");
		cases.removeClass("active");
		cases.eq(index).addClass("active");
		$(window).trigger("resize.twentytwenty");
	});
});
/* Cases END */

/* Promo BEGIN */
$(function ($) {
	let promoSlider = $(".promo-slider").flickity({
		cellAlign: "left",
		pageDots: false,
		contain: true,
		imagesLoaded: true,
		dragThreshold: 5,
		adaptiveHeight: true,
		arrowShape:
			"M45.7,36.2L32.1,49.7c-0.2,0.1-0.2,0.4,0,0.5l13.6,13.6c0.2,0.2,0.4,0.2,0.5,0l1.7-1.7L37.3,51.4h29.2 c0.8,0,1.5-0.7,1.5-1.5l0,0c0-0.8-0.7-1.5-1.5-1.5h-29L48,37.9l-1.7-1.7C46.1,36,45.8,36,45.7,36.2L45.7,36.2z",
	});
});
/* Promo END */

/* reviews BEGIN */
$(function ($) {
	$(".reviews-more").on("click", function () {
		$(".reviews-hidden").slideToggle();
		const text = $(".reviews-more span").text();
		if ($(".reviews-more span").text() === "Смотреть еще отзывы") {
			const destination = $("#s-reviews").offset().top;
			$("html,body").stop().animate({ scrollTop: destination }, 400);
		}
		$(".reviews-more span").text(
			text === "Скрыть отзывы" ? "Смотреть еще отзывы" : "Скрыть отзывы"
		);
		$(this).toggleClass("opened");
	});
});
/* reviews END */

/* serts-slider BEGIN */
$(function ($) {
	let sertsSlider = $(".serts-slider").flickity({
		cellAlign: "left",
		pageDots: false,
		contain: true,
		imagesLoaded: true,
		dragThreshold: 5,
		groupCells: true,
		arrowShape:
			"M45.7,36.2L32.1,49.7c-0.2,0.1-0.2,0.4,0,0.5l13.6,13.6c0.2,0.2,0.4,0.2,0.5,0l1.7-1.7L37.3,51.4h29.2 c0.8,0,1.5-0.7,1.5-1.5l0,0c0-0.8-0.7-1.5-1.5-1.5h-29L48,37.9l-1.7-1.7C46.1,36,45.8,36,45.7,36.2L45.7,36.2z",
	});
});
/* serts-slider END */

/* Faq BEGIN */
$(function ($) {
	const questions = $(".faq__q");
	const answers = $(".faq__a");

	questions.on("click", function (e) {
		questions.removeClass("active");
		$(this).addClass("active");
		const index = $(this).index();
		answers.removeClass("active");
		answers.eq(index).addClass("active");
	});
});
/* Faq END */

/* anchors BEGIN */
$(document).ready(function () {
	try {
		$(".aside__nav__link")
			.not(".aside__nav__link--page")
			.each(function () {
				const target = $(this).attr("href");
				$(target).addClass("is__nav-section");
			});

		$(window).on("scroll", function () {
			let w_scroll = $(window).scrollTop();
			let w_height = $(window).outerHeight();
			$(".aside__nav__link").each(function () {
				$(this).removeClass("active");
			});
			$(".is__nav-section").each(function () {
				let section_top = $(this).offset().top;
				let section_h = $(this).outerHeight();

				if (
					w_scroll >= section_top - w_height / 2 &&
					w_scroll < section_top + section_h - 80
				) {
					let section_index = $(this).index(".is__nav-section");
					$(".aside__nav__link").eq(section_index).addClass("active");
				}
			});
		});
	} catch (e) {
		console.log(e);
	}
});
/* anchors END */

/* Team BEGIN */
$(function ($) {
	let teamThumbsSlider = $(".team-thumbs").flickity({
		cellAlign: "left",
		pageDots: false,
		contain: true,
		percentPosition: false,
		imagesLoaded: true,
		groupCells: true,
		dragThreshold: 5,
		arrowShape:
			"M45.7,36.2L32.1,49.7c-0.2,0.1-0.2,0.4,0,0.5l13.6,13.6c0.2,0.2,0.4,0.2,0.5,0l1.7-1.7L37.3,51.4h29.2 c0.8,0,1.5-0.7,1.5-1.5l0,0c0-0.8-0.7-1.5-1.5-1.5h-29L48,37.9l-1.7-1.7C46.1,36,45.8,36,45.7,36.2L45.7,36.2z",
	});

	const thumbs = $(".team-thumb");
	const heroes = $(".hero");
	thumbs.on("click", function (e) {
		e.preventDefault();
		const index = $(this).index(".team-thumb");
		thumbs.removeClass("active");
		$(this).addClass("active");
		heroes.removeClass("active");
		heroes.eq(index).addClass("active");
	});
});
/* Team END */

/* Price Begin */
document.addEventListener("DOMContentLoaded", function () {
	$(".price__header").on("click", function () {
		const thisPrice = $(this).parent(".price");
		const thisDrop = $(this).next(".price__main");
		thisPrice.toggleClass("active");
		thisDrop.slideToggle(200);
	});
});
/* Price End */
