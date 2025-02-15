<?php
    require ("../system/DatabaseConnector.php");
    include ("../head.php");

?>

	<!-- ========== MAIN CONTENT ========== -->
	<main id="content" role="main">


		<div class="bg-soft-primary-light">


        <div class="mt-4 mb-6 mb-xl-10"><div class="row g-3 align-items-center bg-danger"><div class="col"><h1 class="ls-tight">Dashboard</h1></div><div class="col"><div class="hstack gap-2 justify-content-end"><button type="button" class="btn btn-sm btn-square btn-neutral rounded-circle d-xxl-none" data-bs-toggle="offcanvas" data-bs-target="#responsiveOffcanvas" aria-controls="responsiveOffcanvas"><i class="bi bi-three-dots"></i></button> <button type="button" class="btn btn-sm btn-neutral d-none d-sm-inline-flex" data-bs-target="#depositLiquidityModal" data-bs-toggle="modal"><span class="pe-2"><i class="bi bi-plus-circle"></i> </span><span>Liquidity</span></button> <a href="/pages/page-overview.html" class="btn d-inline-flex btn-sm btn-dark"><span>Trade</span></a></div></div></div></div>

        <div class="row g-3">
        <div class="col-md col-sm-6">
            <div class="card border-primary-hover bg-soft-warning">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center gap-2">
                        <img src="<?= PROOT; ?>assets/media/svg/btc.svg" class="w-rem-5 flex-none" alt="..."> 
                        <a href="/pages/page-details.html" class="h6 stretched-link">BTC</a>
                    </div>
                    <div class="text-sm fw-semibold mt-3">3.2893 USDT</div>
                    <div class="d-flex align-items-center gap-2 mt-1 text-xs">
                        <span class="badge badge-xs bg-success">
                            <i class="bi bi-arrow-up-right"></i> </span>
                            <span>+13.7%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md col-sm-6">
                <div class="card border-primary-hover bg-soft-warning">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center gap-2">
                            <img src="../../img/crypto/icon/ada.svg" class="w-rem-5 flex-none" alt="..."> 
                            <a href="/pages/page-details.html" class="h6 stretched-link">ADA</a></div><div class="text-sm fw-semibold mt-3">10.745,49 ADA</div><div class="d-flex align-items-center gap-2 mt-1 text-xs"><span class="badge badge-xs bg-danger"><i class="bi bi-arrow-up-right"></i> </span><span>-3.2%</span></div></div></div></div><div class="col-md col-sm-6"><div class="card border-primary-hover"><div class="card-body p-4"><div class="d-flex align-items-center gap-2"><img src="../../img/crypto/icon/eos.svg" class="w-rem-5 flex-none" alt="..."> <a href="/pages/page-details.html" class="h6 stretched-link">EOS</a></div><div class="text-sm fw-semibold mt-3">7.890,00 EOS</div><div class="d-flex align-items-center gap-2 mt-1 text-xs"><span class="badge badge-xs bg-danger"><i class="bi bi-arrow-up-right"></i> </span><span>-2.2%</span></div></div></div></div><div class="col-md-1 d-none d-md-block"><div class="card h-md-100 d-flex flex-column align-items-center justify-content-center py-4 bg-body-secondary bg-opacity-75 bg-opacity-100-hover"><a href="#cryptoModal" class="stretched-link text-body-secondary" data-bs-toggle="modal"><i class="bi bi-plus-lg"></i></a></div></div></div>




        <div class="container content-space-1 content-space-t-md-3">
				<div class="mx-auto">
					<div class="card card-lg zi-2">
						<div class="card-header text-center">
							<h4 class="card-title">xpto experience.</h4>
							<p class="card-text">road to your financial freedom.</p>
						</div>

						<div class="card-body">
                            
                        <!-- Features Step -->
                            <div class="overflow-hidden">
                                <div class="container content-space-b-1 content-space-b-md-3">
                                    <div class="row align-items-md-center">
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

          <div class="col-md-4 mt-5 mt-md-0">
            <div class="pe-md-5">
              <!-- Heading -->
              <div class="mb-7">
                <span class="text-cap">Menu</span>
                <h3>Easy navigation</h3>
              </div>
              <!-- End Heading -->

              <!-- Step -->
              <ul class="nav step step-icon-sm step-border-last-0" id="step-TabFeatures" role="tablist">
                <li class="step-item" role="presentation">
                  <a class="step-content-wrapper active" href="#stepFeaturesOne" id="stepFeaturesOne-tab" data-bs-toggle="tab" data-bs-target="#stepFeaturesOne" role="tab" aria-controls="stepFeaturesOne" aria-selected="true">
                    <span class="step-icon step-icon-soft-secondary">1</span>
                    <div class="step-content">
                      <h6 class="step-title">Send Crypto</h6>
                      <p class="step-text">Select your crypto and provide a receiving address to send crypto.</p>
                    </div>
                  </a>
                </li>

                <li class="step-item" role="presentation">
                  <a class="step-content-wrapper" href="#stepFeaturesTwo" id="stepFeaturesTwo-tab" data-bs-toggle="tab" data-bs-target="#stepFeaturesTwo" role="tab" aria-controls="stepFeaturesTwo" aria-selected="false">
                    <span class="step-icon step-icon-soft-secondary">2</span>
                    <div class="step-content">
                      <h6 class="step-title">Recieve crypto</h6>
                      <p class="step-text">Automate best strategies and focus more on generating hq creatives.</p>
                    </div>
                  </a>
                </li>

                <li class="step-item" role="presentation">
                  <a class="step-content-wrapper" href="#stepFeaturesThree" id="stepFeaturesThree-tab" data-bs-toggle="tab" data-bs-target="#stepFeaturesThree" role="tab" aria-controls="stepFeaturesThree" aria-selected="false">
                    <span class="step-icon step-icon-soft-secondary">3</span>
                    <div class="step-content">
                      <h6 class="step-title">Transaction history</h6>
                      <p class="step-text">Find what you need in one template and combine features at will.</p>
                    </div>
                  </a>
                </li>
              </ul>
              <!-- End Step -->

              <a class="link" href="#">Logout <i class="bi-chevron-right small ms-1"></i></a>
            </div>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
    </div>
    <!-- End Features Step -->




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
