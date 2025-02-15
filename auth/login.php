<?php
    require ("system/DatabaseConnector.php");
    include ("head.php");

?>
<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">

 <!-- Content -->
 <div class="bg-soft-primary-light">
      <div class="container content-space-1 content-space-t-md-3">
        <div class="mx-auto" style="max-width: 30rem;">
          <!-- Card -->
          <div class="card card-lg zi-2">
            <!-- Header -->
            <div class="card-header text-center">
              <h4 class="card-title">Forgot password?</h4>
              <p class="card-text">Enter the email address you used when you joined and we'll send you instructions to reset your password.</p>
            </div>
            <!-- End Header -->

            <!-- Card Body -->
            <div class="card-body">
              <form class="js-validate need-validate" novalidate>
                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label" for="forgotPasswordFormEmail">Your email</label>
                  <input type="email" class="form-control form-control-lg" name="forgotPasswordEmailName" id="forgotPasswordFormEmail" placeholder="Enter your emaill address" aria-label="Enter your emaill address" required>
                  <span class="invalid-feedback">Please enter a valid email address.</span>
                </div>
                <!-- End Form -->

                <div class="d-grid mb-4">
                  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>

                <div class="text-center">
                  <a class="btn btn-link" href="./page-login.html">
                    <i class="bi-chevron-left small me-1"></i> Back to log in
                  </a>
                </div>
              </form>
            </div>
            <!-- End Card Body -->
          </div>
          <!-- End Card -->
        </div>
      </div>
    </div>
    <!-- End Content -->

    <!-- Shape -->
    <div class="shape-container">
      <div class="shape shape-bottom zi-1">
        <svg viewBox="0 0 3000 600" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 600V350.234L3000 0V600H0Z" fill="#fff" />
        </svg>
      </div>
    </div>
    <!-- End Shape -->

    <?php include ("footer.files.php"); ?>

        