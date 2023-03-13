
<?php include('profile.php');?>


<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    
    <!--<title>Sidebar Menu | Side Navigation Bar</title>-->
    <!-- CSS -->
    <link rel="stylesheet" href="ad1_dashboard.css" />
    
    <link rel="stylesheet" href="ad1_dashboard.css" />
    <link rel="stylesheet" href="sem1.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

    
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="ad1_dashboard.css" />
    <link rel="stylesheet" href="ad_dashboard1.css" />
    <link rel="stylesheet" href="sub_description.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="course.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>


    
    <!-- Boxicons CSS -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    <style media="screen">
    .upload{
      width: 60px;
      position: absolute;
      margin-right: 10px;
      margin-left:570px;
     
      margin-top: 10px;
    }
    .upload img{
      border-radius: 50%;
      border: 3px solid #DCDCDC;
      width: 60px;
      height: 60px;
    }
    .upload .rightRound{
      position: absolute;
      bottom: 0;
      right: 0;
      background: #00B4FF;
      width: 25px;
      height: 25px;
      line-height: 33px;
      text-align: center;
      border-radius: 50%;
      overflow: hidden;
      cursor: pointer;
    }
    .upload .leftRound{
      position: absolute;
      bottom: 0;
      left: 0;
      background: red;
      width: 25px;
      height: 25px;
      line-height: 33px;
      text-align: center;
      border-radius: 50%;
      overflow: hidden;
      cursor: pointer;
    }
    .upload .fa{
      color: white;
    }
    .upload input{
      position: absolute;
      transform: scale(2);
      opacity: 0;
    }
    .upload input::-webkit-file-upload-button, .upload input[type=submit]{
      cursor: pointer;
    }
  </style>
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
                    <li><a class="active" href="ad1_dashboard.php?department=MBA">MBA</a></li>
                    <li><a href="ad1_dashboard.php?department=MCA">MCA</a></li>
                </ul>
            </li>
            
        
        
        </ul>
        <form class="form" id = "form" action="" enctype="multipart/form-data" method="post">
      <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
      <div class="upload">
        <img src="img/<?php echo $user['image']; ?>" id = "image">

        <div class="rightRound" id = "upload">
          <input type="file" name="fileImg" id = "fileImg" accept=".jpg, .jpeg, .png">
          <i class = "fa fa-camera"></i>
        </div>

        <div class="leftRound" id = "cancel" style = "display: none;">
          <i class = "fa fa-times"></i>
        </div>
        <div class="rightRound" id = "confirm" style = "display: none;">
          <input type="submit">
          <i class = "fa fa-check"></i>
        </div>
      </div>
    </form>
