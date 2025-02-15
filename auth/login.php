<?php
    require ("../system/DatabaseConnector.php");
    include ("../head.php");

?>

	<!-- ========== MAIN CONTENT ========== -->
	<main id="content" role="main">
		<div class="bg-soft-primary-light">
			<div class="container content-space-1 content-space-t-md-3">
				<div class="mx-auto" style="max-width: 30rem;">
					<div class="card card-lg zi-2">
						<div class="card-header text-center">
							<h4 class="card-title">Login into your account.</h4>
							<p class="card-text">Enter your email address and click next to enter your password to login.</p>
						</div>

						<div class="card-body">
							<form class="js-validate need-validate" novalidate>

								<ul class="step step-sm step-icon-sm step-centered" id="step-TabFeatures" role="tablist">
									<li class="step-item" role="presentation">
										<a class="step-content-wrapper active" href="#stepFeaturesOne" id="stepFeaturesOne-tab" data-bs-toggle="tab" data-bs-target="#stepFeaturesOne" role="tab" aria-controls="stepFeaturesOne" aria-selected="true">
											<span class="step-icon step-icon-soft-secondary">1</span>
											<div class="step-content">
												<h6 class="step-title">Email</h6>
											</div>
										</a>
									</li>

									<li class="step-item" role="presentation">
										<a class="step-content-wrapper" href="#stepFeaturesTwo" id="stepFeaturesTwo-tab" data-bs-toggle="tab" data-bs-target="#stepFeaturesTwo" role="tab" aria-controls="stepFeaturesTwo" aria-selected="false">
											<span class="step-icon step-icon-soft-secondary">2</span>
											<div class="step-content">
												<h6 class="step-title">Secrete keys</h6>
											</div>
										</a>
									</li>
								</ul>

								<!-- Form -->
								<div class="mb-4">
									<label class="form-label" for="forgotPasswordFormEmail">Your email</label>
									<input type="email" class="form-control form-control-lg" name="forgotPasswordEmailName" id="forgotPasswordFormEmail" placeholder="Enter your emaill address" aria-label="Enter your emaill address" required>
									<span class="invalid-feedback">Please enter a valid email address.</span>
								</div>

								<div class="d-grid mb-4">
									<button type="submit" class="btn btn-primary btn-lg">Next</button>
								</div>

								<div class="text-center">
									<a class="btn btn-link" href="./page-login.html">
										<i class="bi-chevron-left small me-1"></i> Don't have an account ?
									</a>
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
