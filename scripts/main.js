$(document).ready(function($){
	var timelineBlocks = $('.cd-timeline-block'),
		offset = 0.8;

	//hide timeline blocks which are outside the viewport
	hideBlocks(timelineBlocks, offset);

	//on scolling, show/animate timeline blocks when enter the viewport
	$(window).on('scroll', function(){
		(!window.requestAnimationFrame) 
			? setTimeout(function(){ showBlocks(timelineBlocks, offset); }, 100)
			: window.requestAnimationFrame(function(){ showBlocks(timelineBlocks, offset); });
	});

	function hideBlocks(blocks, offset) {
		blocks.each(function(){
			( $(this).offset().top > $(window).scrollTop()+$(window).height()*offset ) && $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
		});
	}

	function showBlocks(blocks, offset) {
		blocks.each(function(){
			( $(this).offset().top <= $(window).scrollTop()+$(window).height()*offset && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) && $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
		});
	}
});

// Photo Modal
$(function() {
	$('.photog-group:not(.custom-modal)').on('click', function(event) {
    //Gets the Item that was clicked
    var $this = $(event.currentTarget);
		$('#myModal').modal('show');
    //Use the slide number of the clicked Item to open the slide on the carousel
    $('#MyCarousel').carousel($this.data('slide')); 
	});	
});

// // Equipment Modal
// $(function() {
// 	$('.photog-group').on('click', function(event) {
//     //Gets the Item that was clicked
//     var $this = $(event.currentTarget);
// 		$('#myModal').modal('show');
//     //Use the data slide number of the clicked image to open the corresponding slide in the modal, e.g. image 1 = modal 1
//     $('#MyCarousel').carousel($this.data('slide')); 
// 	});
// });

// Timeline Modal
$(function() {
	$('.cd-timeline-content').on('click', function(event) {
		//Gets the Item that was clicked
		var $this = $(event.currentTarget);
		$('#myModal').modal('show');
		//Use the slide number of the clicked Item to open the slide on the carousel
		$('#MyCarousel').carousel($this.data('slide'));
	});
});

// Dropdown Nav - referenced this codepen: https://codepen.io/bsngr/pen/frDqh?editors=1010
$(function() {
  $('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
  }, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
  });
});

// Pause home carousel on hover
$(function() {
  $('#container').hover(function(){
    $("#main-carousel").carousel('pause');
  },
  function(){
    $("#main-carousel").carousel('cycle');
});
  });

// Pause photo carousel on hover

$(function() {
  $('#container').hover(function(){
    $(".photo.carousel-inner").carousel('pause');
  },
  function(){
    $(".photo.carousel-inner").carousel('cycle');
});
  });

// Link Timeline in main nav
$(function() {
  $('.dropdown-toggle').click(function(){
    window.location = 'timeline.php';
  });
});

/*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll(function() {
  var height = $(window).scrollTop();
  if (height > 2000) {
      $('#back2Top').fadeIn();
  } else {
      $('#back2Top').fadeOut();
  }
});
$(function() {
  $("#back2Top").click(function(event) {
      event.preventDefault();
      $("html, body").animate({ scrollTop: 0 }, "slow");
      return false;
  });

});

// Scroll to top when arrow up clicked END

// Image Flip
function flip (event)
{
  var element = event.currentTarget;
  /* Toggle the setting of the classname attribute */
  element.className = (element.className == 'card') ? 'card flipped' : 'card';
}

// Enable tootltips everywhere
$(function () {
  $('[data-toggle="tooltip"]').tooltip({
    trigger : 'hover',
    html: true
  })
});

// home page nav bar opacity on scroll
$(window).scroll(function() {    
  var scroll = $(window).scrollTop();
  var $window = $(window)

  if ($window.width() < 3000 && scroll >= 1200) {
      $(".navbar-default").addClass("opaque");
      $(".logo").addClass("small");
  } else {
      $(".navbar-default").removeClass("opaque");
      $(".logo").removeClass("small");
  }

  // iPad
  if ($window.width() < 769 && scroll >= 400) {
      $(".navbar-default").addClass("opaque"); 
      $(".logo").addClass("mobile");
      $(".navbar-toggle.collapsed").addClass("but-shrink");
  } else {
      $(".logo").removeClass("mobile");
      $(".navbar-toggle.collapsed").removeClass("but-shrink");
  }

  // iPhone
  if ($window.width() < 475 && scroll >= 250) {
      $(".navbar-default").addClass("opaque"); 
      $(".logo").addClass("mobile2");
  } else {
      $(".logo").removeClass("mobile2");
  }
});

// Hide indicators on Equipment page past a certain point
$(window).scroll(function() {
  var height = $(window).scrollTop();
  if (height > 8000) {
      $('.vert-links').addClass("vert-links-hide");
  } else {
      $('.vert-links').removeClass("vert-links-hide");
  }
});

$(".item").mouseenter(function() {
    $(".carousel-control").css("opacity: 1");
}).mouseleave(function() {
    $(".carousel-control").css("opacity: 0");
});