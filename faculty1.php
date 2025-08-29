<?php
session_start();
include 'config.php'; // Include your DB config

// Check if the user is logged in and is a faculty member
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'faculty') {
    header("Location: login.php"); // Redirect to login if not authorized
    exit();
}

// Fetch faculty details including photo
$faculty_id = $_SESSION['user_id'];
$query = "SELECT username, photo_path FROM users WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $faculty_id);
$stmt->execute();
$result = $stmt->get_result();
$faculty = $result->fetch_assoc();

// Handle file uploads (Research, Certificate, Annual reports)
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['document_file'])) {
    $target_dir = "uploads/";
    $file_name = basename($_FILES["document_file"]["name"]);
    $target_file = $target_dir . $file_name;
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Only allow certain file types
    if (in_array($fileType, ['pdf', 'jpg', 'jpeg', 'png', 'gif'])) {
        if (move_uploaded_file($_FILES["document_file"]["tmp_name"], $target_file)) {
            // File uploaded successfully, insert into DB
            $category = $_POST['category']; // Research, Certificate, or Annual
            $stmt = $conn->prepare("INSERT INTO documents (document_name, file_path, uploaded_by, category) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssis", $document_name, $file_path, $faculty_id, $category);
            
            $document_name = $file_name;
            $file_path = $target_file;
            $stmt->execute();
            echo "File uploaded successfully.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "Only PDF, JPG, PNG, and GIF files are allowed.";
    }
}

// Fetch uploaded documents by the faculty member
$doc_query = "SELECT document_name, file_path, category, upload_date FROM documents WHERE uploaded_by = ?";
$doc_stmt = $conn->prepare($doc_query);
$doc_stmt->bind_param("i", $faculty_id);
$doc_stmt->execute();
$docs_result = $doc_stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Page</title>
</head>
<body>

<h1>Welcome, <?php echo htmlspecialchars($faculty['username']); ?></h1>

<!-- Display faculty photo -->
<?php if (!empty($faculty['photo_path'])): ?>
    <img src="<?php echo htmlspecialchars($faculty['photo_path']); ?>" alt="Teacher Photo" width="150">
<?php else: ?>
    <p>No photo uploaded yet.</p>
<?php endif; ?>

<!-- Upload form for research, certificates, and annual reports -->
<h2>Upload Documents</h2>
<form action="faculty_page.php" method="post" enctype="multipart/form-data">
    <label for="category">Select Category:</label>
    <select name="category" required>
        <option value="research">Research Paper</option>
        <option value="certificate">Certificate</option>
        <option value="annual">Annual Report</option>
    </select><br><br>
    <input type="file" name="document_file" required>
    <button type="submit">Upload</button>
</form>

<h2>Your Uploaded Documents</h2>
<table border="1">
    <tr>
        <th>Document Name</th>
        <th>Category</th>
        <th>Upload Date</th>
        <th>View Document</th>
    </tr>
    <?php while ($row = $docs_result->fetch_assoc()): ?>
    <tr>
        <td><?php echo htmlspecialchars($row['document_name']); ?></td>
        <td><?php echo htmlspecialchars($row['category']); ?></td>
        <td><?php echo htmlspecialchars($row['upload_date']); ?></td>
        <td><a href="<?php echo htmlspecialchars($row['file_path']); ?>" target="_blank">View Document</a></td>
    </tr>
    <?php endwhile; ?>
</table>

</body>
</html>
