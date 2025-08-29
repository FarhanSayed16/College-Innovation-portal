<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Innovations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="index_style.css"> <!-- Link to your custom styles if any -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .footer-bottom{
           background: #212529;
           color:white;
        }
        .footer-link{
            color:#c0c3c7;
        }
        .banner{
          display:flex;
          justify-content: space-between;
          padding: 0 130px 20px 130px;
        }

        .banner-left{
          width:750px;
          height:420px;
          box-shadow:0 0 3px grey;
          box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
          background-color:orange;    
        }

     

        .banner-right{
          width:440px;
          height:420px;
          display:flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          /* box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset; */
          /* box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;  */
          box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
          /* background-color:orange; */
          padding:0 30px;
          text-align:start;
        }

        .gallery-slider-container{
        background-color:#e6e6e6;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
        margin:50px 0;
        padding:50px 0;
        /* display:flex;
        flex-direction: column;
        gap:20 */
      }
      .img_box img{
          max-width: 100%;
          height: 250px;
      }
      .img_box img:hover{
        transform: scale(1.06);
      }
      .slider-container .container2{
        padding:0 15px;
        max-width:1330px;
        margin:0 auto;
      }
      .card_slider{
        padding:50px 0 80px 0;
        /* position: relative; */
      }


    </style>
</head>
<body>

        <!-- <div class="" style="display:flex;justify-content:space-evenly">
            <div>1<div>
            <div>2<div>
            <div>3<div>
        </div> -->

    <nav class="" style="background-color:#f1f1f6;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;position:stickty">
        <div style="display:flex;justify-content:space-evenly;padding:20px 50px">
            <div><img src="images/vsit_logo.png" style="width:200px;height:50px"></div>
            <div><img src="images/vit_logo.png" style="width:200px;height:50px" ></div>
            <div><img src="images/vp_logo.png" style="width:200px;height:50px"></div>

        </div>
    </nav>



    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light " style="background-color:#007bff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color:white;margin-right:50px">College Innovations</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
                    <li class="nav-item" >
                        <a class="nav-link" href="#vsit" style="color:white;">VSIT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#vp" style="color:white;">VP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#vit" style="color:white;">VIT</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="btn " href="login.php" style="color:white;border:1px solid white">Login</a>
                    </li>
                </ul>
            </div>
        </div>
</nav>


