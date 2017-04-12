

$(document).ready(function(){

    $(".scrollbutton").click(function(){
	$("html").animate({ scrollTop: 0 }, "slow");
	
    });


	$(".printpage").click(function(){
		window.print();

	});

	$(document).bind("contextmenu",function(e){

		return false;
	});


	$('img').one('error', function() { this.src = 'swirl_pattern.png'; });
	//onerror='$(this).hide();'
	

	
	$("input[type=submit]").attr('disabled','disabled');

	$(".blinktext").hover(function(){
		$(this).fadeIn("slow");
		$(this).fadeOut("slow");
		$(this).fadeIn("slow");

	});


	$("tr:odd").addClass("odd");
	$("tr:even").addClass("even");

});
