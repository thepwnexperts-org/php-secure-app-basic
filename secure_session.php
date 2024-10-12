<?php
// Set the session save path dynamically
$sessionDir = __DIR__ . '/sessions'; // Use current directory
ini_set('session.save_path', $sessionDir);

// Function to create directory if it doesn't exist
function createDirectory($dir) {
    if (!is_dir($dir)) {
        if (!mkdir($dir, 0775, true)) {
            die("Failed to create directory: $dir");
        }
    }
}

// Create the sessions directory
createDirectory($sessionDir);

// Start the session
session_start();

// Regenerate session ID to prevent fixation
session_regenerate_id(true);

// Set secure session cookie attributes
ini_set('session.cookie_httponly', 1);  // Prevent access to session cookie via JavaScript
ini_set('session.cookie_secure', 0);    // Set to 1 if using HTTPS
ini_set('session.use_strict_mode', 1);  // Prevent session hijacking

// Session variable example
if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = 'guest'; // Set default user
}

// Display the current session user
echo 'Logged in as: ' . htmlspecialchars($_SESSION['user'], ENT_QUOTES, 'UTF-8');
?>
