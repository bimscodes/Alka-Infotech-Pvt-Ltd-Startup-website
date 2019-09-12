
$(document).ready(function(){
	
	$(".inner-template").parents().find('body').addClass("inner-template");
	
	$(".contact-page").parents().find('body').addClass("contact-page");
        
        if (navigator.userAgent.search("MSIE") >= 0) {                    
                $(".navbar-brand img").attr("src","assets/images/logo.png");  
                $(".home-info .logo").attr("src","assets/images/logo.png");
        }
	
});