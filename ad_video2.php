<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <!--<title>Sidebar Menu | Side Navigation Bar</title>-->
    <!-- CSS -->
    <link rel="stylesheet" href="ad1_dashboard.css" />
    <link rel="stylesheet" href="sem1.css" />
    <link rel="stylesheet" href="video.css" />

    
    <!-- Boxicons CSS -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    
  
    <nav>
      <div class="logo">
        <i class="bx bx-menu menu-icon"></i>
        <span class="logo-name">Admin</span>
      </div>
      <div style="position:absolute; left:700px; top:-12px;">
      <div class="topbar">
      <ul>
            <li><a href="zdashboard.html">All Programmes</a></li>
            <li>
                <a href="#">Courses
                    <i class="fas fa-caret-down"></i>
                </a>
                <ul>
                    <li><a class="active" href="#">MBA</a></li>
                    <li><a href="ad1_dashboard.php">MCA</a></li>
                </ul>
            </li>
            <li>
        
        </ul>
</div>
</div>


      


      
          
            
         
    </nav>
   
    <div id="container" class="container">
        <button class="top-btn">Edit page Contents</button>
        <h1>Session 1 - Video Content (DSLM)</h1>
        <div class="inside-nav">
            <ul>
                <li><a href="#container">Preview</a></li>
                <li><a href="#">Edit</a></li>
               
              </ul>
        </div>
        <div class="content">
            <h2>Module 3 - Video</h2>
            <div class="main-video">
                <div class="video">
                    
                    <video src="videoo.mp4" controls muted autoplay></video>
                    <h3>Comments </h3>
                    <textarea id="w3review" name="w3review" rows="4" cols="50"></textarea><br>
                    <br>
                    <button class="top-btnn"><a href = "ad_video3">NEXT</a></button>
                </div>
            </div>
        </div>

    </div>
        
    <section class="overlay"></section>

    <script>
      const navBar = document.querySelector("nav"),
        menuBtns = document.querySelectorAll(".menu-icon"),
        overlay = document.querySelector(".overlay");

      menuBtns.forEach((menuBtn) => {
        menuBtn.addEventListener("click", () => {
          navBar.classList.toggle("open");
        });
      });

      overlay.addEventListener("click", () => {
        navBar.classList.remove("open");
      });
    </script>
  </body>
</html>



