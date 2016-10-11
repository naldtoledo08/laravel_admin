$(document).ready(function(){

 	
 	is_parent_check();

    $('#is_parent').click(function() {
        is_parent_check();
    });
    
    function is_parent_check(){
    	if (!$('#is_parent').is(':checked')) {
            $(".div-url").fadeIn();
            $(".div-parent").fadeIn();
        }else{
        	$(".div-url").fadeOut();
            $(".div-parent").fadeOut();
        }
    }

});