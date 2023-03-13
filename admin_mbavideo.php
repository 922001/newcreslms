
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
    
    
    
    <link rel="stylesheet" href="video.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

    
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="ad1_dashboard.css" />
    
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    

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
    <?php
                $var_value = $_GET['subject_id'];
                
                $conn = mysqli_connect("localhost","root","","creslms");
                $query="SELECT * FROM subject WHERE id = $var_value";
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result))
                    {
                        $description = $row['description'];
                       
                        
                       
                    }
     ?>
      <div class="logo"><a href="admin_mbasub_description.php?user_id=<?php echo $user['id']; ?>&&subject_id=<?php echo $var_value; ?>">
        <i class="bx bx-arrow-back menu-icon"></i></a>
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
</nav>
      


<?php
                $subject_id = $_GET['subject_id'];
                $session_id =  $_GET['session_id'];
                $name = $_GET['name'];

                
                $conn = mysqli_connect("localhost","root","","creslms");
                $query="SELECT * FROM modules WHERE subject_id = '$subject_id' and session_id = '$session_id'";
                $result = mysqli_query($conn, $query);
                $namearr = array();
                $videoarr = array();
                $count = 0;
                $index = 0;
                while($row = mysqli_fetch_assoc($result))
                     {
                        $name = $row['name'];
                        $video_link = $row['video_link'];
                        $namearr[$count]=$name;
                        $videoarr[$count]=$video_link;
                        $count++;
                     }  
                        
?>
                     
<div id='container' class='container'>
        
        <div class='inside-nav'>
        <h1><?php echo $name ?> - Video Content</h1>
            <ul>
                <li><a href='add_video.php'>Add</a></li>
                <li><a href='#'>Edit</a></li>
              </ul>
        </div>
          <div class='content'>
          <div class='main-video'>
              <div class='video'>
                  <h1 id="header_id" value="Module 1">Module 1 - Video Content</h1>
                  <video src='<?php echo $videoarr[$index] ?>' id='video' controls muted autoplay controlsList="nodownload"></video>
                  <button type='submit' class='top-btnn' onclick='backVideo(<?php echo json_encode($videoarr) ?>, <?php echo $count ?>)'>PREVIOUS</button> 
                  <button  type='submit' class='top-btnn1' onclick='getVideo(<?php echo json_encode($videoarr) ?>, <?php echo $count ?>)'>NEXT</button> 
                  <br>
                  <br>
                  <a href="https://docs.google.com/forms/d/e/1FAIpQLSdom7p2xbWwWp9v0KMoWDOYn89YzgH5wr-IwT9BZduES6TpsQ/viewform?embedded=true" width="640" height="579" frameborder="0" marginheight="0" marginwidth="0"Loading…"><h3>Click here to fill up the feedback form </h3></a>
                
                  
                  
              </div>
          </div>
      </div>  

    </div>

    <script>
      videoPlayer = document.getElementById("video");
      h1s= document.getElementById("header_id");
      console.log(h1s.textContent);
      idx = 0;
      headerIndex = 1;
      function getVideo(videoArr, count)
      {
      idx = (idx+1)%count;
      headerIndex = (headerIndex+1);
      if(headerIndex > count)
      {
        headerIndex = 1;
      }
      console.log("Header "+headerIndex);
      h1s.textContent = "Module "+headerIndex+" - Video Content";
      console.log(idx+" count "+count);
      var nextVideo = videoArr[idx];
      videoPlayer.src = nextVideo;
      videoPlayer.play();
      }
      function backVideo(videoArr, count)
      {
        console.log(idx);
        idx = (idx-1)%count;
      headerIndex = (headerIndex-1);
      if(headerIndex < 1)
      {
        headerIndex = count;
      }
      if(idx < 0)
      {
        idx = count - 1;
      }
      console.log("Header "+headerIndex);
      h1s.textContent = "Module "+headerIndex+" - Video Content";
      console.log(idx+" count "+count);
      var nextVideo = videoArr[idx];
      videoPlayer.src = nextVideo;
      videoPlayer.play();
      }
    
    </script>
  </body>
</html>


            
                

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

