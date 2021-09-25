;(function(){
			/* ==============================================
			LOADER -->
			=============================================== */

			$(window).load(function() {
				$("#preloader").on(500).fadeOut();
				$(".preloader").on(600).fadeOut("slow");
			});

			// Menu settings
			$('#menuToggle, .menu-close').on('click', function(){
				$('#menuToggle').toggleClass('active');
				$('body').toggleClass('body-push-toleft');
				$('#theMenu').toggleClass('menu-open');
			});


})(jQuery)