<?php
                $var_value = 35;// $_GET['subject_id'];
                
                $conn = mysqli_connect("localhost","root","","creslms");
                $query="SELECT * FROM session WHERE subject_id = '$var_value'";
                $result = mysqli_query($conn, $query);
                
                while($row = mysqli_fetch_assoc($result))
                    {
                        
                        
                       
                        $name = $row['name'];
                        $video = $row['video_link'];
                        $ebook = $row['ebook_link'];
                        $assessmennt = $row['assessment_link'];
                        $discussion = $row['discussion'];

                        echo "<p>";echo $name;echo "</p><br>";
                        echo "<p>";echo $video;echo "</p><br>";
                        echo "<p>";echo $ebook;echo "</p><br>";
                        echo "<p>";echo $assessmennt;echo "</p><br>";
                        echo "<p>";echo $discussion;echo "</p><br>";


                    }

                
?>