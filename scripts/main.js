jQuery(document).ready(function($){
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

// Sticky Menu Timeline.html
$( document ).ready(function() {

$( ".cross" ).hide();
$( ".menu" ).hide();
$( ".hamburger" ).click(function() {
$( ".menu" ).slideToggle( "fast", function() {
$( ".hamburger" ).hide();
$( ".cross" ).show();
});
});

$( ".cross" ).click(function() {
$( ".menu" ).slideToggle( "fast", function() {
$( ".cross" ).hide();
$( ".hamburger" ).show();
});
});

});

// Sticky Menu 2 Timeline.html
$(function(){
  $('#demo').on('hide.bs.collapse', function () {
    $('#button').html('&#9776;');
  })
  $('#demo').on('show.bs.collapse', function () {
    $('#button').html('&#735;');
  })
})

// Timeline Modal
$(function() {
	$('.cd-timeline').on('click', '.flex-item1', function() {
		$('#myModal').modal('show');
		$('#MyCarousel').carousel($(this).index()); 
	});	
});

// Photo Modal
$(function() {
	$('.photog-group').on('click', '.cap-bot', function() {
		$('#myModal').modal('show');
		$('#MyCarousel').carousel($(this).index()); 
	});	
});

// Equipment Modal
$(function() {
	$('.photog-group').on('click', '.cap-bot', function() {
		$('#myModal').modal('show');
		$('#MyCarousel').carousel($(this).index()); 
	});	
});