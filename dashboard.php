

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
</head>
<style> 
.card {
            /* width:100%; */
            border: none;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

      

        .card-title {
            color: #007bff;
            font-weight: 600;
        }

        .card-text {
            color: #333;
        }

        .upload-section {
            padding: 50px 0;
        }

        .upload-card {
            background-color: white;
            padding: 20px;
            border-radius: 15px;
            margin-bottom: 30px;
            transition: all 0.3s ease-in-out;
        }

        .upload-card:hover {
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }
        </style>
<body>

<!-- <a href="logout.php">Logout</a> -->

<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}


echo "<h1>Welcome, " . $_SESSION['username'] . "!</h1>";

if ($_SESSION['role'] == 'admin') {
    // echo "<h2 >Admin Dashboard</h2>";
    // Admin-specific content goes here
    echo '

           <div style="display:flex;justify-content:space-between;background-color:#007bff">
             <div>
                <ul style="display:flex;justify-content: center;background-color:#007bff;padding:10px 20px;list-style-type: none;color:white">
                   <li style="padding:0 20px;text-decoration:none"><a style="text-decoration:none;color:white" href="faculty_page.php">View Faculty</a></li>
                   <li style="padding:0 20px;text-decoration:none"><a style="text-decoration:none;color:white" href="student_page.php">View Students</a></li>
                   <li style="padding:0 20px;text-decoration:none"><a style="text-decoration:none;color:white" href="chart.php">View Statistical</a></li>
                   <li style="padding:0 20px;text-decoration:none"><a style="text-decoration:none;color:white" href="view_all_documents.php">See All Documents</a></li>
                 </ul>
             </div>

             <div>
                 <ul style="display:flex;justify-content: center;padding:10px 20px;list-style-type: none">
                    <li style="padding:0 20px;text-decoration:none"><a  style="color:white;border:1px solid white" href="logout.php">Logout</a></li>
                 </ul>
             </div>
          </div>
          


<div style="margin:30px auto;width:90%">
    <div style="display:flex;justify-content:space-evenly">
        <div style="width:40%">
            <div class="card upload-card">
                    <h2 class="card-title">View Faculty</h2>
                    <p class="card-text">Upload your latest research papers for review and showcase..</p>
                    <a href="faculty_page.php" class="btn btn-primary" style="background-color:#007bff;color:white;padding:5px 10px;border-radius:2px;margin-right:10px;text-decoration:none">Upload</a>
                    <a href="#" class="btn btn-upload" style="background-color:#007bff;color:white;padding:5px 10px;border-radius:2px;margin-right:10px;text-decoration:none">View</a>

                </div>
        </div>
        <div style="width:40%">
            <div class="card upload-card">
                    <h2 class="card-title">View Students</h2>
                    <p class="card-text">Showcase the latest innovations developed in your department.</p>
                    <a href="student_page.php" class="btn btn-upload" style="background-color:#007bff;color:white;padding:5px 10px;border-radius:2px;margin-right:10px;text-decoration:none">Upload</a>
                    <a href="#" class="btn btn-upload" style="background-color:#007bff;color:white;padding:5px 10px;border-radius:2px;margin-right:10px;text-decoration:none">View</a>

                </div>
        </div>
    </div>
    <div style="display:flex;justify-content:space-evenly">
        <div style="width:40%">
            <div class="card upload-card">
                    <h2 class="card-title">See All Documents</h2>
                    <p class="card-text">List and describe upcoming academic or technical events.</p>
                    <a href="view_all_documents.php" class="btn btn-upload" style="background-color:#007bff;color:white;padding:5px 10px;border-radius:2px;margin-right:10px;text-decoration:none">Upload</a>
                    <a href="#" class="btn btn-upload" style="background-color:#007bff;color:white;padding:5px 10px;border-radius:2px;margin-right:10px;text-decoration:none">View</a>

                </div>
        </div>
        <div style="width:40%">
            <div class="card upload-card">
                    <h2 class="card-title">Statistical Visualization</h2>
                    <p class="card-text">List and describe upcoming academic or technical events.</p>
                    <a href="chart.php" class="btn btn-upload" style="background-color:#007bff;color:white;padding:5px 10px;border-radius:2px;margin-right:10px;text-decoration:none">Upload</a>
                    <a href="#" class="btn btn-upload" style="background-color:#007bff;color:white;padding:5px 10px;border-radius:2px;margin-right:10px;text-decoration:none">View</a>

                </div>
        </div>
        
    </div>
</div>';
} elseif ($_SESSION['role'] == 'faculty') {
    // echo "<h2>Faculty Dashboard</h2>";
    // Faculty-specific content goes here
    echo '

          <div style="display:flex;justify-content:space-between;background-color:#007bff">
             <div>
                <ul style="display:flex;justify-content: center;padding:10px 20px;list-style-type: none">
                   <li style="padding:0 20px;text-decoration:none"><a style="text-decoration:none;color:white" href="faculty_page.php">Upload Documents</a></li>
                   <li style="padding:0 20px;text-decoration:none"><a style="text-decoration:none;color:white" href="view_all_documents.php">View My Documents</a></li>
                   <li style="padding:0 20px;text-decoration:none"><a style="text-decoration:none;color:white" href="view_all_documents.php">See All Documents</a></li>
                </ul>
             </div>

             <div>
                 <ul style="display:flex;justify-content: center;padding:10px 20px;list-style-type: none">
                    <li style="padding:0 20px;text-decoration:none"><a  style="color:white" href="logout.php">Logout</a></li>
                 </ul>
             </div>
          </div>



<div style="margin:30px auto;width:90%">
    <div style="display:flex;justify-content:space-evenly">
        <div style="width:40%">
            <div class="card upload-card">
                    <h2 class="card-title">Upload Research Paper</h2>
                    <p class="card-text">Upload your latest research papers for review and showcase..</p>
                    <a href="faculty_page.php" class="btn btn-primary" style="background-color:#007bff;color:white;padding:5px 10px;border-radius:2px;margin-right:10px;text-decoration:none">Upload</a>
                    <a href="#" class="btn btn-upload" style="background-color:#007bff;color:white;padding:5px 10px;border-radius:2px;margin-right:10px;text-decoration:none">View</a>

                </div>
        </div>
        <div style="width:40%">
            <div class="card upload-card">
                    <h2 class="card-title">Upload Achievements</h2>
                    <p class="card-text">Showcase the latest innovations developed in your department.</p>
                    <a href="faculty_page.php" class="btn btn-upload" style="background-color:#007bff;color:white;padding:5px 10px;border-radius:2px;margin-right:10px;text-decoration:none">Upload</a>
                    <a href="#" class="btn btn-upload" style="background-color:#007bff;color:white;padding:5px 10px;border-radius:2px;margin-right:10px;text-decoration:none">View</a>

                </div>
        </div>
    </div>
    <div style="display:flex;justify-content:space-evenly">
        <div style="width:40%">
            <div class="card upload-card">
                    <h2 class="card-title">Upload Events</h2>
                    <p class="card-text">List and describe upcoming academic or technical events.</p>
                    <a href="view_all_documents.php" class="btn btn-upload" style="background-color:#007bff;color:white;padding:5px 10px;border-radius:2px;margin-right:10px;text-decoration:none">Upload</a>
                    <a href="#" class="btn btn-upload" style="background-color:#007bff;color:white;padding:5px 10px;border-radius:2px;margin-right:10px;text-decoration:none">View</a>

                </div>
        </div>
        <div style="width:40%">
            <div class="card upload-card">
                    <h2 class="card-title">Upload Innovation</h2>
                    <p class="card-text">Highlight notable awards, recognitions, and achievements.</p>
                    <a href="#" class="btn btn-upload" style="background-color:#007bff;color:white;padding:5px 10px;border-radius:2px;margin-right:10px;text-decoration:none">Upload</a>
                    <a href="#" class="btn btn-upload" style="background-color:#007bff;color:white;padding:5px 10px;border-radius:2px;margin-right:10px;text-decoration:none">View</a>

                </div>
        </div>
    </div>
</div>';
} elseif ($_SESSION['role'] == 'student') {
    // echo "<h2>Student Dashboard</h2>";
    // Student-specific content goes here
    echo '

        <div style="display:flex;justify-content:space-between;background-color:#007bff">
             <div>
                <ul style="display:flex;justify-content: center;background-color:#007bff;padding:10px 20px;list-style-type: none">
                  <li style="padding:0 20px;text-decoration:none"><a style="text-decoration:none;color:white" href="student_upload.php">Upload Documents</a></li>
                  <li style="padding:0 20px;text-decoration:none"><a style="text-decoration:none;color:white" href="view_student_documents.php">View My Documents</a></li>
                  <li style="padding:0 20px;text-decoration:none"><a style="text-decoration:none;color:white" href="view_all_documents.php">See All Documents</a></li>
             </ul>
             </div>

             <div>
                 <ul style="display:flex;justify-content: center;padding:10px 20px;list-style-type: none">
                    <li style="padding:0 20px;text-decoration:none"><a  style="color:white" href="logout.php">Logout</a></li>
                 </ul>
             </div>
          </div>

          <div style="margin:30px auto;width:90%">
    <div style="display:flex;justify-content:space-evenly">
        <div style="width:40%">
            <div class="card upload-card">
                    <h2 class="card-title">Upload Research Paper</h2>
                    <p class="card-text">Upload your latest research papers for review and showcase..</p>
                    <a href="faculty_page.php" class="btn btn-primary" style="background-color:#007bff;color:white;padding:5px 10px;border-radius:2px;margin-right:10px;text-decoration:none">Upload</a>
                    <a href="#" class="btn btn-upload" style="background-color:#007bff;color:white;padding:5px 10px;border-radius:2px;margin-right:10px;text-decoration:none">View</a>

                </div>
        </div>
        <div style="width:40%">
            <div class="card upload-card">
                    <h2 class="card-title">Upload Achievements</h2>
                    <p class="card-text">Showcase the latest innovations developed in your department.</p>
                    <a href="faculty_page.php" class="btn btn-upload" style="background-color:#007bff;color:white;padding:5px 10px;border-radius:2px;margin-right:10px;text-decoration:none">Upload</a>
                    <a href="#" class="btn btn-upload" style="background-color:#007bff;color:white;padding:5px 10px;border-radius:2px;margin-right:10px;text-decoration:none">View</a>

                </div>
        </div>
    </div>
    <div style="display:flex;justify-content:space-evenly">
        <div style="width:40%">
            <div class="card upload-card">
                    <h2 class="card-title">Upload Events</h2>
                    <p class="card-text">List and describe upcoming academic or technical events.</p>
                    <a href="view_all_documents.php" class="btn btn-upload" style="background-color:#007bff;color:white;padding:5px 10px;border-radius:2px;margin-right:10px;text-decoration:none">Upload</a>
                    <a href="#" class="btn btn-upload" style="background-color:#007bff;color:white;padding:5px 10px;border-radius:2px;margin-right:10px;text-decoration:none">View</a>

                </div>
        </div>
        <div style="width:40%">
            <div class="card upload-card">
                    <h2 class="card-title">Upload Innovation</h2>
                    <p class="card-text">Highlight notable awards, recognitions, and achievements.</p>
                    <a href="#" class="btn btn-upload" style="background-color:#007bff;color:white;padding:5px 10px;border-radius:2px;margin-right:10px;text-decoration:none">Upload</a>
                    <a href="#" class="btn btn-upload" style="background-color:#007bff;color:white;padding:5px 10px;border-radius:2px;margin-right:10px;text-decoration:none">View</a>

                </div>
        </div>
    </div>
</div>';
}
?>



 
<?php include 'chart.php' ?>

 
  
<!-- <a href="logout.php">Logout</a> -->


</body>
</html>
