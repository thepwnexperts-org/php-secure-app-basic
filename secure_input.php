<?php
// Check if input is set before processing
$input = isset($_POST['input']) ? filter_var($_POST['input'], FILTER_SANITIZE_STRING) : '';

// Output escaping using htmlspecialchars
echo htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
?>
