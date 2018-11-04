(function( $ ) {

	/**** Hidden search box ***/
	jQuery('document').ready(function($){
		jQuery('.search-box span i').click(function(){
	        jQuery(".serach_outer").slideDown(700);
	    });

	    jQuery('.closepop i').click(function(){
	        jQuery(".serach_outer").slideUp(700);
	    });
	});
})( jQuery );


function loadProductDetails(i) {
  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("prod"+i+"").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "prod"+i+".txt", true);
  xhttp.send();
}