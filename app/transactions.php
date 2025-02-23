<?php
    require ("../system/DatabaseConnector.php");
    if (!user_is_logged_in()) {
        user_login_redirect();
    }
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
                            <a id="landingsMegaMenu" class="nav-link" aria-current="page" href="#" role="button" aria-expanded="false"><i class="bi-twitter me-1"></i></a>
                        </li>
                        <li class="hs-has-mega-menu nav-item">
                            <a id="landingsMegaMenu" class="nav-link" aria-current="page" href="#" role="button" aria-expanded="false"><i class="bi-facebook me-1"></i></a>
                        </li>

                        <li class="hs-has-mega-menu nav-item">
                            <a id="landingsMegaMenu" class="nav-link" aria-current="page" href="#" role="button" aria-expanded="false">Hi Amin!</a>
                        </li>
                        <li class="hs-has-mega-menu nav-item">
                            <a class="nav-link" href="<?= PROOT; ?>auth/logout">Logout</a>
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
                            <div class="d-flex">
                                <div class="">
                                    <div class="hstack gap-3 mb-1">
                                        <h4 class="fw-semibold">Total Balance</h4>
                                        <a href="javascript:;" onclick="toggleBalance()">
                                            <i class="bi bi-eye view-hide-balance"></i> 
                                        </a>
                                        <a href="javascript:;">
                                            <i class="bi bi-info-circle"></i>
                                        </a>
                                    </div>
                                    <div class="text-2xl text-heading fw-bolder ls-tight blurred" id="balance">$23.000,48</div>
                                </div>
                                <div class="ms-auto align-self-end">
                                    <a  href="<?= PROOT; ?>app/index" class="btn btn-sm btn-light mb-2">Send crypto</a>                                    
                                    <a href="#stepFeaturesTwo" id="stepFeaturesTwo-tab" data-bs-toggle="tab" data-bs-target="#stepFeaturesTwo" role="tab" aria-controls="stepFeaturesTwo" aria-selected="false" class="btn btn-sm btn-light mb-2 step-content-wrapper" data-bs-toggle="modal" data-bs-target="#topUpModal">Receive crypto</a>
                                    <a href="<?= PROOT; ?>app/transactions" class="btn btn-sm btn-light mb-2">Transactions</a>

                                </div>
                            </div>
                        </div> 
                    </div>
                </div>

				<div class="mx-auto">
					<div class="card card-lg zi-2">
						<div class="card-body">
                            
                            <!-- Features Step -->
                            <div class="overflow-hidden">
                                <div class="container content-space-b-1 content-space-b-md-3 mt-4">
                                    <div class="row justify-content-center">
                                        <div class="col-md-10 order-md-2 mb-7 mb-md-0">
                                                


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
    <script src="<?= PROOT; ?>assets/js/wallet-address-validator.min.js"></script>

	<script>        
        // Paste from clipboard
        async function pasteFromClipboard() {
            try {
                let text = await navigator.clipboard.readText();
                alert("Pasting: " + text);
                $('#to_wallet_address').val(text);
            } catch (err) {
                console.error("Failed to paste:", err);
            }
        }

        //
        function validatePositiveNumber(input) {
            if (input.value < 0) {
                input.value = 1;
            }
        }

        // conver from fiat to crypto
        async function convertToCrypto(amountUSD, cryptoSymbol, fiatSymbol = "USD") {
            let apiKey = "<?= COINCAP_APIKEY; ?>";
            // let cors = 'https://corsproxy.io/?key=5fda4615&url=';
            let cors = 'https://cors-anywhere.herokuapp.com/'
            try {
                $('#amount-in-crypto-amount').text('Converting ...');
                let response = await fetch(`${cors}https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest?symbol=${cryptoSymbol}&convert=${fiatSymbol}`, {
                    headers: { 
                        "X-CMC_PRO_API_KEY": apiKey, 
                        'Content-Type': 'application/json',
                        'Access-Control-Allow-Origin': 'sites.local',
                    }
                });
                let data = await response.json();
                let exchangeRate = data.data[cryptoSymbol].quote[fiatSymbol].price;
                let cryptoAmount = amountUSD / exchangeRate;

                console.log(`$${amountUSD} is approximately ${cryptoAmount.toFixed(8)} ${cryptoSymbol}`);
                cryptoAmount = cryptoAmount.toFixed(8);
                return cryptoAmount
            } catch (error) {
                $('#amount-in-crypto-amount').text("Failed to convert, please refresh page and try again.");
                console.error("Failed to fetch:", error);
            }
        }

        let isHidden = true; // Track balance visibility

        function toggleBalance() {
            let balance = document.getElementById("balance");
            let button = $(".view-hide-balance");

            if (isHidden) {
                balance.classList.remove("blurred"); // Show balance
                button.removeClass("bi-eye");
                button.addClass("bi-eye-slash");
            } else {
                balance.classList.add("blurred"); // Hide balance
                button.removeClass("bi-eye-slash");
                button.addClass("bi-eye");
            }

            isHidden = !isHidden; // Toggle state
        }

		$(document).ready(function() {

            var crypto_id
            var crypto_symbol
            var crypto_name
            var crypto_amount
            var crypto_logo

            $('#send_amount').on('change', function(e) {
                e.preventDefault();

                var send_amount = $('#send_amount').val()
                var coin = $("#to_crypto_details_default").val();
                var crypto = $("#to_cypto").val(coin);

                coin = coin.split("/");
                crypto_symbol = coin[1];
                crypto_name = coin[2];
                convertToCrypto(send_amount, crypto_symbol, "USD").then(conversionValue => {
                    $('#amount-in-crypto-amount').text(conversionValue + ' ' + crypto_symbol);
                });
                $('#amount-in-crypto-crypto').text(crypto_name);
            })


            // get selected crypto
            $("#list-crypto").on("click", "li", (function() {
                var send_amount = $('#send_amount').val()
                var coin = $(this).find("#to_crypto_details").val();
                $('#to_crypto_details_default').val(coin)
                var crypto = $("#to_cypto").val(coin);
                coin = coin.split("/");

                crypto_id = coin[0];
                crypto_symbol = coin[1];
                crypto_name = coin[2]
                crypto_amount = coin[3];
                crypto_logo = 'https://s2.coinmarketcap.com/static/img/coins/64x64/' + coin[0] + '.png';

                $('#preview-symbol').text(crypto_symbol);
                $('#preview-symbol-selected').text(crypto_symbol)
                $('#preview-amount').text(crypto_amount);
                $('#preview-logo').attr('src', crypto_logo);

                convertToCrypto(send_amount, crypto_symbol, "USD").then(conversionValue => {
                    $('#amount-in-crypto-amount').text(conversionValue + ' ' + crypto_symbol);
                });
                $('#amount-in-crypto-crypto').text(crypto_name);
            }));


            /**
             * SEND FUNDS
             */
            $('#next-1').click(function(e) {
                e.preventDefault();
                var send_amount = $('#send_amount').val()
                if (crypto_symbol == 'USDT') {
                    crypto_name = 'Tether';
                }

                
                var to_wallet_address = $('#to_wallet_address').val();

                if (send_amount <= 0) {
                    alert('* Invalid amount.');
                    $("#send_amount").focus()
                    return false;
                }

                if (to_wallet_address == '') {
                    alert('* To address needed.');
                    $("#to_wallet_address").focus()
                    return false;
                } else {
                    // WAValidator is exposed as a global (window.WAValidator)
                    var valid = WAValidator.validate(to_wallet_address, crypto_name.toLowerCase());
                    if (!valid) {
                        alert('Address INVALID');
                        $("#to_wallet_address").focus()
                        return false;
                    }
                }

                $('#sendsummary').html(
				`
					<li class="list-group-item out">
				  		<small class="text-muted">You’re sending,</small>
				  		<p id="send-crypto">` + crypto_name + `: ${$('#amount-in-crypto-amount').text()}</p>
				  	</li>
				  	<li class="list-group-item out">
				  		<small class="text-muted">Amount</small>
				  		<p id="send-amount">` + Number($("#send_amount").val()).toFixed(2) + ` USD</p>
				  	</li>
				  	<li class="list-group-item out">
				  		<small class="text-muted">Fees In ` + crypto_symbol + `</small>
				  		<p id="send-fees">0.00003005 + 2% ` + crypto_symbol + `</p>
				  	</li>
				  	<li class="list-group-item out">
				  		<small class="text-muted">To</small>
				  		<p id="send-receiving-address">` + to_wallet_address + `</p>
				  	</li>
				  	<li class="list-group-item out">
				  		<small class="text-muted">Note</small>
				  		<p id="send-note">` + $("#note").val() + `</p>
				  	</li>
				`);

                $('#step-1').addClass('d-none');
                $('#step-2').removeClass('d-none');
            });

            $('#send-crypto-button').click(function(e) {
                e.preventDefault()
                var pin = $('#pin').val();

                if (pin == '') {
                    alert('Enter pin to proceed');
                    $('#pin').focus();
                    return false;
                }

                if (pin.length < 4) {
                    alert('Pin must be 4 digits');
                    $('#pin').focus();
                    return false;
                }

                if (pin.length > 4) {
                    alert('Pin must be 4 digits');
                    $('#pin').focus();
                    return false;
                }

                if (pin != '0000') {
                    alert('Invalid pin');
                    $('#pin').focus();
                    return false;
                }
                $('#step-3').addClass('d-none');
                $('#loader-tag').removeClass('d-none');
                setTimeout(() => {
                    $('#loader-tag').addClass('d-none');
                    alert('Transaction successful');
                    location.reload();
                }, 5000);
            })

            $('#next-2').click(function(e) {
                e.preventDefault();

                $('#step-2').addClass('d-none');
                $('#step-3').removeClass('d-none');
            })

            $('#prev-1').click(function(e) {
                e.preventDefault();

                $('#step-1').removeClass('d-none');
                $('#step-2').addClass('d-none');
            })

            $('#prev-2').click(function(e) {
                e.preventDefault();

                $('#step-2').removeClass('d-none');
                $('#step-3').addClass('d-none');
            })

            // 2nd step


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
