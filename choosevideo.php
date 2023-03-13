<?php
$conn = mysqli_connect("localhost","root","","creslms");
if (isset($_POST['submit'])) {

$filename = $_FILES["file"]["name"];
$tempname = $_FILES["file"]["tmp_name"]; 
$folder = "videos/" .$filename;
move_uploaded_file($tempname, $folder);

$sql = "INSERT INTO modules (video_link) VALUES ('$folder')";

if(!mysqli_query($conn, $sql))

{

echo "data not insert";
}


else

{

echo "data insert";



}

}



?>

<form method="POST" enctype="multipart/form-data"> 
    <input type="file" name="file" id="file"> 
    <input type="submit" name="submit" value="submit">
</form>