</div>
</div>


      


      <div class="sidebar">
        <div class="logo">
          
          <span class="logo-name">Admin Panel</span>
        </div>

        <div class="sidebar-content">
          <ul class="lists">
            <li class="list">
              <a href="add_session.php" class="nav-link">
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
            <?php
                $var_value = $_GET['subject_id'];
                
                $conn = mysqli_connect("localhost","root","","creslms");
                $query="SELECT * FROM subject WHERE id = $var_value";
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result))
                    {
                        
                        $semester = $row['semester'];
                       
                        
                    }
                ?>
           
            <li class="list">
              <a href="admin_sem1.php?user_id=<?php echo $user['id']; ?>&&department=MCA&semester=<?php echo $semester; ?>"  class="nav-link">
                <i class="bx bx-log-out icon"></i>
                <span class="link">back</span>
              </a>
            </li>
            
          </ul>

          
            
          </div>
        </div>
      </div>
    </nav>
    <div class="container">
    
    
    
    

        

        
        <div class="course-content">
            <h4>Course Description</h4>
            <!-- <p> Web Development broadly refers to the tasks associated with developing functional websites and
                applications for the Internet. The web development process includes web design, web content
                development, client-side/server-side scripting and network security configuration, among other
                tasks.</p> -->
                <?php
                $var_value = $_GET['subject_id'];
                
                $conn = mysqli_connect("localhost","root","","creslms");
                $query="SELECT * FROM subject WHERE id = $var_value";
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result))
                    {
                        $description = $row['description'];
                       
                        
                        echo "<p>";echo $description;echo "</p>";
                    }
                    $query="SELECT * FROM session WHERE subject_id = '$var_value'";
                    $result = mysqli_query($conn, $query);
                    $id = null;
                    $name = null;
                    $video = null;
                    $ebook =null;
                    $assessment = null;
                    $discussion = null;
                    while($row = mysqli_fetch_assoc($result))
                        {
                            $id = $row['Id'];
                            $name = $row['name'];
                            $video = $row['video_link'];
                            $ebook = $row['ebook_link'];
                            $assessment = $row['assessment_link'];
                            $discussion = $row['discussion'];
                        
echo "</div>
        <div class='accordion'>
            <div class='accordion-item-odd'>
                <div class='accordion-item-header'>
                    $name
                </div>
                <div class='accordion-item-body'>
                    <div class='accordion-item-body-content'>
                        <strong>Video</strong>
                        <div class='checkbox-content'>
                            <a href='http://localhost/creslms/admin_video1.php?user_id=".$user['id']."&subject_id=$var_value&session_id=$id'>
                                <p>$name video</p>
                            </a>
                            <input type='checkbox' id='check' name='session1' value='completed'>
                        </div>
                        
                        <strong>eBooks</strong>
                        <div class='checkbox-content'>
                            <a href='$ebook'>
                                <p>$name ebook</p>
                            </a>
                            <input type='checkbox' id='check' name='session1' value='completed'>
                        </div>

                        <strong> session 1 assessments</strong>
                        <div class='checkbox-content'>
                            <a href='$assessment'>
                                <p>$name assessment</p>
                            </a>
                            <input type='checkbox' id='check' name='session1' value='completed'>
                        </div>

                        

                        <strong> Discussion</strong>
                        <div class='text-area' >
                            <textarea name='textarea' rows='5' cols='70' value='$discussion'></textarea>
                        </div>
                        
                    </div>
                </div>
            </div>";
                        }
            ?>

       
                

    <section class=""></section>

    <!-- <script>
      const navBar = document.querySelector("nav"),
        menuBtns = document.querySelectorAll(".menu-icon"),
        // overlay = document.querySelector(".overlay");

      menuBtns.forEach((menuBtn) => {
        menuBtn.addEventListener("click", () => {
          navBar.classList.toggle("open");
          
        });
      });

      overlay.addEventListener("click", () => {
        navBar.classList.remove("open");
      });
    </script> -->
    
    <script type="text/javascript">
      
        const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

        accordionItemHeaders.forEach(accordionItemHeader => {
            accordionItemHeader.addEventListener("click", event => {

                // Uncomment in case you only want to allow for the display of only one collapsed item at a time!

                // const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");
                // if(currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader!==accordionItemHeader) {
                //   currentlyActiveAccordionItemHeader.classList.toggle("active");
                //   currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
                // }

                accordionItemHeader.classList.toggle("active");
                const accordionItemBody = accordionItemHeader.nextElementSibling;
                if (accordionItemHeader.classList.contains("active")) {
                    accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
                }
                else {
                    accordionItemBody.style.maxHeight = 0;
                }

            });
        });
    
      document.getElementById("fileImg").onchange = function(){
        document.getElementById("image").src = URL.createObjectURL(fileImg.files[0]); // Preview new image

        document.getElementById("cancel").style.display = "block";
        document.getElementById("confirm").style.display = "block";

        document.getElementById("upload").style.display = "none";
      }

      var userImage = document.getElementById('image').src;
      document.getElementById("cancel").onclick = function(){
        document.getElementById("image").src = userImage; // Back to previous image

        document.getElementById("cancel").style.display = "none";
        document.getElementById("confirm").style.display = "none";

        document.getElementById("upload").style.display = "block";
      }
    </script>

    <?php
    if(isset($_FILES["fileImg"]["name"])){
      $id = $_POST["id"];

      $src = $_FILES["fileImg"]["tmp_name"];
      $imageName = uniqid() . $_FILES["fileImg"]["name"];

      $target = "img/" . $imageName;

      move_uploaded_file($src, $target);

      $query = "UPDATE admin SET image = '$imageName' WHERE id = $id";
      mysqli_query($conn, $query);

      
    }
    ?>
   
  </body>
</html>

