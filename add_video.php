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
    <link rel="stylesheet" href="ad2_dashboard.css" />
    <link rel="stylesheet" href="add1.css" />

    
    <!-- Boxicons CSS -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  </head>
  <body>
    
  
    <nav>
      <div class="logo">
        <i class="bx bx-menu menu-icon"></i>
        <span class="logo-name">Admin</span>
      </div>
      <div style="position:absolute; left:760px; top:-12px;">
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


      


      <div class="sidebar">
        <div class="logo">
          <i class="bx bx-menu menu-icon"></i>
          <span class="logo-name">Admin Panel</span>
        </div>

        <div class="sidebar-content">
          <ul class="lists">
            <li class="list">
              <a href="add1.php" class="nav-link">
                <i class="bx bx-home-alt icon"></i>
                <span class="link">Add</span>
              </a>
            </li>
            <li class="list">
              <a href="semester.php" class="nav-link">
                <i class="bx bx-bar-chart-alt-2 icon"></i>
                <span class="link">Semester</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-bell icon"></i>
                <span class="link">Subject</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-message-rounded icon"></i>
                <span class="link">Department</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-pie-chart-alt-2 icon"></i>
                <span class="link">Content</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-heart icon"></i>
                <span class="link">Flipbook</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-folder-open icon"></i>
                <span class="link">Assignments</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-log-out icon"></i>
                <span class="link">Announcement</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-log-out icon"></i>
                <span class="link">Logout</span>
              </a>
            </li>
            
          </ul>

          
            
          </div>
        </div>
      </div>
    </nav>
    <div class="testbox">
    <form id="createform" method="post" enctype="multipart/form-data">
     <div class="banner">
        <h1>ADD CONTENT</h1>
      </div>
      <div class="item">
        <div class="name-item">
       
         
      
        </div>
        </div>
       
      
      
    
        <div class="item">
          <select name="session" id="sessionn" required>
            <option selected value="" disabled>select the session</option>
            <option value="1">session1</option>
            <option value="2">session2</option>
            <option value="3">session3</option>
            <option value="4">session4</option>
            <option value="5">session5</option>
            <option value="6">session6</option>
            <option value="7">session7</option>
            <option value="8">session8</option>
            <option value="9">session9</option>
            <option value="10">session10</option>
       </select>
        </div>
       <div class="item">
       <p>video</p>
        <!-- <textarea rows="3" name="video_link" id="video_link"></textarea> -->
        <input type="file" name="file" id="file"> 
      <div class="item">
        <p>subject id</p>
        <textarea rows="3" name="subjectid" id="subjectid"></textarea>
      </div>
     
        <div class="item">
          <p>session id</p>
          <textarea rows="3" name="sessionid" id="sessionid"></textarea>
          
        </div>
        <div class="btn-block">
          <button type="submit" name="submit" value="submit">Save</button>
        </div>
    </form>
    </div>
    



    <script  type="text/javascript">
//       const navBar = document.querySelector("nav"),
//         menuBtns = document.querySelectorAll(".menu-icon"),
//         overlay = document.querySelector(".overlay");
//
//       menuBtns.forEach((menuBtn) => {
//         menuBtn.addEventListener("click", () => {
//           navBar.classList.toggle("open");
//
//         });
//       });
//
//       overlay.addEventListener("click", () => {
//         navBar.classList.remove("open");
//       });


          
    </script>
    <?php
$conn = mysqli_connect("localhost","root","","creslms");
if (isset($_POST['submit'])) {
$session = $_POST['session'];
$filename = $_FILES["file"]["name"];
$tempname = $_FILES["file"]["tmp_name"]; 
$folder = "videos/" .$filename;
move_uploaded_file($tempname, $folder);
$subjectid = $_POST['subjectid'];
$sessionid = $_POST['sessionid'];

$sql = "INSERT INTO modules (name,video_link,subject_id,session_id) VALUES ('$session','$folder','$subjectid','$sessionid')";

if(!mysqli_query($conn, $sql))

{

echo "data not insert";
}


else

{

    echo '<script>alert("registration succesful")</script>';



}

}



?>
  </body>
</html>

