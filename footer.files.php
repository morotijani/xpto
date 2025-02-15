

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
	<script src="<?= PROOT; ?>assets/js/vendor.min.js"></script>
	<script src="<?= PROOT; ?>assets/js/theme.min.js"></script>

	<!-- JS Plugins Init. -->
	<script>
		(function() {
			// INITIALIZATION OF MEGA MENU
			// =======================================================
			const megaMenu = new HSMegaMenu('.js-mega-menu', {
				desktop: {
					position: 'left'
				}
			})


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


			// INITIALIZATION OF GO TO
			// =======================================================
			new HSGoTo('.js-go-to')
		})()
    </script>
</body>
</html>