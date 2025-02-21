<?php
    require ("../system/DatabaseConnector.php");
	$newFont = "default";
    include ("../head.php");

?>

	<!-- ========== MAIN CONTENT ========== -->
	<main id="content" role="main">
		<div class="bg-soft-primary-light">
			<div class="container content-space-1 content-space-t-md-3">
				<div class="mx-auto" style="max-width: 30rem;">
					<div class="card card-lg zi-2">
						<div class="card-header text-center">
							<h4 class="card-title">Create you account here.</h4>
							<p class="card-text">Enter your email address and click next to enter your password to login.</p>
						</div>

						<div class="card-body">
							<form class="js-validate need-validate" novalidate>

								<ul class="step step-sm step-icon-sm step-centered" id="step-TabFeatures" role="tablist">
									<li class="step-item" role="presentation">
										<a class="step-content-wrapper active" href="#stepEmail" id="stepEmail-tab" data-bs-toggle="tab" data-bs-target="#stepEmail" role="tab" aria-controls="stepEmail" aria-selected="truesetup_step_one" onclick="setup_step_one()">
											<span class="step-icon step-icon-soft-secondary">1</span>
											<div class="step-content">
												<h6 class="step-title">Personal</h6>
											</div>
										</a>
									</li>

									<li class="step-item" role="presentation">
										<a class="step-content-wrapper" href="#stepPassword" id="stepPassword-tab" data-bs-toggle="tab" data-bs-target="#stepPassword" role="tab" aria-controls="stepPassword" aria-selected="false" onclick="setup_step_two()">
											<span class="step-icon step-icon-soft-secondary">2</span>
											<div class="step-content">
												<h6 class="step-title">Security</h6>
											</div>
										</a>
									</li>
								</ul>

								<!-- Form -->
								<div id="step-one">
									<div class="mb-4">
										<label class="form-label" for="forgotPasswordFormEmail">Your Full name</label>
										<input type="text" autocomplete="off" class="form-control form-control-lg" name="fullname" id="fullname" placeholder="Enter your full name" aria-label="Enter your email address" required>
										<span class="invalid-feedback">Please enter your full name.</span>
									</div>
                                    <div class="mb-4">
										<label class="form-label" for="forgotPasswordFormEmail">Your email</label>
										<input type="email" autocomplete="off" class="form-control form-control-lg" name="email" id="email" placeholder="Enter your email address" aria-label="Enter your email address" required>
										<span class="invalid-feedback">Please enter a valid email address.</span>
									</div>

									<div class="d-grid mb-4">
										<button type="button" id="next-button" onclick="setup_step_two()" class="btn btn-primary btn-lg">Next ></button>
									</div>
								</div>

								<div id="step-two" class="d-none">
									<div class="mb-4">
										<label class="form-label" for="password">Your Password</label>
										<input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="***" aria-label="Enter your password" required>
										<span class="invalid-feedback">Please enter a valid password address.</span>
									</div>
                                    <div class="mb-4">
										<label class="form-label" for="password">Confirm Password</label>
										<input type="password" class="form-control form-control-lg" name="confirm" id="confirm" placeholder="***" aria-label="Enter your password" required>
										<span class="invalid-feedback">Please enter a valid password address.</span>
									</div>

                                    <div class="mb-4">
										<label class="form-label" for="password">Your 4 digit PIN</label>
										<input type="password" class="form-control form-control-lg" name="pin" id="pin" placeholder="" aria-label="Enter your four (4) digit pin" required>
										<span class="invalid-feedback">Please enter a valid password address.</span>
									</div>

									<div class="d-grid mb-4">
										<button type="button" id="submit-button" class="btn btn-primary btn-lg">Submit</button>
									</div>
								</div>


								<div class="text-center">
									<a class="btn btn-link" href="<?= PROOT; ?>auth/login">
										<i class="bi-chevron-left small me-1"></i> Already have an account ?
									</a>
									<br>
									<small><a href="<?= PROOT; ?>index" class="text-dark">Go home.</a></small>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Shape -->
		<div class="shape-container">
			<div class="shape shape-bottom zi-1">
				<svg viewBox="0 0 3000 600" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M0 600V350.234L3000 0V600H0Z" fill="#fff" />
				</svg>
			</div>
		</div>

   	</main>

	<?php include ("../footer.files.php"); ?>

	<script>
		// $(document).ready(function() {
            function setup_step_two() {
                if (($('#fullname').val() == '')) {
                    $('#fullname').focus();
                    alert('Invalid Full name provided!');
                    return false;
                }

                if (($('#email').val() == '')) {
                    $('#email').focus();
                    alert('Your email is requred!');
                    return false;
                }

				$('#stepEmail-tab').removeClass('active');
				$('#stepPassword-tab').addClass('active');
				
				$('#step-one').addClass('d-none');
				$('#step-two').removeClass('d-none');
                $('#password').focus();
			}

            function setup_step_one() {
				$('#stepEmail-tab').addClass('active');
				$('#stepPassword-tab').removeClass('active');

				$('#step-one').removeClass('d-none');
				$('#step-two').addClass('d-none');
			}

            $('#submit-button').on('click', function(e) {
                e.preventDefault()

                if ($('#password').val() == '') {
                    $('#password').focus();
                    alert('Password is required!');
                    return false;
                }

                if ($('#password').val().length < 6) {
                    $('#password').focus();
                    alert('Password characters must be 6 or more!');
                    return false;
                }

                if ($('#confirm').val() == '') {
                    $('#confirm').focus();
                    alert('Confirm password is required!');
                    return false;
                }

                if ($('#confirm').val() != $('#password').val()) {
                    $('#confirm').focus();
                    alert('Password and Confirm password must match!');
                    return false;
                }

                if ($('#pin').val() == '') {
                    $('#pin').focus();
                    alert('Pin is required!');
                    return false;
                }

                if ($('#pin').val().length != 4) {
                    $('#pin').focus();
                    alert('PIN must 4 be digits!');
                    return false;
                }
            })
		// })
	</script>
