<?php
session_start();
include 'config.php'; // Database connection

// Check if form is submitted
if (isset($_POST['upload'])) {
    $target_dir = "uploads/";
    $file_name = basename($_FILES["fileToUpload"]["name"]);
    $target_file = $target_dir . $file_name;
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if file is a valid type (you can customize this for your needs)
    $allowed_types = ['pdf', 'doc', 'docx', 'jpg', 'png'];
    if (!in_array($fileType, $allowed_types)) {
        echo "Sorry, only PDF, DOC, DOCX, JPG, and PNG files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // Try to upload the file
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // Insert file info into database
            $uploader = $_SESSION['username']; // Assuming you are storing the user's name in session
            $query = "INSERT INTO documents (document_name, uploaded_by) VALUES (?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ss", $file_name, $uploader);
            
            if ($stmt->execute()) {
                echo "The file " . htmlspecialchars($file_name) . " has been uploaded.";
            } else {
                echo "Error storing file information in database.";
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>

<!-- HTML Form for File Upload -->
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="upload">
</form>
