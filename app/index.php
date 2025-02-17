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
            <div class="container content-space-1 ">


            <div class="row g-3 g-xl-6 mb-4">
                <div class="col-12">
                    <div class="vstack gap-3 gap-xl-6">
                    <div class="d-flex"><div class=""><div class="hstack gap-3 mb-1"><h4 class="fw-semibold">Total Balance</h4><a href="#"><i class="bi bi-eye"></i> </a><a href="#"><i class="bi bi-info-circle"></i></a></div><div class="text-2xl text-heading fw-bolder ls-tight">$23.000,48</div></div><div class="ms-auto align-self-end"><button type="button" class="btn btn-sm btn-neutral" data-bs-toggle="modal" data-bs-target="#topUpModal">Top up</button></div></div>

                    <div class="row g-3 g-xl-6"><div class="col-sm-6"><div class="card"><div class="card-body"><div class="d-flex align-items-start gap-4"><div class="flex-none progress-circle progress-circle-xl progress-circle-primary text-light" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" role="progressbar" style="--value:65"><span class="text-primary fw-bold">65%</span></div><div><div class="mb-2"><span class="d-block text-xs text-muted text-opacity-75">Today's Spendings</span> <span class="d-block fw-bold text-heading text-sm">370,00 EUR</span></div><div><span class="d-block text-xs text-muted text-opacity-75">Daily Spending Limit</span> <span class="d-block fw-bold text-heading text-sm">7.500,00 EUR</span></div></div></div></div></div></div><div class="col-sm-6"><div class="card"><div class="card-body"><div class="d-flex align-items-start gap-4"><div class="flex-none progress-circle progress-circle-xl progress-circle-primary text-light" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" role="progressbar" style="--value:40"><span class="text-primary fw-bold">40%</span></div><div><div class="mb-2"><span class="d-block text-xs text-muted text-opacity-75">Today's Withdrawl</span> <span class="d-block fw-bold text-heading text-sm">1800,00 EUR</span></div><div><span class="d-block text-xs text-muted text-opacity-75">Daily Withdrawl Limit</span> <span class="d-block fw-bold text-heading text-sm">3.000,00 EUR</span></div></div></div></div></div></div></div>
                    </div> 
                </div>
            </div>





				<div class="mx-auto">
					<div class="card card-lg zi-2">
						<div class="card-body">
                            <div class="pe-md-5">

                                <!-- Step -->
                                <ul class="step step-sm step-icon-sm step-centered step-border-last-0" id="step-TabFeatures" role="tablist">
                                    <li class="step-item" role="presentation">
                                        <a class="step-content-wrapper active" href="#stepFeaturesOne" id="stepFeaturesOne-tab" data-bs-toggle="tab" data-bs-target="#stepFeaturesOne" role="tab" aria-controls="stepFeaturesOne" aria-selected="true">
                                            <span class="step-icon step-icon-soft-secondary">
                                                <img class="img-fluid" src="<?= PROOT; ?>assets/media/send-icon.png" width="100" height="100">
                                            </span>
                                            <div class="step-content">
                                                <h6 class="step-title">Send Crypto</h6>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="step-item" role="presentation">
                                        <a class="step-content-wrapper" href="#stepFeaturesTwo" id="stepFeaturesTwo-tab" data-bs-toggle="tab" data-bs-target="#stepFeaturesTwo" role="tab" aria-controls="stepFeaturesTwo" aria-selected="false">
                                            <span class="step-icon step-icon-soft-secondary">
                                                <img class="img-fluid" src="<?= PROOT; ?>assets/media/receive-icon.png" width="100" height="100">
                                            </span>
                                            <div class="step-content">
                                                <h6 class="step-title">Recieve crypto</h6>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="step-item" role="presentation">
                                        <a class="step-content-wrapper" href="#stepFeaturesThree" id="stepFeaturesThree-tab" data-bs-toggle="tab" data-bs-target="#stepFeaturesThree" role="tab" aria-controls="stepFeaturesThree" aria-selected="false">
                                            <span class="step-icon step-icon-soft-secondary">
                                                <img class="img-fluid" src="<?= PROOT; ?>assets/media/transaction-icon.png" width="100" height="100">
                                            </span>
                                            <div class="step-content">
                                                <h6 class="step-title">Transaction history</h6>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="step-item" role="presentation">
                                        <a class="step-content-wrapper" href="#stepFeaturesThree" id="stepFeaturesThree-tab" data-bs-toggle="tab" data-bs-target="#stepFeaturesThree" role="tab" aria-controls="stepFeaturesThree" aria-selected="false">
                                            <span class="step-icon step-icon-soft-secondary">
                                                <img class="img-fluid" src="<?= PROOT; ?>assets/media/profile-icon.png" width="100" height="100">
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



                                                <style>
                                                    .form-control-flush {
    box-shadow: none;
    background-color: transparent;
    border-width: 0;
    padding: 0;
}