<!-- banner -->
<div class="banner" style="margin-top:50px" >
    
    <div class="banner-left" style="">       
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
         
     <div class="carousel-inner" style="background-color:gray">

        <div class="carousel-indicators">
           <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
           <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
           <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
           <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
           <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 3"></button> -->
        </div>

        <div class="carousel-item active banner-height" style="height:420px" >
            <img src="images/vsit.png" class="carousel-item-img "  alt="..." style="width:800px;height:420px;opacity: 0.9;" >
            <div class="carousel-caption ">
               <h5 class="" style="font-size:40px;color:white">Vidyalankar School of Technology</h5>
               <!-- <p class="" style="font-size:20px;color:white">Some representative placeholder content for the first slide.</p> -->
            </div>
        </div>
        <div class="carousel-item banner-height" style="height:420px" >
            <img src="images/vit.png" class="carousel-item-img "  alt="..." style="width:800px;height:420px;opacity: 0.9;" >
            <div class="carousel-caption ">
               <h5 class="" style="font-size:40px;color:white">Vidyalankar Institute of Technology</h5>
               <!-- <p class="" style="font-size:20px;color:white">Some representative placeholder content for the first slide.</p> -->
            </div>
        </div>
        <div class="carousel-item  banner-height" style="height:420px" >
            <img src="images/vp_building.png" class="carousel-item-img "  alt="..." style="width:800px;height:420px;opacity: 0.9;" >
            <div class="carousel-caption ">
               <h5 class="" style="font-size:40px;color:white">vidyalankar polytechnic</h5>
               <!-- <p class="" style="font-size:20px;color:white">Some representative placeholder content for the first slide.</p> -->
            </div>
        </div>

       


        </div>
          <button class="carousel-control-prev" style="width:8%" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden" >Previous</span>
          </button>
          <button class="carousel-control-next" style="width:8%" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
          </button>
       </div>  
  
    </div >

   
 <div class="banner-right">
  <!-- Event 1 -->
  <div style="display: flex; justify-content: flex-start; align-items: center; gap: 10px;">
      <i class="bi bi-chevron-double-right"></i>
      <div>
          <h6 class="event_title">Vidyalankar School of Technology | 
              ►<a href="https://www.facebook.com/Vidyalankar.VSIT/posts/566491095493637" target="_blank">Explore</a>
          </h6>
          <p style="font-size:12px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi impedit, est vel pariatur non eveniet.</p>
      </div>
  </div>
  <hr style="border:2px solid black;width:100%"/>

  <!-- Event 2 -->
  <div style="display: flex; justify-content: flex-start; align-items: center; gap: 10px;">
        <i class="bi bi-chevron-double-right"></i>
      <div>
          <h6 class="event_title">Vidyalankar Institute of Technology | 
              ►<a href="https://www.facebook.com/Vidyalankar.VSIT/posts/814928150649929" target="_blank">Explore</a>
          </h6>
          <p style="font-size:12px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi impedit, est vel pariatur non eveniet.</p>

      </div>
  </div>
  <hr style="border:2px solid black;width:100%"/>


  <!-- Event 3 -->
  <div style="display: flex; justify-content: flex-start; align-items: center; gap: 10px;">
     <i class="bi bi-chevron-double-right"></i>
      <div>
          <h6 class="event_title">Vidyalankar Polytechnic | 
              ►<a href="https://www.instagram.com/p/C_TKTMVPH4U/" target="_blank">Explore</a>
          </h6>
          <p style="font-size:12px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi impedit, est vel pariatur non eveniet.</p>

      </div>
  </div>

  

 </div>

 </div>
   
 </div >
</div>



<!-- <button><a href="/InnovationPOP/vsit_innovations.php">Button</a></button> -->

<div class="container mt-5" id="vsit">
    <div >
        <h2>VSIT - Vidyalankar School of Information Technology</h2>

         <!-- gallery -->
          <div class="gallery-slider-container">
                <div class="container " style="text-align:center">
                  <h2>Gallery Section</h2>
                  <p>Stay up-to-date with the latest VDT news and announcements. Get in touch with our team today if you need more information.</p>
                </div>

             <section class="slider-container" >
                 <div class="container2">
           
                     <div class="swiper card_slider">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide"> 
                              <div class="img_box" ><img src="images/vsit.png" ></div> 
                           </div>
                           <div class="swiper-slide"> 
                              <div class="img_box"><img src="images/9.png"></div>  
                           </div>
                           <div class="swiper-slide"> 
                             <div class="img_box"><img src="images/10.png"></div>  
                           </div>
                           <div class="swiper-slide"> 
                             <div class="img_box"><img src="images/11.png"></div>  
                           </div>
                           <div class="swiper-slide"> 
                             <div class="img_box"><img src="images/908P78P.png "></div>  
                           </div>
                           <div class="swiper-slide"> 
                             <div class="img_box"><img src="images/DFH.png"></div>  
                           </div>
                           <div class="swiper-slide"> 
                             <div class="img_box"><img src="images/R4RR.png"></div>  
                           </div>
                           <div class="swiper-slide"> 
                             <div class="img_box"><img src="images/V10.png"></div>  
                           </div>
                           <div class="swiper-slide"> 
                             <div class="img_box"><img src="images/9.png"></div>  
                           </div>
                           <div class="swiper-slide"> 
                             <div class="img_box"><img src="images/DFH.png"></div>  
                           </div>
                        </div>
                        <div class="swiper-button-next" ></div>
                         <div class="swiper-button-prev" ></div>
                        <div class="swiper-pagination " ></div>
                     </div>
      
              </div>
             </section>
 
            </div>
        <!-- gallery -->

             <div class="row">

                <div class="col-md-4">
                    <div class="card" style="width: 24rem;height:11rem">
                      <!-- <img src="images/9.png" class="card-img-top" alt="..."> -->
                      <div class="card-body">
                        <h5 class="card-title">Research Papers</h5>
                        <p class="card-text">List of research papers submitted by VSIT faculty and students.</p>
                        <a href="vsit_researchpaper.php" class="btn btn-primary">View More</a>
                      </div>
                    </div>
                </div>

                <div class="col-md-4">
                     <div class="card" style="width: 24rem;height:11rem">
                         <!-- <img src="..." class="card-img-top" alt="..."> -->
                         <div class="card-body">
                           <h5 class="card-title">Awards</h5>
                           <p class="card-text">Achievements and awards won by VSIT.</p>
                           <a href="/InnovationPOP/vsit_innovations.php" class="btn btn-primary">View More</a>
                         </div>
                     </div>
                </div>

                <div class="col-md-4">
                     <div class="card" style="width: 24rem;height:11rem">
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                          <h5 class="card-title">Innovation</h5>
                          <p class="card-text">Description of innovations by VSIT students or faculty .</p>
                          <a href="/InnovationPOP/vsit_innovations.php" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>

             </div>

    </div>
