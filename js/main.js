(function($) {

    window.app = {



        init: function() {

            // add any init calls here to run on page load...
            
            window.app.other_func();

        },



        // add site specific functions here


        other_func: function() {
	        
        }





    }; //end of object window.app



    $(document).ready(function() {

        window.app.init();

        
    });



})(jQuery);

$(window).load(function(){




});



