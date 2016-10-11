$(document).ready(function(){

 	$('.dataTables').DataTable({
            responsive: true
    });


    $(".dataTables").on('click','a.btn-remove-data',function(e){
    	e.preventDefault();

    	console.log($(this).data("apiurl"));
    	$( "#dialog-confirm" ).dialog({
	      resizable: false,
	      height: "auto",
	      width: 400,
	      modal: true,
	      buttons: {
	        "Delete all items": function() {
	          $( this ).dialog( "close" );
	          alert("deleted");
	        },
	        Cancel: function() {
	          $( this ).dialog( "close" );
	        }
	      }
	    });


    	return false;
    });


});