<?php
    require ("../system/DatabaseConnector.php");
    if (!admin_is_logged_in()) {
        admin_login_redirect();
    }
    