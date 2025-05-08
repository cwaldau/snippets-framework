<?php

// Username and password
$valid_username = 'admin';
$valid_password = 'admin';

// Check if the user is already authenticated
if (!isset($_SERVER['PHP_AUTH_USER']) ||
    $_SERVER['PHP_AUTH_USER'] !== $valid_username ||
    $_SERVER['PHP_AUTH_PW'] !== $valid_password) {

    // If not authenticated, send a 401 Unauthorized header
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'You must provide valid credentials to access this resource.';
    exit;
}

// If authenticated, continue with the rest of the code
?>
