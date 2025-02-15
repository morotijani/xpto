<?php
    require ("system/DatabaseConnector.php");

?>

<!DOCTYPE html>
<html lang="en" dir="">
<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>XPTO</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/media/logo.jpg">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Turret+Road:wght@200;300;400;500;700;800&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/css/vendor.min.css">

    <!-- CSS Space Template -->
    <link rel="stylesheet" href="assets/css/theme.min.css?v=1.0">
    <style>
        * {
            font-family: "Turret Road", serif;
            /* font-weight: 200; */
            font-style: normal;
        }

        .turret-road-extralight {
            font-family: "Turret Road", serif;
            font-weight: 200;
            font-style: normal;
        }

        .turret-road-light {
            font-family: "Turret Road", serif;
            font-weight: 300;
            font-style: normal;
        }

        .turret-road-regular {
            font-family: "Turret Road", serif;
            font-weight: 400;
            font-style: normal;
        }

        .turret-road-medium {
            font-family: "Turret Road", serif;
            font-weight: 500;
            font-style: normal;
        }

        .turret-road-bold {
            font-family: "Turret Road", serif;
            font-weight: 700;
            font-style: normal;
        }

        .turret-road-extrabold {
            font-family: "Turret Road", serif;
            font-weight: 800;
            font-style: normal;
        }
    </style>
</head>

