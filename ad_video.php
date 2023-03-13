<?php
session_start();
error_reporting(0);
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
      <a href='admin_sub_description.php?user_id=<?php echo $user['id'];?>&&subject_id=$subjectId'>
        <i class="bx bx-arrow-back menu-icon"></i></a>
        <span class="logo-name">Admin</span>
      </div>
      
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
        <button class='top-btn'>Edit page Contents</button>
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