</div>

<div class="container mt-5" id="vit">
    <div >
        <h2>VIT - Vidyalankar Institutate of Technology</h2>

         <!-- gallery -->
         <div class="gallery-slider-container">
                <div class="container " style="text-align:center">
                  <h2>Gallery Section</h2>
                  <p>Stay up-to-date with the latest VDT news and announcements. Get in touch with our team today if you need more information.</p>
                </div>

             <section class="slider-container" >
                 <div class="container2">
           
                     <div class="swiper card_slider">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide"> 
                              <div class="img_box" ><img src="images/vsit.png" ></div> 
                           </div>
                           <div class="swiper-slide"> 
                              <div class="img_box"><img src="images/9.png"></div>  
                           </div>
                           <div class="swiper-slide"> 
                             <div class="img_box"><img src="images/10.png"></div>  
                           </div>
                           <div class="swiper-slide"> 
                             <div class="img_box"><img src="images/11.png"></div>  
                           </div>
                           <div class="swiper-slide"> 
                             <div class="img_box"><img src="images/908P78P.png "></div>  
                           </div>
                           <div class="swiper-slide"> 
                             <div class="img_box"><img src="images/DFH.png"></div>  
                           </div>
                           <div class="swiper-slide"> 
                             <div class="img_box"><img src="images/R4RR.png"></div>  
                           </div>
                           <div class="swiper-slide"> 
                             <div class="img_box"><img src="images/V10.png"></div>  
                           </div>
                           <div class="swiper-slide"> 
                             <div class="img_box"><img src="images/9.png"></div>  
                           </div>
                           <div class="swiper-slide"> 
                             <div class="img_box"><img src="images/DFH.png"></div>  
                           </div>
                        </div>
                        <div class="swiper-button-next" ></div>
                         <div class="swiper-button-prev" ></div>
                        <div class="swiper-pagination " ></div>
                     </div>
      
              </div>
             </section>
 
            </div>
        <!-- gallery -->

             <div class="row" style="z-index:-1">

                <div class="col-md-4">
                    <div class="card" style="width: 24rem;height:11rem">
                      <!-- <img src="..." class="card-img-top" alt="..."> -->
                      <div class="card-body">
                        <h5 class="card-title">Innovations</h5>
                        <p class="card-text">Description of innovations by VIT students or faculty.</p>
                        <a href="/InnovationPOP/vsit_innovations.php" class="btn btn-primary">View More</a>
                      </div>
                    </div>
                </div>

                <div class="col-md-4">
                     <div class="card" style="width: 24rem;height:11rem">
                         <!-- <img src="..." class="card-img-top" alt="..."> -->
                         <div class="card-body">
                           <h5 class="card-title">Awards</h5>
                           <p class="card-text">Achievements and awards won by VIT.</p>
                           <a href="/InnovationPOP/vsit_innovations.php" class="btn btn-primary">View More</a>
                         </div>
                     </div>
                </div>

                <div class="col-md-4">
                     <div class="card" style="width: 24rem;height:11rem">
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                          <h5 class="card-title">Research Papers</h5>
                          <p class="card-text">List of research papers submitted by VIT faculty and students.</p>
                          <a href="/InnovationPOP/vsit_innovations.php" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>

             </div>

    </div>
