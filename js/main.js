
$(document).ready(function(){

	$('li.li-parent>a').append('<i class="fa fa-caret-down"></i>');
	if($(window).width()<768){
		$(".but .menu-reposive").click(function(){
      		$(".menu").slideToggle('slow');
		});

		$(".li-parent>a>i").click(function(e){
			e.preventDefault(); 
			$(this).parent().parent().children(".menucon").slideToggle('slow');
		});

	}
    
    

	
});












