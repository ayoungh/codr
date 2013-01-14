(function($) {

    window.app = {



        init: function() {

            // add any init calls here to run on page load...
            
            window.app.other_func();
            
            window.app.open_js_options_panel();
            

        },



        // add site specific functions here


        other_func: function() {
	        
        },
        
        
        
        open_js_options_panel: function () {
	      
	      $('li.js_options_btn').click(function(){
		     
		     
		     
		     if ($(this).hasClass('active')){
			     
			     $('.js_options').hide();
			     
			     $(this).removeClass('active');
			     
		     } else {
			     
			     $('.js_options').show();
			     
			     $(this).addClass('active');
			     
		     }
		     
		     
		     
		     
		      
	      });
	      
	      
	        
        }





    }; //end of object window.app



    $(document).ready(function() {

        window.app.init();

        
    });



})(jQuery);

$(window).load(function(){


	$('.js_options').hide();



});



