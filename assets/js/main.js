// header slider
$('.owl-carousel.header-carousel').owlCarousel({
	loop: true,
	margin: 10,
	nav: true,
	items: 1,
	dots: true,
	autoplay:true,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
	navText : ["<i class='material-icons'>chevron_left</i>","<i class='material-icons'>chevron_right</i>"],	
})

$('.live-carousel').owlCarousel({
	loop: true,
	margin: 10,
	nav: true,
	items: 1,	
	dots: false,
	stagePadding: 50,
	video: true,
	lazyLoad: true,
	center:true,
	video:true,
	navText : ["<i class='material-icons'>chevron_left</i>","<i class='material-icons'>chevron_right</i>"],
	responsive:{
        0:{
        },
        320:{
        	stagePadding: 0,
        },
        768:{
        },
        1024:{
        }
    }
})

$('.btnLiveModal').on('click', function() {
	$('#modalLive').modal('show');
	var gameId = (this).getAttribute("data-gameId");
	var urlVideo = (this).getAttribute("data-url");
	$("#ifid").prop("src",urlVideo);
})