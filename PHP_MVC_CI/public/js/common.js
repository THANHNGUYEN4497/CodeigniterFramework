$(document).ready(function(){
	$('#slider_banner').owlCarousel({
		items:1,
	    margin:10,
	    loop: true,
	    autoplay:true,
    	autoplayTimeout:4500,
	    navigation:true,
	    dots: true,
	    nav:true,
	    autoHeight:true,
	    responsiveClass:true
	});
	$('#productIntro').owlCarousel({
		margin: 0,
	    loop: true,
	    autoplay:true,
    	autoplayTimeout:4500,
    	autoHeight:true,
    	nav:true,
    	dots: false,
	    responsiveClass:true,
	    responsive:{
	    	1280:{
	            items:5
	        },
	        1024:{
	            items:4
	        },
	        720:{
	            items:3
	        },
	        576:{
	            items:2
	        },
	        0:{
	            items:2
	        }
	    }
	});
})