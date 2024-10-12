<?php
// Set the base upload directory dynamically
$uploadBaseDir = __DIR__ . '/uploads'; // Use current directory
$allowed_types = ['image/jpeg', 'image/png', 'application/pdf'];
$max_size = 2 * 1024 * 1024;  // 2 MB max file size

// Function to create directory if it doesn't exist
function createDirectory($dir) {
    if (!is_dir($dir)) {
        if (!mkdir($dir, 0775, true)) {
            die("Failed to create directory: $dir");
        }
    }
}

// Create the uploads directory
createDirectory($uploadBaseDir);

// Check if a file is uploaded
if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_name = basename($_FILES['file']['name']);
    $file_size = $_FILES['file']['size'];
    $file_type = mime_content_type($file_tmp);

    // Validate file size
    if ($file_size > $max_size) {
        die("File is too large");
    }

    // Validate MIME type
    if (!in_array($file_type, $allowed_types)) {
        die("Invalid file type");
    }

    // Sanitize and rename the file
    $file_name = preg_replace("/[^a-zA-Z0-9\.\-_]/", "", $file_name);
    
    // Create a dynamic subdirectory based on the current date
    $uploadDir = $uploadBaseDir . '/' . date('Y-m-d');
    createDirectory($uploadDir);  // Create the date directory if it doesn't exist

    // Create a unique target file name
    $target_file = $uploadDir . '/' . uniqid() . "_" . $file_name;

    // Move the uploaded file
    if (move_uploaded_file($file_tmp, $target_file)) {
        echo "File uploaded successfully to: $target_file";
    } else {
        echo "Failed to upload file.";
    }
} else {
    echo "No file uploaded or there was an upload error.";
}
?>
