<?php
echo "Entered subject creation";
$conn = mysqli_connect("localhost","root","","creslms");
$session = $_POST['session'];
$filename = $_FILES["video"]["name"];
$tempname = $_FILES["video"]["tmp_name"]; 
$folder = "videos/" .$filename;
move_uploaded_file($tempname, $folder);


$subjectid = $_POST['subjectid'];
$sessionid = $_POST['sessionid'];

$sql = "INSERT INTO modules (name,video_link,subject_id,session_id)  
VALUES ('$session','$folder','$subjectid','$sessionid')";



     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     $conn->close();
?>

