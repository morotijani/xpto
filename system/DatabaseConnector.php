<?php 

    require dirname(__DIR__)  . '/bootstrap.php';
	
    $driver = $_ENV['DB_DRIVER'];
    $hostname = $_ENV['DB_HOST'];
    $port = $_ENV['DB_PORT'];
    $database = $_ENV['DB_DATABASE'];
    $username = $_ENV['DB_USERNAME'];
    $password = $_ENV['DB_PASSWORD'];


    try {
        $string = $driver . ":host=" . $hostname . ";charset=utf8mb4;dbname=" . $database;
        $dbConnection = new \PDO(
            $string, $username, $password
        );
    } catch (\PDOException $e) {
        exit($e->getMessage());
    }
    session_start();

    // Display on Messages on Errors And Success for users
 	$flash_user = '';
 	if (isset($_SESSION['flash_success'])) {
 	 	$flash_user = '
			<div aria-live="polite" aria-atomic="true" class="bg-body-secondary position-fixed top-0 start-50 translate-middle-x bd-example-toasts rounded-3">
				<div class="toast-container p-3">
					<div class="toast show bg-success" id="temporary">
					<div class="toast-header">
						<img src="' . PROOT . 'assets/media/logo/logo-nb-black.png" style="width: 35px; height: 35px;" class="rounded me-2" alt="...">
						<strong class="me-auto"></strong>
						<small>... just now</small>
						<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
					</div>
					<div class="toast-body">
						' . $_SESSION['flash_success'] . '
					</div>
					</div>
				</div>
			</div>
		';
 	 	unset($_SESSION['flash_success']);
 	}

 	if (isset($_SESSION['flash_error'])) {
 	 	$flash_user = '
			<div aria-live="polite" aria-atomic="true" class="bg-body-secondary position-fixed top-0 start-50 translate-middle-x bd-example-toasts rounded-3">
				<div class="toast-container p-3">
					<div class="toast show bg-danger" id="temporary">
					<div class="toast-header">
						<img src="' . PROOT . 'assets/media/logo/logo-nb-black.png" style="width: 35px; height: 35px;" class="rounded me-2" alt="...">
						<strong class="me-auto"></strong>
						<small>... just now</small>
						<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
					</div>
					<div class="toast-body">
						' . $_SESSION['flash_error'] . '
					</div>
					</div>
				</div>
			</div>
		';
 	 	unset($_SESSION['flash_error']);
 	}


    require_once ("Functions.php");
    require_once dirname(__DIR__) . "/config.php";

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'X-CMC_PRO_API_KEY: ' . COINCAP_APIKEY,
            'Accept: application/json'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    $coin_data = json_decode($response, true);
    // Generate scrolling content with icons
    if (is_array($coin_data)) {
        if (isset($coin_data['data'])) {
            foreach (array_slice($coin_data['data'], 0, 10) as $crypto) {
                // $icon = "https://s2.coinmarketcap.com/static/img/coins/64x64/{$crypto['id']}.png";
                // echo "<div class='crypto-item'>";
                // echo "<img src='$icon' alt='{$crypto['name']}'>";
                // echo "{$crypto['name']} ({$crypto['symbol']}): $" . number_format($crypto['quote']['USD']['price'], 2);
                // echo "</div>";
            }
        }
    } else {
        // echo "Error fetching data.";
    }