<body>
    <!-- ========== HEADER ========== -->
    <header id="header" class="navbar navbar-expand-lg navbar-light navbar-end bg-white">
        <div class="container">
            <nav class="js-mega-menu navbar-nav-wrap">
                <a class="navbar-brand" href="./index.html" aria-label="Space">
                    <img class="navbar-brand-logo" src="assets/media/logo.jpg" width="30" height="20" alt="Image Description">
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
                            <a class="js-animation-link btn btn-ghost-secondary btn-no-focus me-2 me-lg-0" href="javascript:;">Log in</a>
                            <a class="js-animation-link d-lg-none btn btn-primary" href="javascript:;">
                                <i class="bi-person-circle me-1"></i> Sign up
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="js-animation-link d-none d-lg-inline-block btn btn-primary" href="javascript:;">
                                <i class="bi-person-circle me-1"></i> Sign up
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <!-- Hero -->
        <div class="position-relative">
            <div class="container">
                <div class="d-none d-md-block col-md-6 position-absolute top-0 end-0 bg-img-center h-100" style="background-image: url(assets/media/bg-2.png);"></div>
                <div class="d-md-none mb-5 mb-md-0">
                    <img class="img-fluid" src="assets/media/bg-2.png" alt="Image Description">
                </div>

                <div class="row align-items-lg-center content-space-md-3">
                    <div class="col-md-8 col-lg-6">
                        <!-- Heading -->
                        <div class="pe-lg-3 mb-7">
                            <h1 class="display-4 text-white mb-3 mb-md-5">The people-powered way to  <span class="text-warning">move money</span></h1>
                            <p class="lead text-white-70">Trade on the go. Anywhere, anytime.</p>
                        </div>

                        <a class="d-block" href="#scrollToContent">
                            <span class="svg-icon svg-icon-lg text-white">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.3" x="11" y="4" width="2" height="10" rx="1" fill="#035A4B" />
                                <path d="M6.70711 12.2929C6.31658 11.9024 5.68342 11.9024 5.29289 12.2929C4.90237 12.6834 4.90237 13.3166 5.29289 13.7071L11.2929 19.7071C11.6715 20.0857 12.2811 20.0989 12.6757 19.7372L18.6757 14.2372C19.0828 13.864 19.1103 13.2314 18.7372 12.8243C18.364 12.4172 17.7314 12.3897 17.3243 12.7628L12.0301 17.6159L6.70711 12.2929Z" fill="#035A4B" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        
    <!-- Clients -->
    <div class="bg-soft-primary-light">
        <div class="container content-space-1">
            <div class="mb-4">
                <h5>Thousands of world’s leading companies trust Xpto</h5>
            </div>

            <div class="row">
                <div class="col py-3">
                    <img class="avatar avatar-xl avatar-4x3" src="assets/media/svg/capsule-primary.svg" alt="Logo">
                    
                </div>

                <div class="col py-3">
                    <img class="avatar avatar-xl avatar-4x3" src="assets/media/svg/fitbit-primary.svg" alt="Logo">
                </div>

                <div class="col py-3">
                    <img class="avatar avatar-xl avatar-4x3" src="assets/media/svg/vidados-primary.svg" alt="Logo">
                </div>

                <div class="col py-3">
                    <img class="avatar avatar-xl avatar-4x3" src="assets/media/svg/mailchimp-primary.svg" alt="Logo">
                </div>

                <div class="col py-3">
                    <img class="avatar avatar-xl avatar-4x3" src="assets/media/svg/layar-primary.svg" alt="Logo">
                </div>
            </div>
        </div>
    </div>

    <!-- Stats -->
    <div class="container">
      <div class="banner-half-start"></div>
    </div>
    <!-- End Stats -->

    <!-- Features -->
    <div class="container overflow-hidden content-space-1 content-space-md-3">

        <div class="row justify-content-end align-items-md-center">
            <div class="col-md-6 mb-7 mb-md-0">
                <figure class="device-mobile text-center mx-auto">
                    <div class="device-mobile-frame">
                        <img class="device-mobile-img" src="assets/media/bg-3.png" alt="Image Description">
                        
                    </div>

                        <div class="position-absolute top-50 translate-middle-y zi-n1" style="right: -7rem;">
                        <img class="img-fluid" src="assets/media/svg//shape-8.svg" alt="SVG" style="width: 10rem;">
                    </div>
                </figure>
            </div>

            <div class="col-md-6">
                <div class="p-md-5 p-lg-7">
                    <div class="mb-7">
                        <h3>Send money instantly – no bank account required</h3>
                        <p>Send, store, and receive BTC, ETH, USDT and more in your free and secure Paxful cryptocurrency wallet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features -->
    <div class="container overflow-hidden content-space-b-1 content-space-b-md-3">
        <div class="row justify-content-end align-items-md-center">
            <div class="col-md-6 order-md-2 mb-7 mb-md-0">
                <figure class="device-mobile text-center mx-auto">
                    <div class="device-mobile-frame">
                        <img class="device-mobile-img" src="assets/media/bg-1.png" alt="Image Description">
                    </div>

                    <div class="position-absolute top-50 translate-middle-y zi-n1" style="right: -7rem;">
                        <img class="img-fluid" src="assets/media/svg/shape-1.svg" alt="SVG" style="width: 10rem;">
                    </div>
                </figure>
            </div>

            <div class="col-md-6">
                <div class="p-md-5 p-lg-7">
                    <div class="mb-7">
                        <h3>Do more with your crypto Digital wallet</h3>
                        <p>Get your personale wallet address instantly, and join the financial freedom.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <!-- Step -->
    <div id="scrollToContent" class="container content-space-t-1 content-space-t-md-3">
      <!-- Heading -->
      <div class="w-lg-65 mb-7">
        <span class="text-cap">Xpto</span>
        <h3>Trade crypto on Xpto</h3>
      </div>
      <!-- End Heading -->

      <!-- Step -->
      <ul class="step step-md">
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">1</span>
            <div class="step-content">
              <h6 class="step-title">Trade worldwide</h6>
              <p class="step-text">Buy and sell local and digital currencies including Bitcoin, Ethereum, Tether, and USDC – across 140 markets with 500+ payment methods.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">2</span>
            <div class="step-content">
              <h6 class="step-title">Send money instantly</h6>
              <p class="step-text">Send cash or cryptocurrency to anyone, anytime - with faster, cheaper, and simpler transactions powered by the blockchain.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">3</span>
            <div class="step-content">
              <h6 class="step-title">Supply global markets</h6>
              <p class="step-text">Become a peer-to-peer market maker and benefit from arbitrage trading opportunities across regions and payment methods.</p>
            </div>
          </div>
        </li>
      </ul>
      <!-- End Step -->
    </div>
    <!-- End Step -->

    
       <div class="mx-auto" style="max-width: 31.25rem;">
        <!-- Alert -->
        <div class="alert alert-soft-primary" role="alert">
          <div class="d-sm-flex align-items-sm-center">
            <div class="flex-shrink-0 mb-3 mb-sm-0">
              <span class="svg-icon text-primary mb-3">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M15 19.5229C15 20.265 15.9624 20.5564 16.374 19.9389L22.2227 11.166C22.5549 10.6676 22.1976 10 21.5986 10H17V4.47708C17 3.73503 16.0376 3.44363 15.626 4.06106L9.77735 12.834C9.44507 13.3324 9.80237 14 10.4014 14H15V19.5229Z" fill="#035A4B" />
                  <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M3 6.5C3 5.67157 3.67157 5 4.5 5H9.5C10.3284 5 11 5.67157 11 6.5C11 7.32843 10.3284 8 9.5 8H4.5C3.67157 8 3 7.32843 3 6.5ZM3 18.5C3 17.6716 3.67157 17 4.5 17H9.5C10.3284 17 11 17.6716 11 18.5C11 19.3284 10.3284 20 9.5 20H4.5C3.67157 20 3 19.3284 3 18.5ZM2.5 11C1.67157 11 1 11.6716 1 12.5C1 13.3284 1.67157 14 2.5 14H6.5C7.32843 14 8 13.3284 8 12.5C8 11.6716 7.32843 11 6.5 11H2.5Z" fill="#035A4B" />
                </svg>

              </span>
            </div>

            <div class="flex-grow-1 text-dark ms-sm-3 mb-3 mb-sm-0">Empowering independent business owners everywhere</div>

            <div class="flex-shrink-0 ms-sm-3">
              <a class="btn btn-primary" href="#">Try for free</a>
            </div>
          </div>
        </div>
        <!-- End Alert -->
      </div>
   
    </div>
    <!-- End Pricing -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  <footer class="bg-primary-dark border-top border-white-10">
    <div class="container">
      <div class="row content-space-1">
        <div class="col-lg-3 mb-7 mb-lg-0">
          <!-- Logo -->
          <div class="mb-5">
            <a class="navbar-brand" href="./index.html" aria-label="Space">
              <img class="navbar-brand-logo" src="./assets/svg/logos/logo-white.svg" alt="Image Description">
            </a>
          </div>
          <!-- End Logo -->

          <span class="d-block">
            <label for="selectLanguage" class="form-label text-white">Choose language</label>
          </span>

          <!-- Button Group -->
          <div class="btn-group">
            <button type="button" class="btn btn-soft-light btn-sm dropdown-toggle" id="selectLanguage" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="d-flex align-items-center">
                <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Image description" width="16" />
                <span>English (US)</span>
              </span>
            </button>

            <div class="dropdown-menu">
              <a class="dropdown-item d-flex align-items-center active" href="#">
                <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Image description" width="16" />
                <span>English (US)</span>
              </a>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Image description" width="16" />
                <span>English (UK)</span>
              </a>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Image description" width="16" />
                <span>Deutsch</span>
              </a>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Image description" width="16" />
                <span>Dansk</span>
              </a>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/es.svg" alt="Image description" width="16" />
                <span>Español</span>
              </a>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/nl.svg" alt="Image description" width="16" />
                <span>Nederlands</span>
              </a>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/it.svg" alt="Image description" width="16" />
                <span>Italiano</span>
              </a>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="Image description" width="16" />
                <span>中文 (繁體)</span>
              </a>
            </div>
          </div>
          <!-- End Button Group -->
        </div>
        <!-- End Col -->

        <div class="col-sm mb-7 mb-sm-0">
          <span class="text-cap text-primary-light">Resources</span>

          <!-- List -->
          <ul class="list-unstyled list-py-1 mb-0">
            <li><a class="link-sm link-light" href="#">Blog</a></li>
            <li><a class="link-sm link-light" href="#">Guidance</a></li>
            <li><a class="link-sm link-light" href="#">Customer Stories</a></li>
            <li><a class="link-sm link-light" href="#">Support <i class="bi-box-arrow-up-right ms-1"></i></a></li>
            <li><a class="link-sm link-light" href="#">API</a></li>
            <li><a class="link-sm link-light" href="#">Packages</a></li>
          </ul>
          <!-- End List -->
        </div>
        <!-- End Col -->

        <div class="col-sm mb-7 mb-sm-0">
          <span class="text-cap text-primary-light">Company</span>

          <!-- List -->
          <ul class="list-unstyled list-py-1 mb-0">
            <li><a class="link-sm link-light" href="#">Belonging <i class="bi-box-arrow-up-right ms-1"></i></a></li>
            <li><a class="link-sm link-light" href="#">Company</a></li>
            <li><a class="link-sm link-light" href="#">Careers <span class="badge bg-warning text-dark rounded-pill ms-2">We're hiring</span></a></li>
            <li><a class="link-sm link-light" href="#">Contacts</a></li>
            <li><a class="link-sm link-light" href="#">Security</a></li>
          </ul>
          <!-- End List -->
        </div>
        <!-- End Col -->

        <div class="col-sm">
          <span class="text-cap text-primary-light">Platform</span>

          <!-- List -->
          <ul class="list-unstyled list-py-1 mb-0">
            <li><a class="link-sm link-light" href="#">Web</a></li>
            <li><a class="link-sm link-light" href="#">Mobile</a></li>
            <li><a class="link-sm link-light" href="#">iOS</a></li>
            <li><a class="link-sm link-light" href="#">Android</a></li>
            <li><a class="link-sm link-light" href="#">Figma Importing</a></li>
          </ul>
          <!-- End List -->
        </div>
        <!-- End Col -->

        <div class="col-sm">
          <span class="text-cap text-primary-light">Legal</span>

          <!-- List -->
          <ul class="list-unstyled list-py-1 mb-5">
            <li><a class="link-sm link-light" href="#">Terms of use</a></li>
            <li><a class="link-sm link-light" href="#">Privacy policy <i class="bi-box-arrow-up-right ms-1"></i></a></li>
          </ul>
          <!-- End List -->

          <span class="text-cap text-primary-light">Docs</span>

          <!-- List -->
          <ul class="list-unstyled list-py-1 mb-0">
            <li><a class="link-sm link-light" href="#">Documentation</a></li>
            <li><a class="link-sm link-light" href="#">Snippets</a></li>
          </ul>
          <!-- End List -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->

      <div class="border-top border-white-10"></div>

      <div class="row align-items-md-end py-5">
        <div class="col-md mb-3 mb-md-0">
          <p class="text-white mb-0">© Space. 2021 Htmlstream. All rights reserved.</p>
        </div>

        <div class="col-md d-md-flex justify-content-md-end">
          <!-- Socials -->
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a class="btn btn-icon btn-sm btn-soft-light rounded-circle" href="#">
                <i class="bi-facebook"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-icon btn-sm btn-soft-light rounded-circle" href="#">
                <i class="bi-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-icon btn-sm btn-soft-light rounded-circle" href="#">
                <i class="bi-github"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-icon btn-sm btn-soft-light rounded-circle" href="#">
                <i class="bi-slack"></i>
              </a>
            </li>
          </ul>
          <!-- End Socials -->
        </div>
      </div>
    </div>
  </footer>
  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Sign Up -->
  <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-close">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body p-sm-5">
          <!-- Log in -->
          <div id="signupModalFormLogin" style="display: none; opacity: 0;">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h4>Log in</h4>
              <p>Don't have an account yet?
                <a class="js-animation-link" href="javascript:;" role="button" data-hs-show-animation-options='{
                           "targetSelector": "#signupModalFormSignup",
                           "groupName": "idForm"
                         }'>Sign up here</a>
              </p>
            </div>
            <!-- End Heading -->

            <div class="d-grid gap-2">
              <a class="btn btn-white btn-lg" href="#">
                <span class="d-flex justify-content-center align-items-center">
                  <img class="avatar avatar-xss me-2" src="./assets/svg/brands/google-icon.svg" alt="Image Description">
                  Log in with Google
                </span>
              </a>

              <a class="js-animation-link btn btn-primary btn-lg" href="#" data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormLoginWithEmail",
                         "groupName": "idForm"
                       }'>Log in with Email</a>
            </div>
          </div>
          <!-- End Log in -->

          <!-- Log in with Modal -->
          <div id="signupModalFormLoginWithEmail" style="display: none; opacity: 0;">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h4>Log in</h4>
              <p>Don't have an account yet?
                <a class="js-animation-link" href="javascript:;" role="button" data-hs-show-animation-options='{
                           "targetSelector": "#signupModalFormSignup",
                           "groupName": "idForm"
                         }'>Sign up here</a>
              </p>
            </div>
            <!-- End Heading -->

            <form class="js-validate needs-validation" novalidate>
              <!-- Form -->
              <div class="mb-3">
                <label class="form-label" for="signupModalFormLoginEmail">Your email</label>
                <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormLoginEmail" placeholder="email@site.com" aria-label="email@site.com" required>
                <span class="invalid-feedback">Please enter a valid email address.</span>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center">
                  <label class="form-label" for="signupModalFormLoginPassword">Password</label>

                  <a class="js-animation-link form-label-link" href="javascript:;" data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormResetPassword",
                         "groupName": "idForm"
                       }'>Forgot Password?</a>
                </div>

                <input type="password" class="form-control form-control-lg" name="password" id="signupModalFormLoginPassword" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8">
                <span class="invalid-feedback">Please enter a valid password.</span>
              </div>
              <!-- End Form -->

              <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary btn-lg">Log in</button>
              </div>
            </form>
          </div>
          <!-- End Log in with Modal -->

          <!-- Sign up -->
          <div id="signupModalFormSignup">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h4>Sign up</h4>
              <p>Already have an account?
                <a class="js-animation-link" href="javascript:;" role="button" data-hs-show-animation-options='{
                           "targetSelector": "#signupModalFormLogin",
                           "groupName": "idForm"
                         }'>Log in here</a>
              </p>
            </div>
            <!-- End Heading -->

            <div class="d-grid gap-3">
              <a class="btn btn-white btn-lg" href="#">
                <span class="d-flex justify-content-center align-items-center">
                  <img class="avatar avatar-xss me-2" src="./assets/svg/brands/google-icon.svg" alt="Image Description">
                  Sign up with Google
                </span>
              </a>

              <a class="js-animation-link btn btn-primary btn-lg" href="#" data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormSignupWithEmail",
                         "groupName": "idForm"
                       }'>Sign up with Email</a>

              <div class="text-center">
                <p class="small mb-0">By continuing you agree to our <a href="./page-terms.html">Terms and Conditions</a></p>
              </div>
            </div>
          </div>
          <!-- End Sign up -->

          <!-- Sign up with Modal -->
          <div id="signupModalFormSignupWithEmail" style="display: none; opacity: 0;">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h4>Sign up</h4>
              <p>Already have an account?
                <a class="js-animation-link" href="javascript:;" role="button" data-hs-show-animation-options='{
                           "targetSelector": "#signupModalFormLogin",
                           "groupName": "idForm"
                         }'>Log in here</a>
              </p>
            </div>
            <!-- End Heading -->

            <form class="js-validate need-validate" novalidate>
              <!-- Form -->
              <div class="mb-3">
                <label class="form-label" for="signupModalFormSignupEmail">Your email</label>
                <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormSignupEmail" placeholder="email@site.com" aria-label="email@site.com" required>
                <span class="invalid-feedback">Please enter a valid email address.</span>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-3">
                <label class="form-label" for="signupModalFormSignupPassword">Password</label>
                <input type="password" class="form-control form-control-lg" name="password" id="signupModalFormSignupPassword" placeholder="8+ characters required" aria-label="8+ characters required" required>
                <span class="invalid-feedback">Your password is invalid. Please try again.</span>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-3" data-hs-validation-validate-class>
                <label class="form-label" for="signupModalFormSignupConfirmPassword">Confirm password</label>
                <input type="password" class="form-control form-control-lg" name="confirmPassword" id="signupModalFormSignupConfirmPassword" placeholder="8+ characters required" aria-label="8+ characters required" required data-hs-validation-equal-field="#signupModalFormSignupPassword">
                <span class="invalid-feedback">Password does not match the confirm password.</span>
              </div>
              <!-- End Form -->

              <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary btn-lg">Sign up</button>
              </div>

              <div class="text-center">
                <p class="small mb-0">By continuing you agree to our <a href="#">Terms and Conditions</a></p>
              </div>
            </form>
          </div>
          <!-- End Sign up with Modal -->

          <!-- Reset Password -->
          <div id="signupModalFormResetPassword" style="display: none; opacity: 0;">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h4>Forgot password?</h4>
              <p>Enter the email address you used when you joined and we'll send you instructions to reset your password.</p>
            </div>
            <!-- En dHeading -->

            <form class="js-validate need-validate" novalidate>
              <div class="mb-3">
                <!-- Form -->
                <div class="d-flex justify-content-between align-items-center">
                  <label class="form-label" for="signupModalFormResetPasswordEmail" tabindex="0">Your email</label>

                  <a class="js-animation-link form-label-link" href="javascript:;" data-hs-show-animation-options='{
                           "targetSelector": "#signupModalFormLogin",
                           "groupName": "idForm"
                         }'>
                    <i class="bi-chevron-left small me-1"></i> Back to Log in
                  </a>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-3">
                  <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormResetPasswordEmail" tabindex="1" placeholder="Enter your email address" aria-label="Enter your email address" required>
                  <span class="invalid-feedback">Please enter a valid email address.</span>
                </div>
                <!-- End Form -->

                <div class="d-grid">
                  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
              </div>
            </form>
          </div>
          <!-- End Reset Password -->
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer d-block text-center py-sm-5">
          <small class="text-cap mb-4">Trusted by the world's best teams</small>

          <div class="w-85 mx-auto">
            <div class="row justify-content-between">
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/gitlab-gray.svg" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/fitbit-gray.svg" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/flow-xo-gray.svg" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/layar-gray.svg" alt="Logo">
              </div>
              <!-- End Col -->
            </div>
          </div>
          <!-- End Row -->
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>

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
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Implementing Plugins -->
  <script src="assets/js/vendor.min.js"></script>

  <!-- JS Space -->
  <script src="assets/js/theme.min.js"></script>

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