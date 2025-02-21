<?php

// Sessions For login
function userLogin($user_id) {
	$_SESSION['XPUser'] = $user_id;
    $_SESSION['flash_success'] = 'You are now logged in!';
    redirect(PROOT . 'store/index');
}

function user_is_logged_in(){
	if (isset($_SESSION['XPUser']) && $_SESSION['XPUser'] > 0) {
		return true;
	}
	return false;
}

// Redirect admin if !logged in
function user_login_redirect($url = 'login') {
	$_SESSION['flash_error'] = '<div class="text-center" id="temporary" style="margin-top: 60px;">You must be logged in to access that page.</div>';
	header('Location: '.$url);
}
