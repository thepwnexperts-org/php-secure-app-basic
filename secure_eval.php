<?php
// Check if input is set before processing
$input = isset($_POST['input']) ? $_POST['input'] : '';

if ($input === "hello") {
    echo "Hello, World!";
} else {
    echo "Invalid input";
}
?>
