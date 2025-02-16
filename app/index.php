<?php
    require ("../system/DatabaseConnector.php");
    $newFont = "yes";
    include ("../head.php");
    

?>

    <header id="header" class="navbar navbar-expand-lg navbar-light navbar-end bg-white">
        <div class="container">
            <nav class="js-mega-menu navbar-nav-wrap">
                <a class="navbar-brand" href="<?= PROOT; ?>app/" aria-label="Space">
                    <img class="navbar-brand-logo" src="<?= PROOT; ?>assets/media/logo.svg" style="width: auto; height: 80px;" alt="Image Description">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-default">
                        <i class="bi-list"></i>
                    </span>
                    <span class="navbar-toggler-toggled">
                        <i class="bi-x"></i>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="hs-has-mega-menu nav-item">
                            <a id="landingsMegaMenu" class="nav-link active" aria-current="page" href="#" role="button" aria-expanded="false"><i class="bi-twitter me-1"></i></a>
                        </li>
                        <li class="hs-has-mega-menu nav-item">
                            <a id="landingsMegaMenu" class="nav-link active" aria-current="page" href="#" role="button" aria-expanded="false"><i class="bi-facebook me-1"></i></a>
                        </li>
                    
                        <li class="nav-divider"></li>

                        <li class="nav-item">
                            <a class="js-animation-link btn btn-ghost-secondary btn-no-focus me-2 me-lg-0" href="<?= PROOT; ?>auth/login">Deposite</a>
                            <a class="js-animation-link d-lg-none btn btn-primary" href="<?= PROOT; ?>auth/signup">
                                <i class="bi-sign-turn-slight-right me-1"></i> Withdraw
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="js-animation-link d-none d-lg-inline-block btn btn-primary" href="<?= PROOT; ?>auth/signup">
                                <i class="bi-sign-turn-slight-right me-1"></i> Withdraw
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    
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
                                            <span class="step-icon step-icon-soft-secondary">
                                                <img class="" src="<?= PROOT; ?>assets/media/send-crypto.png" width="100" height="100">
                                            </span>
                                            <div class="step-content">
                                                <h6 class="step-title">Send Crypto</h6>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="step-item" role="presentation">
                                        <a class="step-content-wrapper" href="#stepFeaturesTwo" id="stepFeaturesTwo-tab" data-bs-toggle="tab" data-bs-target="#stepFeaturesTwo" role="tab" aria-controls="stepFeaturesTwo" aria-selected="false">
                                            <span class="step-icon step-icon-soft-secondary">
                                                <img class="" src="<?= PROOT; ?>assets/media/receive-crypto.png" width="100" height="100">
                                            </span>
                                            <div class="step-content">
                                                <h6 class="step-title">Recieve crypto</h6>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="step-item" role="presentation">
                                        <a class="step-content-wrapper" href="#stepFeaturesThree" id="stepFeaturesThree-tab" data-bs-toggle="tab" data-bs-target="#stepFeaturesThree" role="tab" aria-controls="stepFeaturesThree" aria-selected="false">
                                            <span class="step-icon step-icon-soft-secondary">
                                                <img class="" src="<?= PROOT; ?>assets/media/transaction-history.png" width="100" height="100">
                                            </span>
                                            <div class="step-content">
                                                <h6 class="step-title">Transaction history</h6>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="step-item" role="presentation">
                                        <a class="step-content-wrapper" href="#stepFeaturesThree" id="stepFeaturesThree-tab" data-bs-toggle="tab" data-bs-target="#stepFeaturesThree" role="tab" aria-controls="stepFeaturesThree" aria-selected="false">
                                            <span class="step-icon step-icon-soft-secondary">
                                                <img class="" src="<?= PROOT; ?>assets/media/profile.png" width="100" height="100">
                                            </span>
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
