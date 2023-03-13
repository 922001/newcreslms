<?php
echo "Entered subject creation";
$conn = mysqli_connect("localhost","root","","creslms");
$session = $_POST['session'];
$video = $_POST['video'];
$flipbook = $_POST['flipbook'];
$assessment = $_POST['assessment'];
$subid = $_POST['subid'];

     $sql = "INSERT INTO session (name,video_link,ebook_link,assessment_link,subject_id)
     VALUES ('$session','$video','$flipbook','$assessment','$subid')";
     
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     $conn->close();
?>
