<?php
session_start();
include 'config.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'faculty') {
    header("Location: login.php");
    exit();
}

$faculty_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['photo_file'])) {
    $target_dir = "uploads/photos/";  // Separate folder for profile photos
    $file_name = basename($_FILES["photo_file"]["name"]);
    $target_file = $target_dir . $file_name;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Allow only image file types
    if (in_array($fileType, ['jpg', 'jpeg', 'png', 'gif'])) {
        if (move_uploaded_file($_FILES["photo_file"]["tmp_name"], $target_file)) {
            // Update photo path in users table
            $stmt = $conn->prepare("UPDATE users SET photo_path = ? WHERE id = ?");
            $stmt->bind_param("si", $file_path, $faculty_id);
            $file_path = $target_file;
            $stmt->execute();

            echo "Photo uploaded successfully.";
            header("Location: faculty_page.php"); // Redirect to faculty page
            exit();
        } else {
            echo "Sorry, there was an error uploading your photo.";
        }
    } else {
        echo "Only JPG, PNG, and GIF files are allowed.";
    }
}
?>
