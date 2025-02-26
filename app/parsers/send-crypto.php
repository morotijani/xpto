<?php
    require ("../system/DatabaseConnector.php");
	if (!user_is_logged_in()) {
		redirect(PROOT . 'auth/logout');
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
        dnd($_POST);
    }