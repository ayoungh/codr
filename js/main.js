(function($) {

    window.app = {



        init: function() {

            // add any init calls here to run on page load...
            
            window.app.other_func();
            
            window.app.open_js_options_panel();
            
            window.app.toggle_fullscreen();

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
			     
		     }//end of if
		     

	      });
	      
	      
	        
        },
        
        toggle_fullscreen: function () {
	        
			$('.fullscreen').click(function(){
			
				if($(this).hasClass('off')) {
					fullScreen();
					$(this).addClass('on').removeClass('off');
				} else {
					exitfullScreen()
					$(this).addClass('off').removeClass('on');
				}
				return false;
			});	        
	        
			function fullScreen(){
				$('#outputWrapper').css({
					"width": "100%",
					"height": "100%"
				});
				
				$('#html_section, #css_section, #js_section').hide();

			}
			
			function exitfullScreen(){
				$('#outputWrapper').css({
					"width": "100%",
					"height": "100%"
					
				});

				$('#html_section, #css_section, #js_section').show();

			}	        
	        
	        
	        
        }





    }; //end of object window.app



    $(document).ready(function() {

        window.app.init();

        
    });



})(jQuery);

$(window).load(function(){


	$('.js_options').hide();



});