</div>

<div class="container mt-5" id="vp">
    <div >
        <h2>VP - Vidyalankar Polytechnic</h2>

         <!-- gallery -->
         <div class="gallery-slider-container">
                <div class="container " style="text-align:center">
                  <h2>Gallery Section</h2>
                  <p>Stay up-to-date with the latest VDT news and announcements. Get in touch with our team today if you need more information.</p>
                </div>

             <section class="slider-container" >
                 <div class="container2">
           
                     <div class="swiper card_slider">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide"> 
                              <div class="img_box" ><img src="images/vsit.png" ></div> 
                           </div>
                           <div class="swiper-slide"> 
                              <div class="img_box"><img src="images/9.png"></div>  
                           </div>
                           <div class="swiper-slide"> 
                             <div class="img_box"><img src="images/10.png"></div>  
                           </div>
                           <div class="swiper-slide"> 
                             <div class="img_box"><img src="images/11.png"></div>  
                           </div>
                           <div class="swiper-slide"> 
                             <div class="img_box"><img src="images/908P78P.png "></div>  
                           </div>
                           <div class="swiper-slide"> 
                             <div class="img_box"><img src="images/DFH.png"></div>  
                           </div>
                           <div class="swiper-slide"> 
                             <div class="img_box"><img src="images/R4RR.png"></div>  
                           </div>
                           <div class="swiper-slide"> 
                             <div class="img_box"><img src="images/V10.png"></div>  
                           </div>
                           <div class="swiper-slide"> 
                             <div class="img_box"><img src="images/9.png"></div>  
                           </div>
                           <div class="swiper-slide"> 
                             <div class="img_box"><img src="images/DFH.png"></div>  
                           </div>
                        </div>
                        <div class="swiper-button-next" ></div>
                         <div class="swiper-button-prev" ></div>
                        <div class="swiper-pagination " ></div>
                     </div>
      
              </div>
             </section>
 
            </div>
        <!-- gallery -->

             <div class="row">

                <div class="col-md-4">
                    <div class="card" style="width: 24rem;height:11rem">
                      <!-- <img src="..." class="card-img-top" alt="..."> -->
                      <div class="card-body">
                        <h5 class="card-title">Innovation</h5>
                        <p class="card-text">Description of innovations by VP students or faculty.</p>
                        <a href="/InnovationPOP/vsit_innovations.php" class="btn btn-primary">View More</a>
                      </div>
                    </div>
                </div>

                <div class="col-md-4">
                     <div class="card" style="width: 24rem;height:11rem">
                         <!-- <img src="..." class="card-img-top" alt="..."> -->
                         <div class="card-body">
                           <h5 class="card-title">Awards</h5>
                           <p class="card-text">Achievements and awards won by VP.</p>
                           <a href="/InnovationPOP/vsit_innovations.php" class="btn btn-primary">View More</a>
                         </div>
                     </div>
                </div>

                <div class="col-md-4">
                     <div class="card" style="width: 24rem;height:11rem">
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                          <h5 class="card-title">Research Papers</h5>
                          <p class="card-text">List of research papers submitted by VP faculty and students.</p>
                          <a href="/InnovationPOP/vsit_innovations.php" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>

             </div>

    </div>
</div>


