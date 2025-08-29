<?php
session_start();
include 'config.php';

if ($_SESSION['role'] != 'admin') {
    die("You do not have permission to access this page.");
}

if (isset($_GET['id'])) {
    $fileId = $_GET['id'];

    // Fetch the file name from the database
    $stmt = $conn->prepare("SELECT filename FROM uploads WHERE id = ?");
    $stmt->bind_param("i", $fileId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $filePath = "uploads/" . $row['filename'];

        // Delete the file from the server
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        // Delete the entry from the database
        $deleteStmt = $conn->prepare("DELETE FROM uploads WHERE id = ?");
        $deleteStmt->bind_param("i", $fileId);
        $deleteStmt->execute();

        echo "File deleted successfully.";
    } else {
        echo "File not found.";
    }
} else {
    echo "Invalid request.";
}
?>
