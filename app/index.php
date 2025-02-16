<?php
    require ("../system/DatabaseConnector.php");
    include ("../head.php");

?>

	<!-- ========== MAIN CONTENT ========== -->
	<main id="content" role="main">


		<div class="bg-soft-primary-light">





        <div class="container content-space-1 content-space-t-md-3">
				<div class="mx-auto">
					<div class="card card-lg zi-2" >
						<div class="card-header text-center">
							<h4 class="card-title">Balance: $ 8943.00</h4>
							<p class="card-text">Bitcoin: $5644.44</p>
						</div>

						<div class="card-body">




                        <div class="pe-md-5">

                                                <!-- Step -->
                                                <ul class="step step-sm step-icon-sm step-centered step-border-last-0" id="step-TabFeatures" role="tablist">
                                                    <li class="step-item" role="presentation">
                                                        <a class="step-content-wrapper active" href="#stepFeaturesOne" id="stepFeaturesOne-tab" data-bs-toggle="tab" data-bs-target="#stepFeaturesOne" role="tab" aria-controls="stepFeaturesOne" aria-selected="true">
                                                            <span class="step-icon step-icon-soft-secondary">1</span>
                                                            <div class="step-content">
                                                                <h6 class="step-title">Send Crypto</h6>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li class="step-item" role="presentation">
                                                        <a class="step-content-wrapper" href="#stepFeaturesTwo" id="stepFeaturesTwo-tab" data-bs-toggle="tab" data-bs-target="#stepFeaturesTwo" role="tab" aria-controls="stepFeaturesTwo" aria-selected="false">
                                                            <span class="step-icon step-icon-soft-secondary">2</span>
                                                            <div class="step-content">
                                                                <h6 class="step-title">Recieve crypto</h6>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li class="step-item" role="presentation">
                                                        <a class="step-content-wrapper" href="#stepFeaturesThree" id="stepFeaturesThree-tab" data-bs-toggle="tab" data-bs-target="#stepFeaturesThree" role="tab" aria-controls="stepFeaturesThree" aria-selected="false">
                                                            <span class="step-icon step-icon-soft-secondary">3</span>
                                                            <div class="step-content">
                                                                <h6 class="step-title">Transaction history</h6>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li class="step-item" role="presentation">
                                                        <a class="step-content-wrapper" href="#stepFeaturesThree" id="stepFeaturesThree-tab" data-bs-toggle="tab" data-bs-target="#stepFeaturesThree" role="tab" aria-controls="stepFeaturesThree" aria-selected="false">
                                                            <span class="step-icon step-icon-soft-secondary">4</span>
                                                            <div class="step-content">
                                                                <h6 class="step-title">Hi Amin!</h6>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>








                            
                        <!-- Features Step -->
                            <div class="overflow-hidden">
                                <div class="container content-space-b-1 content-space-b-md-3 mt-4">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8 order-md-2 mb-7 mb-md-0">
                                            <!-- Tab Content -->
                                            <div class="tab-content" id="step-TabFeaturesContent">
                                                <div class="tab-pane fade show active" id="stepFeaturesOne" role="tabpanel" aria-labelledby="stepFeaturesOne-tab">
                                        
							                        <form class="js-validate need-validate border p-2" novalidate>

                                                        <ul class="step step-sm step-icon-sm step-centered" id="step-TabFeatures" role="tablist">
                                                            <li class="step-item" role="presentation">
                                                                <a class="step-content-wrapper active" href="#stepEmail" id="stepEmail-tab" data-bs-toggle="tab" data-bs-target="#stepEmail" role="tab" aria-controls="stepEmail" aria-selected="true">
                                                                    <span class="step-icon step-icon-soft-secondary">1</span>
                                                                    <div class="step-content">
                                                                        <h6 class="step-title">Send Crypto</h6>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="step-item" role="presentation">
                                                                <a class="step-content-wrapper" href="#stepPassword" id="stepPassword-tab" data-bs-toggle="tab" data-bs-target="#stepPassword" role="tab" aria-controls="stepPassword" aria-selected="false">
                                                                    <span class="step-icon step-icon-soft-secondary">2</span>
                                                                    <div class="step-content">
                                                                        <h6 class="step-title">Summary</h6>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="step-item" role="presentation">
                                                                <a class="step-content-wrapper" href="#stepPassword" id="stepPassword-tab" data-bs-toggle="tab" data-bs-target="#stepPassword" role="tab" aria-controls="stepPassword" aria-selected="false">
                                                                    <span class="step-icon step-icon-soft-secondary">2</span>
                                                                    <div class="step-content">
                                                                        <h6 class="step-title">Confirm trnsaction</h6>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>

                                                        <!-- Form -->
                                                        <div id="step-one">
                                                            <div class="mb-4">
                                                                <label class="form-label" for="forgotPasswordFormEmail">Crypto</label>
                                                                <input type="email" autocomplete="off" class="form-control form-control-lg" name="forgotPasswordEmailName" id="forgotPasswordFormEmail" placeholder="Enter your email address" aria-label="Enter your email address" required>
                                                                <span class="invalid-feedback">Please enter a valid email address.</span>
                                                            </div>

                                                            <div class="mb-4">
                                                                <label class="form-label" for="forgotPasswordFormEmail">Address</label>
                                                                <input type="email" autocomplete="off" class="form-control form-control-lg" name="forgotPasswordEmailName" id="forgotPasswordFormEmail" placeholder="Enter your email address" aria-label="Enter your email address" required>
                                                                <span class="invalid-feedback">Please enter a valid email address.</span>
                                                            </div>

                                                            <div class="mb-4">
                                                                <label class="form-label" for="forgotPasswordFormEmail">Amount</label>
                                                                <input type="email" autocomplete="off" class="form-control form-control-lg" name="forgotPasswordEmailName" id="forgotPasswordFormEmail" placeholder="Enter your email address" aria-label="Enter your email address" required>
                                                                <span class="invalid-feedback">Please enter a valid email address.</span>
                                                            </div>

                                                            <div class="d-grid mb-4">
                                                                <button type="button" id="next-button" class="btn btn-primary btn-lg">Next ></button>
                                                            </div>
                                                        </div>

                                                        <div id="step-two" class="d-none">
                                                            <div class="mb-4">
                                                                <label class="form-label" for="password">Your Password</label>
                                                                <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="***" aria-label="Enter your password" required>
                                                                <span class="invalid-feedback">Please enter a valid password address.</span>
                                                            </div>

                                                            <div class="d-grid mb-4">
                                                                <button type="button" id="submit-button" class="btn btn-primary btn-lg">Submit</button>
                                                            </div>
                                                        </div>


                                                        <div class="text-center">
                                                            <a class="btn btn-link" href="./page-login.html">
                                                                <i class="bi-chevron-left small me-1"></i> Don't have an account ?
                                                            </a>
                                                            <br>
                                                            <small><a href="<?= PROOT; ?>index" class="text-dark">Go home.</a></small>
                                                        </div>
                                                    </form>
                                                </div>

                                                <div class="tab-pane fade" id="stepFeaturesTwo" role="tabpanel" aria-labelledby="stepFeaturesTwo-tab">
                                                    receice
                                                </div>

                                                <div class="tab-pane fade" id="stepFeaturesThree" role="tabpanel" aria-labelledby="stepFeaturesThree-tab">
                                                    <table></table>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
		$(document).ready(function() {
			$('#next-button').on('click', function(e) {

				$('#stepEmail-tab').removeClass('active');
				$('#stepPassword-tab').addClass('active');
				
				$('#step-one').addClass('d-none');
				$('#step-two').removeClass('d-none');
			})

			$('#stepEmail-tab').on('click', function(e) {

				$('#stepEmail-tab').addClass('active');
				$('#stepPassword-tab').removeClass('active');

				$('#step-one').removeClass('d-none');
				$('#step-two').addClass('d-none');
			})

			$('#stepPassword-tab').on('click', function(e) {

				$('#stepEmail-tab').removeClass('active');
				$('#stepPassword-tab').addClass('active');

				$('#step-one').addClass('d-none');
				$('#step-two').removeClass('d-none');
			})
		})
	</script>
