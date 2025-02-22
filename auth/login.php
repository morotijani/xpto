<?php
    require ("../system/DatabaseConnector.php");
	if (user_is_logged_in()) {
		redirect(PROOT . 'app/index');
	}
	$newFont = "default";
    include ("../head.php");

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$msg = "";
		$email = sanitize($_POST["email"]);
		$password = $_POST["password"];

		if (empty($email) || empty($password)) {
			$msg = "Email and password are required.";
		}

		try {
			// Check if the user exists
			$statement = $conn->prepare("SELECT id, password_hash FROM users WHERE email = ?");
			$statement->execute([$email]);
			$user = $statement->fetch(PDO::FETCH_ASSOC);

			if ($user && password_verify($password, $user['password_hash'])) {
				// Login successful
				$user_id = $user['user_id'];
                userLogin($user_id);
			} else {
				$msg = "Invalid email or password.";
			}

		} catch (PDOException $e) {
			$msg = "Login failed: " . $e->getMessage();
		}

		if (!empty($msg) || $msg != "") {
			$_SESSION['flash_error'] = $msg;
		}
	}

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
										<a class="step-content-wrapper active" href="#stepEmail" id="stepEmail-tab" data-bs-toggle="tab" data-bs-target="#stepEmail" role="tab" aria-controls="stepEmail" aria-selected="true">
											<span class="step-icon step-icon-soft-secondary">1</span>
											<div class="step-content">
												<h6 class="step-title">Email</h6>
											</div>
										</a>
									</li>

									<li class="step-item" role="presentation">
										<a class="step-content-wrapper" href="#stepPassword" id="stepPassword-tab" data-bs-toggle="tab" data-bs-target="#stepPassword" role="tab" aria-controls="stepPassword" aria-selected="false">
											<span class="step-icon step-icon-soft-secondary">2</span>
											<div class="step-content">
												<h6 class="step-title">Secrete keys</h6>
											</div>
										</a>
									</li>
								</ul>

								<!-- Form -->
								<div id="step-one">
									<div class="mb-4">
										<label class="form-label" for="forgotPasswordFormEmail">Your email</label>
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
									<a class="btn btn-link" href="<?= PROOT; ?>auth/signup">
										<i class="bi-chevron-left small me-1"></i> Don't have an account ?
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
