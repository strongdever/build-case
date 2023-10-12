"use strict";

$(function () {
	var $elem = $(".switch");
	var sp = "_sp.";
	var pc = "_pc.";
	var replaceWidth = 960;

	function imageSwitch() {
		var windowWidth = parseInt($(window).width());
		$elem.each(function () {
			var $this = $(this);
			if (windowWidth >= replaceWidth) {
				$this.attr("src", $this.attr("src").replace(sp, pc));
			} else {
				$this.attr("src", $this.attr("src").replace(pc, sp));
			}
		});
	}
	imageSwitch();

	$(".pagetop-grid").hide();
	$(window).on("scroll", function () {
		if ($(this).scrollTop() > 100) {
			$(".pagetop-grid").fadeIn("slow");
		} else {
			$(".pagetop-grid").fadeOut("slow");
		}
	});
	$(".pagetop-grid a").click(function () {
		$("body,html").animate({
				scrollTop: 0,
			},
			500
		);
		return false;
	});

	var wheight = $(window).height();
	if (wheight < 900) {
		$("header").addClass("min");
	}
	$('a[href^="#"]').click(function () {
		var speed = 500;
		var href = $(this).attr("href");
		var target = $(href == "#" || href == "" ? "html" : href);
		var position = target.offset().top - 0;
		$("body,html").animate({
			scrollTop: position
		}, speed, "swing");
		return false;
	});

	$(".faq-section .faq-list li dl dd").css("display", "none");
	$(".faq-section .faq-list li dl dt").click(function () {
		$(this).parent().toggleClass("open");
		$(this).next().slideToggle(500);
		$("html,body").animate({
			scrollTop: accordionPos
		}, 500);
	});

	if ($(".micromodal-slide").length) {
		MicroModal.init();
	}

	if ($(".news-popup").length) {
		MicroModal.show("modal-popup");
		$(".modal-close").on("click", function () {
			MicroModal.close("modal-popup");
		});
	}

	$(".sp-btn").on("click", function () {
		$(".voice-section .voice-img-block ul li").fadeIn(500);
		$(this).fadeOut(500);
		return false;
	});

	//-----------------------------------------------------------------

	// hamburger menu
	$(".trigger").on("click", function () {
		$(".menu-trigger").toggleClass("active");
		return false;
	});
	var state = false;
	$(".trigger").on("click", function () {
		$(".hamburger-overlay").fadeToggle();
		if (state == false) {
			$("html, body").css("overflow-y", "hidden");
			$(".hamburger-overlay").addClass("sp-fixed");
			state = true;
		} else {
			$("html, body").css("overflow-y", "auto");
			$(".hamburger-overlay").removeClass("sp-fixed");
			state = false;
		}
	});
	$(".hamburger-overlay").on("click", function (e) {
		if (!$(e.target).closest(".hamburger-wrapper").length) {
			$(".trigger").trigger("click");
		}
	});

	$("header .globalmenu").clone().appendTo(".hamburger-overlay");

	AOS.init({
		offset: 300,
		duration: 600,
		easing: "ease-out",
		// anchorPlacement: "top-center",
		once: true,
		// ãƒ‘ãƒ©ãƒ©ãƒƒã‚¯ã‚¹ã®è¨­å®š
	});
});

//ãƒ­ãƒ¼ãƒ‡ã‚£ãƒ³ã‚°ç”»é¢ï¼ˆä¸€åº¦ã‚µã‚¤ãƒˆã‚’è¨ªã‚ŒãŸã‚‰æ›´æ–°æ™‚ãƒ»ãƒšãƒ¼ã‚¸é·ç§»æ™‚ã«ãƒ­ãƒ¼ãƒ‡ã‚£ãƒ³ã‚°è¡¨ç¤ºã•ã›ãªã„ï¼‰
function loadedPage() {
	$("#loading").addClass("loaded");
}

if (!sessionStorage.getItem("visited")) {
	sessionStorage.setItem("visited", "first");
	window.addEventListener("load", function () {
		setTimeout(loadedPage, 2000);
	});
} else {
	loadedPage();
}

//safariå¯¾ç­–
window.onpageshow = function (event) {
	if (event.persisted) {
		window.location.reload();
	}
};

/* ï¼ï¼ï¼ï¼ï¼ï¼ï¼ï¼ï¼ï¼ï¼ï¼ï¼ï¼ï¼ï¼
ã‚¹ãƒ©ã‚¤ãƒ‰ã‚·ãƒ§ãƒ¼
ï¼ï¼ï¼ï¼ï¼ï¼ï¼ï¼ï¼ï¼ï¼ï¼ï¼ï¼ï¼ï¼*/
jQuery(function () {
	jQuery("#js-slider-1").slick({
		arrows: true,
		swipe: true,
		// autoplay: true,
		// speed: 800,
		slidesToShow: 2,
		slidesToScroll: 1,
		centerMode: false,
		// centerPadding: "10%",

		responsive: [{
			breakpoint: 769,
			settings: {
				slidesToShow: 1,
			},
		}, ],
	});
});