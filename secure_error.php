<?php
// Disable error display on production
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', '/var/log/php_errors.log');  // Secure log location outside web root

// Example error
$result = 10 / 0;  // Will log to error log instead of displaying to user

echo "An error occurred, please try again later.";
?>
