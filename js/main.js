//Menu
$(function(){
	var nav = $('#menu-site');   
	$(window).scroll(function () { 
		if ($(this).scrollTop() > 300) { 
			nav.addClass("menu-fixed");
			$("nav#menu-site a.logo").css({'display':'block'}); 
		} else { 
			nav.removeClass("menu-fixed");
			$("nav#menu-site a.logo").css({'display':'none'}); 
		} 
	});
});


$(function(){
	//Menu
	$('.menu-anchor').on('click', function(){
	    $('html').toggleClass('menu-active');
	    $('.container').on('click', function(){
	    	$('html').removeClass('menu-active');
	    });
	});

});