<!-- Footer -->
<footer class="footer-bottom text-center ">
      <!-- Grid container -->
      <div class="container p-4">
         
        <!-- Section: Links -->
             <section class="">
         
               <!--Grid row-->
               <div class="row">
                 <!--Grid column-1-->
                 <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                   <h2 class="text-uppercase text-start">COLLEGE LOGO</h2>
         
                   <p class="text-start">Vidyalankar Dnyanapeeth Trust is amongst the most popular colleges of the city offering B.Tech and doctoral programmes in IT, Commerce, Management and Mass Media. VDT is a college affiliated to the University of Mumbai and approved by the Government of Maharashtra. </p><div class="ms+15"><a href="#!" style="color:#3b5998; font-size: 24px;"><i class="bi bi-facebook"></i></a><a href="#!" style="color:#1DA1F2; font-size: 24px;" class="me-2"><i class="bi bi-twitter"></i></a><a href="#!" style="color:#C13584; font-size: 24px;" class="me-2"><i class="bi bi-instagram"></i></a><a href="#!" style="color:#0077B5; font-size: 24px;" class="me-2"><i class="bi bi-linkedin"></i></a><a href="#!" style="color:#0088cc; font-size: 24px;" class="me-2"><i class="bi bi-telegram"></i></a>
                 </div>
    </div>
                 
              <!--Grid column-2-->
                 <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                   <h5 class="text-uppercase">Department</h5>
         
                   <ul class="list-unstyled mb-0">
                     <li class="py-1">
                       <a class="footer-link" href="#!">Mechanical Engineering</a>
                      </li>
                     <li class="py-1">
                       <a class="footer-link" href="#!">Computer Science Engineering        </a>
                     </li>
                     <li class="py-1">
                       <a class="footer-link" href="#!">Information Technology</a>
                     </li>
                     <li class="py-1">
                       <a class="footer-link" href="#!">Electrical Engineering</a>
                      </li>
                   </ul>
                 </div>
                 
         
                 <!--Grid column-3-->
                 <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                   <h5 class="text-uppercase">Quick Links</h5>
         
                   <ul class="list-unstyled mb-0">
                     <li class="py-1">
                       <a class="footer-link" href="#!">Home</a>
                     </li>
                     <li class="py-1">
                       <a class="footer-link" href="#!">Events/News</a>
                     </li>
                     <li class="py-1"> 
                       <a class="footer-link" href="#!">Advertisements</a>
                     </li>
                     <li class="py-1">
                       <a class="footer-link" href="#!">Help</a>
                     </li>
                    </ul>
                 </div>
                 
         
                 <!--Grid column-4-->
                 <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                   <h5 class="text-uppercase">Contact Us</h5>
         
                   <ul class="list-unstyled mb-0 ">
                     <li class="py-2 ">
                       <a class="footer-link text-decoration-none" href="#!"><i class="bi bi-bank"></i> College Full Name</a>
                     </li>
                     <li class="py-2">
                       <a class="footer-link text-decoration-none" href="#!"><i class="bi bi-envelope"></i> saaj@gmail.com</a>
                     </li>
                     <li class="py-2">
                       <a class="footer-link text-decoration-none" href="#!"><i class="bi bi-telephone-fill"></i> 9876543210</a>
                     </li>
                     <li class="py-2">
                       <a class="footer-link text-decoration-none" href="#!"><i class="bi bi-geo-alt"></i> Location </a>
                      </li>
                   </ul>
                 </div>
                 
               </div>
               <!--Grid row-->
               
         
             </section>
             <!-- Section: Links -->
           </div>
           <!-- Grid container -->
         
           <!-- Copyright -->
           <div class="text-center p-1" style="background-color: #007bff">
             © 2024 Copyright:
             <a class="text-reset fw-bold text-decoration-none" href="#">All Rights Reserved by TechWorker's</a>
            </div>
           <!-- Copyright -->
    </footer>
<!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
     <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".card_slider", {
      // slidesPerView: 5,
      spaceBetween: 10,
      loop:true,
      speed:1000,
      autoplay:{
        delay:2000,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        480: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 4,
        },
        1200: {
          slidesPerView: 5,
        },

      },
    });
  </script>
</body>
</html>