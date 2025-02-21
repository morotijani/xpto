

    <!-- Go To -->
    <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;" data-hs-go-to-options='{
            "offsetTop": 700,
            "position": {
            "init": {
                "right": "2rem"
            },
            "show": {
                "bottom": "2rem"
            },
            "hide": {
                "bottom": "-2rem"
            }
            }
        }'>
        <i class="bi-chevron-up"></i>
 	</a>

	<script src="<?= PROOT; ?>assets/js/jquery-3.7.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


	<script src="<?= PROOT; ?>assets/js/vendor.min.js"></script>
	<script src="<?= PROOT; ?>assets/js/theme.min.js"></script>

	<!-- JS Plugins Init. -->
	<script>
		(function() {

			// INITIALIZATION OF SHOW ANIMATIONS
			// =======================================================
			new HSShowAnimation('.js-animation-link')


			// INITIALIZATION OF BOOTSTRAP VALIDATION
			// =======================================================
			HSBsValidation.init('.js-validate', {
			onSubmit: data => {
				data.event.preventDefault()
				alert('Submited')
			}
			})

			// INITIALIZATION OF TOGGLE PASSWORD
			// =======================================================
			new HSTogglePassword('.js-toggle-password')


			// INITIALIZATION OF GO TO
			// =======================================================
			new HSGoTo('.js-go-to')

			// INITIALIZATION OF SWIPER
    		// =======================================================
			var equalHeight = new Swiper('.js-swiper-equal-height', { 
				autoplay: {
					delay: 2000,
					disableOnInteraction: false,
				},
				pagination: {
					el: '.js-swiper-equal-height-pagination',
					clickable: true,
				},
				breakpoints: {
					320: {
						slidesPerView: 1,
						spaceBetween: 15,
					},
					580: {
						slidesPerView: 2,
						spaceBetween: 15,
					},
					768: {
						slidesPerView: 3,
						spaceBetween: 15,
					},
					1024: {
						slidesPerView: 4,
						spaceBetween: 15,
					},
				}
			});

			 // INITIALIZATION OF SHOW ANIMATIONS
        // =======================================================
        new HSShowAnimation('.js-animation-link')



		})()
    </script>
</body>
</html>