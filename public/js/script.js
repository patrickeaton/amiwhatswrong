$(document).ready(function(){

	// auto adjust the height of
	$('.autoresize').keyup(function (){
    	$(this).height( this.scrollHeight );
	});
	$('.autoresize').keyup();

	$('input').focus(function(){
		$(this).removeClass("error");
		$(this).removeClass("success");
		$(this).addClass("focus");
		if($(this).val() == $(this).attr("rel")){
			$(this).val("");
		}
	});
	
	$('input').blur(function(){
		$(this).removeClass("focus");
		if($(this).val() == ""){
			$(this).val($(this).attr("rel"));
		}
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if($(this).val() == $(this).attr("rel") || ( $(this).attr("id") == "email" && !re.test($(this).val()))){
			$(this).addClass("error");
			
		}else $(this).addClass("success");
	});
	
		$('textarea').focus(function(){
		$(this).removeClass("error");
		$(this).removeClass("success");
		$(this).addClass("focus");
		if($(this).val() == $(this).attr("rel")){
			$(this).val("");
		}
	});
	
	
	$('textarea').blur(function(){
		$(this).removeClass("focus");
		if($(this).val() == ""){
			$(this).val($(this).attr("rel"));
		}
		
		if($(this).val() == $(this).attr("rel")){
			$(this).addClass("error");
			
		}else $(this).addClass("success");
	});
	
	$(".submit").click(function(){
		$(".validate").blur();
		var valid = true;
		$(".validate").each(function(){
			if($(this).hasClass("error"))
				valid = false
		});
	
		if(valid){
			$.ajax( "lib/mail.php?name="+ $("#name").val() +"&email=" + $("#email").val() +"&sendto=" + $("#sendto").val() +"&phone="+ $("#phone").val() + "&message="+ $("#message").val());
			$('.contact_form').fadeOut(500,function(){$('.contact_thanks').fadeIn(500)});
			
			
		}
	});
		
	
});