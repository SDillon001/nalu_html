// Photo Test Section Wipes Manual v2

$(function () { // wait for document ready
  // init
  var controller = new ScrollMagic.Controller({
    globalSceneOptions: {
      triggerHook: 'onLeave'
    }
  });

  // get all slides
  var slides = document.querySelectorAll("section.box");

  // create scene for every slide
  for (var i=0; i<slides.length; i++) {
    new ScrollMagic.Scene({
        triggerElement: slides[i],
        // triggerHook: 0,
      })
      .setPin(slides[i])
      // .addIndicators() // add indicators (requires plugin)
      .addTo(controller);
  }
});

// $(document).ready(function(){

//   // Init ScrollMagic
//   var controller = new ScrollMagic.Controller();

//   // pin the intro
//   var pinIntroScene = new ScrollMagic.Scene({
//     triggerElement: '.left-side.two',
//     triggerHook: 0,
//     duration: '100%'
//   })
//   .setPin('.left-side.two', {pushFollowers: false})
//   .addTo(controller);
// });