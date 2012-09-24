$(function(){

// For add an opacity, add class="opa"

$(function(){ //OPACITY
	$(".opa").hover( function () {
$(this).animate({ opacity: 0.8 }, 100 );
		}, 
  function () {
    $(this).animate({ opacity: 1 }, 50 );
  }
);
});

});