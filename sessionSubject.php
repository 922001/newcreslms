<?php
echo "Update subject";
$conn = mysqli_connect("localhost","root","","creslms");
$sesid = $_POST['sesid'];

$update_sql = " SELECT * from session WHERE id = '$sesid'";
$query_run = mysqli_query($conn,$update_sql);

if(mysqli_num_rows($query_run)>0)
{
    echo "record found";
    
$session = $_POST['session'];
$video = $_POST['video'];
$flipbook = $_POST['flipbook'];
$assessment = $_POST['assessment'];


     $sql = "UPDATE `session` SET `name`='$session',`video_link`='$video',`ebook_link`='$flipbook',`assessment_link`='$assessment' WHERE id = '$sesid'";
     
     if (mysqli_query($conn, $sql)) {
        echo "Updated record successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
}
else{ 
    echo "no record found ";

}
 $conn->close();
?>
