<?php include('quiz_db.php');?>

<?php


//Get post variables
$question_number = $_POST['question_number'];
$question_text = $_POST['question_text'];
$choices = array();
$choices[1] = $_POST['choicel'];
$choices[2] = $_POST['choice2'];
$choices[3] = $_POST['choice3']; 
$choices[4] = $_POST['choice4'];
$choices[5] = $_POST['choice5'];



//Question query

$query = "INSERT INTO questions (question_number, text) VALUES ('$question_number', '$question_text')";


//Run query

$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);

//Validate insert

if($insert_row) {
  foreach ($choices as $choice => $value) {
    if($value != ''){
      if ($correct_choice == $choice){
        $is_correct = 1;
      }else{
        $is_correct = 0;
      }
      $query = "INSERT INTO choices (question_number, is_correct, text) VALUES ('$question_number', '$is_correct','$value')";
      $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
      if($insert_row){
        continue;
      }
      else{
  die('Error:('.$mysqli->errno.') '. $mysqli->error);
}
}
  }
  $msg='question has been added';
}

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>PHP Quizzer</title>
    <link rel="stylesheet" href="quiz.css" type="text/css" />
  </head>
  <body>
    <header>
      <div class="container"> 
        <h1>PHP Quizzer</h1>
</div>
</header>
<main>
  <div class="container"> <h2>Add A Question</h1>
  <?php 
  if(isset($msg)){
    echo '<p>'.$msg.'</p>';
  }
  ?>
  <form method="post" action="add.php">
    <p>
      <label>Question Number</label>
      <input type="number" name="question_number" />
    </p>
    <p>
      <label>Question Text</label>
      <input type="text" name="question_text" />
    </p>
    <p>
      <label>Choice #1</label>
      <input type="text" name="choice1" />
    </p>
    <p>
      <label>Choice #2</label>
      <input type="text" name="choice2" />
    </p>
    <p>
      <label>Choice #3</label>
      <input type="text" name="choice3" />
    </p>
    <p>
      <label>Choice #4</label>
      <input type="text" name="choice4" />
    </p>
    <p>
      <label>Choice #5</label>
      <input type="text" name="choice5" />
    </p>
    <p>
      <label>Correct choice number</label>
      <input type="number" name="correct_choice" />
    </p>
    <p>
      <input type="submit" name="submit" value="submit"/>
    </p>
  </form>
</div>
</main>
<footer>
<div class="container">
    Copyright &copy; 2014, PHP Quizzer
</div>
</footer>
</body>
</html>
