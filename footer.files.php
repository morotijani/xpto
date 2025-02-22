

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

	 <style>
        .cookie-wrapper {
            position: fixed; 
            bottom: 50px; 
            right: -370px; 
            max-width: 345px; 
            width: 100%;
            transition: right 0.3s ease;
            z-index: 2;
        }

        .cookie-wrapper.show { 
            right: 20px;
        }
    </style>
    <div class="cookie-wrapper card w-75 bg-soft-warning">
        <div class="card-body">
            <h5 class="card-title">Cookies Consent</h5>
            <p class="card-text">This website uses cookies to ensure you get the best experience on our website. <a class="" href="#">Learn more</a>
			</p>
            <button class="btn btn-sm btn-outline-dark cookie-button" id="acceptBtn">Accept</button>
        </div>
    </div>

	<?= $flash_user; ?>

	<script src="<?= PROOT; ?>assets/js/jquery-3.7.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


	<script src="<?= PROOT; ?>assets/js/vendor.min.js"></script>
	<script src="<?= PROOT; ?>assets/js/theme.min.js"></script>

	<!-- JS Plugins Init. -->
	<script>
		// Fade out messages 
		$("#temporary").fadeOut(5000);

		// validate email
		function isEmail(email) { 
            return /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(email);
        }

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

		})()

		// setting cookie 
		const cookieBox = document.querySelector('.cookie-wrapper'),
			buttons = document.getElementsByTagName('button');

		const executeCodes = () => {
			if (document.cookie.includes("xpto")) return;
			
				cookieBox.classList.add("show");

				Array.from(buttons).forEach((button) => {
					button.addEventListener("click", () => {
						cookieBox.classList.remove("show");

						// check if accept button was cliked to set the cookie
						if (button.id == "acceptBtn") {
							// set cookie for 1 month
							document.cookie = "xptoCookieFrom= xpto; max-age=" + 60 * 60 *24 * 30;
						}
					})
				})
			}

        // executeCodes function will be called on webpage load
        window.addEventListener("load", executeCodes);
    </script>
</body>
</html>
