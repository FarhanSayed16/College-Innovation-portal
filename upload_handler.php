<?php
// Database connection
include 'config.php'; // Assuming you have a config.php file for DB connection

// Check if a file is uploaded
if (isset($_FILES['file']) && isset($_POST['upload_type'])) {
    $uploadType = $_POST['upload_type'];
    $targetDirectory = "uploads/"; // Make sure this directory exists and is writable
    $targetFile = $targetDirectory . basename($_FILES['file']['name']);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check file size (e.g., max 5MB)
    if ($_FILES['file']['size'] > 5000000) {
        $uploadOk = 0;
        $message = "Sorry, your file is too large.";
    }

    // Allow certain file formats
    $allowedFormats = ['jpg', 'jpeg', 'png', 'pdf', 'doc', 'docx'];
    if (!in_array($fileType, $allowedFormats)) {
        $uploadOk = 0;
        $message = "Sorry, only JPG, JPEG, PNG, PDF, DOC, and DOCX files are allowed.";
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $message = isset($message) ? $message : "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
            // Insert upload details into the database
            $query = "INSERT INTO uploads (filename, file_type, role) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($query);

            // Check if the prepare() method succeeded
            if ($stmt === false) {
                die("Error preparing the SQL statement: " . $conn->error);
            }

            $role = 'faculty'; // Assuming the role is faculty in this context

            // Binding parameters
            if (!$stmt->bind_param("sss", $targetFile, $uploadType, $role)) {
                die("Error binding parameters: " . $stmt->error);
            }

            // Execute the statement
            if ($stmt->execute()) {
                $message = "The file " . htmlspecialchars(basename($_FILES['file']['name'])) . " has been uploaded.";
            } else {
                $message = "Error executing the statement: " . $stmt->error;
            }

            $stmt->close();
        } else {
            $message = "Sorry, there was an error uploading your file.";
        }
    }
} else {
    $message = "No file or upload type provided.";
}

// Redirect back to the faculty page with a message
header("Location: faculty_page.php?message=" . urlencode($message));
exit;
?>
