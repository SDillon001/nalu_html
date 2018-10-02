$(document).ready(function(){

	// Init ScrollMagic
	var controller = new ScrollMagic.Controller();

	// pin the intro
	var pinIntroScene = new ScrollMagic.Scene({
		triggerElement: '#intro',
		triggerHook: 0,
		duration: '30%'
	})
	.setPin('#intro', {pushFollowers: false})
	.addTo(controller);

	// // // pin again
	// var pinIntroScene2 = new ScrollMagic.Scene({
	// 	triggerElement: '#section2',
	// 	triggerHook: 0.35
	// })
	// .setPin('#intro', {pushFollowers: false})
	// .addTo(controller);

	// loop through each .project element
	$('.section').each(function(){

		// build a scene
		var ourScene = new ScrollMagic.Scene({
			triggerElement: this.children[0],
			triggerHook: .9
		})
		.setClassToggle(this, 'fade-in') // add class to section2
		// .addIndicators({
		// 	name: 'fade scene',
		// 	colorTrigger: 'black',
		// 	colorStart: '#75C695',
		// 	colorEnd: 'pink'
		// }) // this requires a plugin
		.addTo(controller);

	});

	// parallax scene

	var parallaxTl = new TimelineMax();
	parallaxTl
		.from('.content-wrapper', 0.4, {autoAlpha: 0, ease:Power0.easeNone}, 0.6)
		.from('.bcg', 1, {y: '-50%', ease:Power0.easeNone}, 0)
		;

	var slideParallaxScene = new ScrollMagic.Scene({
		triggerElement: '.section.bcg-parallax',
		triggerHook: 1,
		duration: '100%'
	})
	.setTween(parallaxTl)
	.addTo(controller);

});

$(function () { // wait for document ready
	// init
	var controller = new ScrollMagic.Controller();

	// define movement of panels
	var wipeAnimation = new TimelineMax()
		.fromTo("section.panel.turqoise", 1, {y: "100%"}, {y: "0%", ease: Linear.easeNone})  // in from left
		.fromTo("section.panel.green",    1, {y: "100%"}, {y: "0%", ease: Linear.easeNone})  // in from right
		.fromTo("section.panel.bordeaux", 1, {y: "100%"}, {y: "0%", ease: Linear.easeNone}); // in from top

	// create scene to pin and link animation
	new ScrollMagic.Scene({
			triggerElement: "#pinContainer",
			triggerHook: 0,
			duration: "350%"
		})
	.setPin("#pinContainer")
	.setTween(wipeAnimation)
	// .addIndicators() add indicators (requires plugin)
	.addTo(controller);
});