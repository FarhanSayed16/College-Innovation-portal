<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $uploadedBy = $_SESSION['user_id'];
    $fileType = $_POST['file_type'];
    $role = $_SESSION['role'];
    
    $targetDir = "uploads/";
    $filename = basename($_FILES['file']['name']);
    $targetFilePath = $targetDir . $filename;

    if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
        // Insert file info into the database
        $stmt = $conn->prepare("INSERT INTO uploads (filename, uploaded_by, file_type, role) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("siss", $filename, $uploadedBy, $fileType, $role);
        $stmt->execute();
        
        echo "The file " . $filename . " has been uploaded.";
        header("Location: faculty_page.php");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
