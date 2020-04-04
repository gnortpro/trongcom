var chieucao;
$(window).scroll(function () {
        chieucao = $(window).scrollTop();
        if(chieucao>108){
			$(".menu-function").addClass('fixed-bar');
		} else{
			$(".menu-function").removeClass('fixed-bar');
		}
		if(chieucao>700){
			$(".most-view").css({"position": "fixed", "top" : "10px", "width":"25%"});
			
		} else{
			$(".most-view").css({"position": "unset", "top" : "0px", "width":"100%"});
		}
		if (chieucao>90) {
			// $( ".main-header" ).addClass( "navbar-fixed-top" );
			// $("form.navbar-form.navbar-right").css("display","block");
			
		} else{
			// $("form.navbar-form.navbar-right").css("display","none");
			// $( ".main-header" ).removeClass( "navbar-fixed-top" );
		}
});
