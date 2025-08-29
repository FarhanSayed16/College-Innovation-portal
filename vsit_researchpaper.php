<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="index_style.css"> <!-- Link to your custom styles if any -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>
<body>
<!-- navbar -->
 <nav class="navbar navbar-expand-lg navbar-light position-sticky top-0 z-100" style="background-color:#f1f1f6;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;position:stickty">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">College Innovations</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#vsit">VSIT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#vp">VP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#vit">VIT</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="btn btn-outline-primary" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
 </nav>

<!-- Breadcrumb -->
<div class="container ">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="breadcrumb-link text-secondary link-underline link-underline-opacity-0" href="index.php">Home</a></li>
                <li class="breadcrumb-item breadcrumb-active" aria-current="page">VSIT > Research Papers </li>
            </ol>
        </nav>
</div>

<!-- cards -->
<div>
  
    <div class="card text-center" style="width:70%;margin:40px auto;background-color:#f2f8fd">
       <div class="card-header">Research Paper</div>
       <div class="card-body" style="display:flex; justify-content:space-around;width:100%">
           <div style="width:40%;height:200px">
             <img src="images/Ujwala_Sav.png" alt="Faculty Image" style="width:300px;height:100%">
           </div>
           <div style="width:60%;text-align:start;padding-top:30px">
              <h5 class="card-title">Research Paper Title</h5>
              <p class="card-text">Research Paper Description and content.</p>
              <a href="#" class="btn btn-primary">View More</a>
              <a href="#" class="btn btn-primary">Download PDF</a>
           </div>
           
       </div>
       <div class="card-footer text-muted">2 days ago</div>
    </div>
    <div class="card text-center" style="width:70%;margin:40px auto;background-color:#f2f8fd">
       <div class="card-header">Research Paper</div>
       <div class="card-body" style="display:flex; justify-content:space-around;width:100%">
           <div style="width:40%;height:200px">
             <img src="images/vsit.png" alt="Faculty Image" style="width:300px;height:100%">
           </div>
           <div style="width:60%;text-align:start;padding-top:30px">
              <h5 class="card-title">Research Paper Title</h5>
              <p class="card-text">Research Paper Description and content.</p>
              <a href="#" class="btn btn-primary">View More</a>
              <a href="#" class="btn btn-primary">Download PDF</a>
           </div>
           
       </div>
       <div class="card-footer text-muted">2 days ago</div>
    </div>

    <!-- <div class="card text-center" style="width:70%;margin:40px auto;background-color:#f2f8fd">
       <div class="card-header">Research Paper</div>
       <div class="card-body" style="display:flex; justify-content:space-around;width:100%">
           <div style="width:40%" >
             <img src="images/vsit.png" alt="Faculty Image" style="width:300px">
           </div>
           <div style="width:60%;text-align:start;padding-top:30px>
              <h5 class="card-title">Research Paper Title</h5>
              <p class="card-text">Research Paper Description and content.</p>
              <a href="#" class="btn btn-primary">View More</a>
              <a href="#" class="btn btn-primary">Download PDF</a>
           </div>
           
       </div>
       <div class="card-footer text-muted">2 days ago</div>
    </div> -->

   
    

</div>



</body>
</html>