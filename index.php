<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secure PHP Demo</title>
</head>
<body>
    <h1>Secure PHP Demo</h1>

    <h2>Eval Test</h2>
    <form action="secure_eval.php" method="POST">
        <input type="text" name="input" placeholder="Enter input">
        <input type="submit" value="Submit">
    </form>

    <h2>Input Validation</h2>
    <form action="secure_input.php" method="POST">
        <input type="text" name="input" placeholder="Enter input">
        <input type="submit" value="Submit">
    </form>

    <h2>File Upload</h2>
    <form action="secure_file_upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <input type="submit" value="Upload">
    </form>

    <h2>Session Management</h2>
    <form action="secure_session.php" method="POST">
        <input type="submit" value="Start Session">
    </form>
</body>
</html>