.form-control-flush:focus {
    box-shadow: none;
    background-color: transparent;
    border-width: 0;
}
                                                    </style>

                                                
                                                    <form class="vstack gap-6">
                                                        <div class="vstack gap-1">
                                                            <div class="bg-light rounded-3 p-4">
                                                                <div class="d-flex justify-content-between text-xs text-muted">
                                                                    <span class="fw-semibold">From</span> 
                                                                    <span>Balance: 10,000 ADA</span>
                                                                </div>
                                                                <div class="d-flex justify-content-between gap-2 mt-4">
                                                                    <input type="tel" class="form-control form-control-flush text-xl fw-bold flex-fill" placeholder="0.00"> 
                                                                    <div class="dropdown">
                                                                        <button class="btn btn-sm btn-neutral rounded-pill shadow-none flex-none d-flex align-items-center gap-2 p-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <img src="../../img/flags/eu.svg" class="w-rem-6 h-rem-6 rounded-circle" alt="..."> 
                                                                            <span>EUR</span> 
                                                                            <i class="bi bi-chevron-down text-xs me-1"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-sm" style="">
                                                                            <li>
                                                                                <a class="dropdown-item d-flex align-items-center gap-2" href="#">
                                                                                    <img src="../../img/flags/us.svg" class="w-rem-6 h-rem-6 rounded-circle" alt="..."> 
                                                                                    <span>USD</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <label class="form-label">To wallet address</label>
                                                            <div class="d-flex flex-wrap gap-1 gap-sm-2">
                                                                <div class="w-sm-56 input-group input-group-sm input-group-inline">
                                                                    <input type="search" class="form-control" placeholder="1"> <span class="input-group-text">%</span></div><div class="flex-fill"><input type="radio" class="btn-check" name="options" id="option1" checked="checked"> <label class="btn btn-sm btn-neutral w-100" for="option1">0.5%</label></div><div class="flex-fill"><input type="radio" class="btn-check" name="options" id="option2" checked="checked"> <label class="btn btn-sm btn-neutral w-100" for="option2">1%</label></div><div class="flex-fill"><input type="radio" class="btn-check" name="options" id="option3" checked="checked"> <label class="btn btn-sm btn-neutral w-100" for="option3">3%</label></div></div></div><button type="button" class="btn btn-primary w-100">Provide liquidity</button></form>





                                        
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
                                                
                                                    <!-- Receive -->
                                                    <a class="card card-lg card-transition bg-soft-warning shadow-none h-100" href="./snippets/index.html">
                                                        <div class="card-header">
                                                            <h5 class="card-title text-inherit">Snippets</h5>
                                                            <p class="card-text text-body">Start browsing our snippets pages to match Bootstrap's level of quality.</p>
                                                        </div>
                                                        <div class="card-body text-center">
                                                            
                                                        <div id="receive-step-2" class="d- text-center">
			      		<div class="input-group">
		                    <span id="copy-receive-address" type="text" class="form-control" placeholder="wallet address"></span>
		                    <button class="btn btn-light-warning" data-clipboard-target="#copy-receive-address">
		                        Copy
		                    </button>
		                </div>
		                <div class="text-center my-4">
		                	or
		                </div>
			      		 <img src="" class="qr-code img-thumbnail img-fluid" />
			      		 <br>
			      		 <small>Receive by scanning this QR code.</small>
			      		 <p id="share-moreinfo"></p>
			      	</div>

                                                            <img class="card-img" style="width: auto; height: 250px" src="https://qrcode.tec-it.com/API/QRCode?data=https%3a%2f%2fqrcode.tec-it.com&color=%2312642a&backcolor=%23ffffff&istransparent=True" alt="Image Description">

                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="tab-pane fade" id="stepFeaturesThree" role="tabpanel" aria-labelledby="stepFeaturesThree-tab">

                                                    <!-- Transactions -->
                                                    <div class="card">
                                                        <div class="card-body pb-0">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <div>
                                                                    <h5>Transaction History</h5>
                                                                </div>
                                                                <div class="hstack align-items-center">
                                                                    <a href="#" class="text-muted">
                                                                        <i class="bi bi-arrow-repeat"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="list-group list-group-flush">
                                                                <div class="list-group-item d-flex align-items-center justify-content-between gap-6">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <div class="icon icon-shape rounded-circle icon-sm flex-none w-rem-10 h-rem-10 text-sm bg-primary bg-opacity-25 text-primary">
                                                                            <i class="bi bi-send-fill"></i>
                                                                        </div>
                                                                        <div class="">
                                                                            <span class="d-block text-heading text-sm fw-semibold">Bitcoin </span>
                                                                            <span class="d-none d-sm-block text-muted text-xs">2 days ago</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-none d-md-block text-sm">0xd029384sd343fd...eq23</div>
                                                                    <div class="d-none d-md-block">
                                                                        <span class="badge bg-light text-warning">Pending</span>
                                                                    </div>
                                                                    <div class="text-end">
                                                                        <span class="d-block text-heading text-sm fw-bold">+0.2948 BTC </span>
                                                                        <span class="d-block text-muted text-xs">+$10,930.90</span>
                                                                    </div>
                                                                </div>
                                                                <div class="list-group-item d-flex align-items-center justify-content-between gap-6">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <div class="icon icon-shape rounded-circle icon-sm flex-none w-rem-10 h-rem-10 text-sm bg-primary bg-opacity-25 text-primary">
                                                                            <i class="bi bi-send-fill"></i>
                                                                        </div>
                                                                        <div class="">
                                                                            <span class="d-block text-heading text-sm fw-semibold">Cardano </span>
                                                                            <span class="d-none d-sm-block text-muted text-xs">2 days ago</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-none d-md-block text-sm">0xd029384sd343fd...eq23</div>
                                                                    <div class="d-none d-md-block">
                                                                        <span class="badge bg-light text-danger">Canceled</span>
                                                                    </div>
                                                                    <div class="text-end">
                                                                        <span class="d-block text-heading text-sm fw-bold">+0.2948 BTC </span>
                                                                        <span class="d-block text-muted text-xs">+$10,930.90</span>
                                                                    </div>
                                                                </div>
                                                                <div class="list-group-item d-flex align-items-center justify-content-between gap-6">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <div class="icon icon-shape rounded-circle icon-sm flex-none w-rem-10 h-rem-10 text-sm bg-primary bg-opacity-25 text-primary">
                                                                            <i class="bi bi-send-fill"></i>
                                                                        </div>
                                                                        <div class="">
                                                                            <span class="d-block text-heading text-sm fw-semibold">Binance </span>
                                                                            <span class="d-none d-sm-block text-muted text-xs">2 days ago</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-none d-md-block text-sm">0xd029384sd343fd...eq23</div>
                                                                    <div class="d-none d-md-block">
                                                                        <span class="badge bg-light text-success">Successful</span>
                                                                    </div>
                                                                    <div class="text-end">
                                                                        <span class="d-block text-heading text-sm fw-bold">+0.2948 BTC </span>
                                                                        <span class="d-block text-muted text-xs">+$10,930.90</span>
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



        //get live prices
        var btc = document.getElementById("btc");
        var eth = document.getElementById("eth");
        var usdt = document.getElementById("usdt");

        f_btc = document.getElementById("f-btc");
        f_eth = document.getElementById("f-eth");
        f_usdt = document.getElementById("f-usdt");
        liveprice = {
            "async" : true,
            "scroosDomain" : true,
            "url" : "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin%2Cethereum%2Ctether&vs_currencies=usd",
            "method" : "GET",
            "headers" : {},
        }
        $.ajax(liveprice).done(function (response) {
            btc.innerHTML = "$ " + response.bitcoin.usd.toLocaleString();
            eth.innerHTML = "$ " + response.ethereum.usd.toLocaleString();
            usdt.innerHTML = "$ " + response.tether.usd.toLocaleString();

            f_btc.innerHTML = "$ " + response.bitcoin.usd.toLocaleString();
            f_eth.innerHTML = "$ " + response.ethereum.usd.toLocaleString();
            f_usdt.innerHTML = "$ " + response.tether.usd.toLocaleString();

            console.log(response);
        });
	</script>
