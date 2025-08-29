<?php
// Include the database connection
include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];

// Fetch current counts for this user from the database
$query = "SELECT certificate_count, research_count, annual_count FROM upload_counts WHERE user_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $certificate_count = $row['certificate_count'];
    $research_count = $row['research_count'];
    $annual_count = $row['annual_count'];
} else {
    // If no record found, initialize counts
    $certificate_count = 0;
    $research_count = 0;
    $annual_count = 0;

    // Insert the record into the database
    $insert_query = "INSERT INTO upload_counts (user_id) VALUES (?)";
    $insert_stmt = $conn->prepare($insert_query);
    $insert_stmt->bind_param("i", $user_id);
    $insert_stmt->execute();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Faculty Page</title>
</head>
<body>
<!-- <button><a href="/InnovationPOP/dashboard.php">Back to Home</a></button> -->


<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="dashboard.php">Back to Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Upload</li>
  </ol>
</nav>

    <div style="display:flex;justify-content:space-between;background-color:#007bff;">
             <div>
                <ul style="display:flex;justify-content:center;align-items:center;padding:17px 20px 7px 20px;list-style-type: none">
                   <li style="padding:0 20px;text-decoration:none" ><a style="text-decoration:none;color:white" href="faculty_page.php">Upload Documents</a></li>
                   <li style="padding:0 20px;text-decoration:none"><a style="text-decoration:none;color:white" href="view_all_documents.php">View My Documents</a></li>
                   <li style="padding:0 20px;text-decoration:none"><a style="text-decoration:none;color:white" href="view_all_documents.php">See All Documents</a></li>
                </ul>
             </div>

             <div>
                 <ul style="display:flex;justify-content:center;padding:17px 20px 7px 20px;list-style-type: none">
                    <li style="padding:0 20px;text-decoration:none"><a  style="color:white" href="logout.php">Logout</a></li>
                 </ul>
             </div>
    </div>

<div class="container mt-5">
    <h2 class="text-center">Upload Documents</h2>
    <div class="row">
        <!-- Certificate Section -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Certificate</h5>
                    <form action="faculty_page.php" method="POST" enctype="multipart/form-data">
                        <input type="file" name="certificate_file" class="form-control mb-2">
                        <button type="submit" name="upload_certificate" class="btn btn-primary btn-block">Upload</button>
                    </form>
                    <p>Total uploaded: <span><?php echo $certificate_count; ?></span></p>
                </div>
            </div>
        </div>

        <!-- Research Section -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Research</h5>
                    <form action="faculty_page.php" method="POST" enctype="multipart/form-data">
                        <input type="file" name="research_file" class="form-control mb-2">
                        <button type="submit" name="upload_research" class="btn btn-primary btn-block">Upload</button>
                    </form>
                    <p>Total uploaded: <span><?php echo $research_count; ?></span></p>
                </div>
            </div>
        </div>

        <!-- Annual Section -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Annual</h5>
                    <form action="faculty_page.php" method="POST" enctype="multipart/form-data">
                        <input type="file" name="annual_file" class="form-control mb-2">
                        <button type="submit" name="upload_annual" class="btn btn-primary btn-block">Upload</button>
                    </form>
                    <p>Total uploaded: <span><?php echo $annual_count; ?></span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
// Handle Certificate Upload
if (isset($_POST['upload_certificate'])) {
    if ($_FILES['certificate_file']['name']) {
        $target_dir = "uploads/certificates/";
        $target_file = $target_dir . basename($_FILES['certificate_file']['name']);
        if (move_uploaded_file($_FILES['certificate_file']['tmp_name'], $target_file)) {
            // Update the certificate count
            $update_query = "UPDATE upload_counts SET certificate_count = certificate_count + 1 WHERE user_id = ?";
            $update_stmt = $conn->prepare($update_query);
            $update_stmt->bind_param("i", $user_id);
            $update_stmt->execute();

            echo "<script>alert('Certificate uploaded successfully!'); window.location.href='faculty_page.php';</script>";
        }
    }
}

// Handle Research Upload
if (isset($_POST['upload_research'])) {
    if ($_FILES['research_file']['name']) {
        $target_dir = "uploads/research/";
        $target_file = $target_dir . basename($_FILES['research_file']['name']);
        if (move_uploaded_file($_FILES['research_file']['tmp_name'], $target_file)) {
            // Update the research count
            $update_query = "UPDATE upload_counts SET research_count = research_count + 1 WHERE user_id = ?";
            $update_stmt = $conn->prepare($update_query);
            $update_stmt->bind_param("i", $user_id);
            $update_stmt->execute();

            echo "<script>alert('Research uploaded successfully!'); window.location.href='faculty_page.php';</script>";
        }
    }
}

// Handle Annual Upload
if (isset($_POST['upload_annual'])) {
    if ($_FILES['annual_file']['name']) {
        $target_dir = "uploads/annual/";
        $target_file = $target_dir . basename($_FILES['annual_file']['name']);
        if (move_uploaded_file($_FILES['annual_file']['tmp_name'], $target_file)) {
            // Update the annual count
            $update_query = "UPDATE upload_counts SET annual_count = annual_count + 1 WHERE user_id = ?";
            $update_stmt = $conn->prepare($update_query);
            $update_stmt->bind_param("i", $user_id);
            $update_stmt->execute();

            echo "<script>alert('Annual document uploaded successfully!'); window.location.href='faculty_page.php';</script>";
        }
    }
}
?>
