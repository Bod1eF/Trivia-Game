<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>results</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <style>
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).ready(() => {
      $("#flex-container").prepend($("#correct_count"));
    });
  </script>
</head>
<body>
<?php
//Biographical Data

//check if ssn, address, or name are empty, else they are whatever was submitted
$name = htmlspecialchars($_POST["name"]);

if (empty($name)) {
  $name = "<b>No Name Given</b>";
}
else {
  $name = htmlspecialchars($_POST["name"]);
}

$ssn = htmlspecialchars($_POST["ssn"]);

if (empty($ssn)) {
  $ssn = "<b>No ssn Given</b>";
}
else {
  $ssn = htmlspecialchars($_POST["ssn"]);
}

$address = htmlspecialchars($_POST["address"]);

if (empty($address)) {
  $address = "<b>No address Given</b>";
}
else {
  $address = htmlspecialchars($_POST["address"]);
}


$raw_DOB = htmlspecialchars($_POST["birth_date"]);
$exploded_DOB_array = explode('-', $raw_DOB); // array of date values in format year-month-day
if(count($exploded_DOB_array) !== 3) {
  $birth_date = "<b>Invalid Date of Birth</b>";
}
else {
  if (checkdate($exploded_DOB_array[1], $exploded_DOB_array[2], $exploded_DOB_array[0])) { //check date needs format month-day-year
  $birth_date = $exploded_DOB_array[1] . "/" . $exploded_DOB_array[2] ."/" . $exploded_DOB_array[0]; //date is valid and reformatted
}
else {
  $birth_date = "<b>Invalid Date of Birth</b>";
}
}

// filter var checks if email is valid
if (filter_var($_POST["email_"], FILTER_VALIDATE_EMAIL) == true) {
  $email = htmlspecialchars($_POST["email_"]);
}
else {
  $email = "<b>Invalid Email Address</b>";
}


//checks if inputted value was amongst the values on the drop down menu
$education_array = array("none", "elementary school", "middle school", "high school", "associates degree", "bachelor's degree", "master's degree", "phd");

if (in_array($_POST["education"], $education_array) == true) {
  $education = htmlspecialchars($_POST["education"]);
}
else if (isset($_POST["education"])  == false) {
  $education = "<b>No education level selected</b>";
}
else {
  $education = "<b>Invalid Education Level</b>";
}

//Quiz Data
$question_1 = htmlspecialchars($_POST["question_1"]);
$question_2 = htmlspecialchars($_POST["question_2"]);
$question_3 = htmlspecialchars($_POST["question_3"]);
$question_4 = htmlspecialchars($_POST["question_4"]);
$question_5 = htmlspecialchars($_POST["question_5"]);
$question_6 = htmlspecialchars($_POST["question_6"]);
$question_7 = htmlspecialchars($_POST["question_7"]);
$question_8 = htmlspecialchars($_POST["question_8"]);
$question_9 = htmlspecialchars($_POST["question_9"]);
$question_10 = htmlspecialchars($_POST["question_10"]);
$question_11 = htmlspecialchars($_POST["question_11"]);
$question_12 = htmlspecialchars($_POST["question_12"]);
$question_13 = htmlspecialchars($_POST["question_13"]);
$question_14 = htmlspecialchars($_POST["question_14"]);

$correct_count = 0;
?>


<div id="flex-container">
  <?php
  //Echoing Demographic data
  echo "<p id=info_p>Thank You " . $name . " for competing in Who Wants to be an Illionare officially licensed triva game TM 2023 all rights reservred. Because you are the first person with ssn " . $ssn . " and participant with an education level of: " . $education .  " you will reveice a complimnetary $4 runescape gold gift card sent to " . $email . ". As a further gesture of thanks we will be sending you a birthday gift to your home at " . $address . " on the next anniversary of " . $birth_date . ".</p>"
  ?>
      <table>
<?php

$quiz_validation = false; //value that determines if quiz results were messed with
$quiz_answer_check_array = array("a", "b", "c", "d", ""); //possible answers for untampred with quiz questions to be checked agaisnt

$quiz_answer_array = array($question_1, $question_2, $question_3, $question_4, $question_5, $question_6, $question_7, $question_8, $question_9, $question_10, $question_11, $question_12, $question_13, $question_14);
foreach ($quiz_answer_array as $answer) {
  if (in_array($answer, $quiz_answer_check_array) == true) {
    $quiz_validation = true;
  }
  else { //loops through quiz data until an answer not found in the check array is found, then loop is broken, and quiz validation is set to false
    $quiz_validation = false;
    break;
  }
}

//warning if invalid quiz answer found
if ($quiz_validation  == false) {
  echo "<tr><th id='warning'> Quiz Was tampered with, all results invalidated </th></tr>";
}
else {

//table of quiz results
echo "<tr><th>Question</th><th>Your Answer</th></tr>";

if ($question_1 == "d") {
    $correct_count++;
    echo "<tr><th> Question 1 </th><th class=correct > You Answered " . $question_1 . " which was correct </th></tr>";
}
elseif ($question_1 == "") {
  echo "<tr><th> Question 1 </th><th class=unset> You skipped question 1, making you no money </th></tr>";
}
else {
    echo "<tr><th> Question 1 </th><th class=incorrect > You Answered " . $question_1 . " which was incorrect </th></tr>";
}

if ($question_2 == "d") {
    $correct_count++;
    echo "<tr><th> Question 2 </th><th class=correct > You Answered " . $question_2 . " which was correct </th></tr>";
}
elseif ($question_2 == "") {
  echo "<tr><th> Question 2 </th><th class=unset> You skipped question 2, making you no money </th></tr>";
}
else {
    echo "<tr><th> Question 2 </th><th class=incorrect > You Answered " . $question_2 . " which was incorrect </th></tr>";
}

if ($question_3 == "c") {
    $correct_count++;
    echo "<tr><th> Question 3 </th><th class=correct > You Answered " . $question_3 . " which was correct </th></tr>";
}
elseif ($question_3 == "") {
  echo "<tr><th> Question 3 </th><th class=unset> You skipped question 3, making no money </th></tr>";
}
else {
    echo "<tr><th> Question 3 </th><th class=incorrect > You Answered " . $question_3 . " which was incorrect </th></tr>";
}

if ($question_4 == "a") {
    $correct_count++;
    echo "<tr><th> Question 4 </th><th class=correct > You Answered " . $question_4 . " which was correct </th></tr>";
}
elseif ($question_4 == "") {
  echo "<tr><th> Question 4 </th><th class=unset> You skipped question 4, making no money </th></tr>";
}
else {
    echo "<tr><th> Question 4 </th><th class=incorrect > You Answered " . $question_4 . " which was incorrect </th></tr>";
}

if ($question_5 == "c") {
    $correct_count++;
    echo "<tr><th> Question 5 </th><th class=correct > You Answered " . $question_5 . " which was correct </th></tr>";
}
elseif ($question_5 == "") {
  echo "<tr><th> Question 5 </th><th class=unset> You skipped question 5, making no money </th></tr>";
}
else {
    echo "<tr><th> Question 5 </th><th class=incorrect > You Answered " . $question_5 . " which was incorrect </th></tr>";
}

if ($question_6 == "b") {
    $correct_count++;
    echo "<tr><th> Question 6 </th><th class=correct > You Answered " . $question_6 . " which was correct </th></tr>";
}
elseif ($question_6 == "") {
  echo "<tr><th> Question 6 </th><th class=unset> You skipped question 6, making no money </th></tr>";
}
else {
    echo "<tr><th> Question 6 </th><th class=incorrect > You Answered " . $question_6 . " which was incorrect </th></tr>";
}

if ($question_7 == "b") {
    $correct_count++;
    echo "<tr><th> Question 7 </th><th class=correct > You Answered " . $question_7 . " which was correct </th></tr>";
}
elseif ($question_7 == "") {
  echo "<tr><th> Question 7 </th><th class=unset> You skipped question 7, making no money </th></tr>";
}
else {
    echo "<tr><th> Question 7 </th><th class=incorrect > You Answered " . $question_7 . " which was incorrect </th></tr>";
}

if ($question_8 == "d") {
    $correct_count++;
    echo "<tr><th> Question 8 </th><th class=correct > You Answered " . $question_8 . " which was correct </th></tr>";
}
elseif ($question_8 == "") {
  echo "<tr><th> Question 8 </th><th class=unset> You skipped question 8, making no money </th></tr>";
}
else {
    echo "<tr><th> Question 8 </th><th class=incorrect > You Answered " . $question_8 . " which was incorrect </th></tr>";
}

if ($question_9 == "c") {
    $correct_count++;
    echo "<tr><th> Question 9 </th><th class=correct > You Answered " . $question_9 . " which was correct </th></tr>";
}
elseif ($question_9 == "") {
  echo "<tr><th> Question 9 </th><th class=unset> You skipped question 9, making no money </th></tr>";
}
else {
    echo "<tr><th> Question 9 </th><th class=incorrect > You Answered " . $question_9 . " which was incorrect </th></tr>";
}

if ($question_10 == "a") {
    $correct_count++;
    echo "<tr><th> Question 10 </th><th class=correct > You Answered " . $question_10 . " which was correct </th></tr>";
}
elseif ($question_10 == "") {
  echo "<tr><th> Question 10 </th><th class=unset> You skipped question 10, making no money </th></tr>";
}
else {
    echo "<tr><th> Question 10 </th><th class=incorrect > You Answered " . $question_10 . " which was incorrect </th></tr>";
}

if ($question_11 == "b") {
    $correct_count++;
    echo "<tr><th> Question 11 </th><th class=correct > You Answered " . $question_11 . " which was correct </th></tr>";
 }
 elseif ($question_11 == "") {
   echo "<tr><th> Question 11 </th><th class=unset> You skipped question 11, making no money </th></tr>";
 }
 else {
    echo "<tr><th> Question 11 </th><th class=incorrect > You Answered " . $question_11 . " which was incorrect </th></tr>";
}

  if ($question_12 == "a") {
      $correct_count++;
      echo "<tr><th> Question 12 </th><th class=correct > You Answered " . $question_12 . " which was correct </th></tr>";
  }
  elseif ($question_12 == "") {
    echo "<tr><th> Question 12 </th><th class=unset> You skipped question 12, making no money </th></tr>";
  }
  else {
      echo "<tr><th> Question 12 </th><th class=incorrect > You Answered " . $question_12 . " which was incorrect </th></tr>";
  }

  if ($question_13 == "b") {
      $correct_count++;
      echo "<tr><th> Question 13 </th><th class=correct > You Answered " . $question_13 . " which was correct </th></tr>";
  }
  elseif ($question_13 == "") {
    echo "<tr><th> Question 13 </th><th class=unset> You skipped question 13, making no money </th></tr>";
  }
  else {
      echo "<tr><th> Question 13 </th><th class=incorrect > You Answered " . $question_13 . " which was incorrect </th></tr>";
  }

  if ($question_14 == "b") {
      $correct_count++;
      echo "<tr><th> Question 14 </th><th class=correct > You Answered " . $question_14 . " which was correct </th></tr>";
  }
  elseif ($question_14 == "") {
    echo "<tr><th> Question 14 </th><th class=unset> You skipped question 14, making no money </th></tr>";
  }
  else {
      echo "<tr><th> Question 14 </th><th class=incorrect > You Answered " . $question_14 . " which was incorrect </th></tr>";
  }

}
?>
</table>
<?php
//calculate payout
$payout = 0;
$million_check = False;
if ($correct_count == 0){
  $payout = 0;
}
else if ($correct_count == 1){
  $payout = "$500";
}
else if ($correct_count == 2){
  $payout = "$1,000";
}
else if ($correct_count == 3){
  $payout = "$2,000";
}
else if ($correct_count == 4){
  $payout = "$3,000";
}
else if ($correct_count == 5){
  $payout = "$5,000";
}
else if ($correct_count == 6){
  $payout = "$7,000";
}
else if ($correct_count == 7){
  $payout = "$10,000";
}
else if ($correct_count == 8){
  $payout = "$20,000";
}
else if ($correct_count == 9){
  $payout = "$30,000";
}
else if ($correct_count == 10){
  $payout = "$50,000";
}
else if ($correct_count == 11){
  $payout = "$100,000";
}
else if ($correct_count == 12){
  $payout = "$250,000";
}
else if ($correct_count == 13){
  $payout = "$500,000";
}
else {
  $million_check = True;
  $payout = "$1,000,000";
}

//echo payout
if ($quiz_validation !== true) {

}
else if ($million_check == True) {
  echo "<h2 id=correct_count>You Got all 14 questions correct making you an Illionare, congradulations on your " . $payout . " dollars!</h2>";
  echo "<img alt='A gif of raining money' id=money src=raining_money.gif />";
}
else {
  echo "<h2 id=correct_count>You Got " . $correct_count . " correct out of 14 questions, so you won " . $payout . " dollars!</h2>";
}
?>
<div id="play_again">
<a href="index.php">Play Again</a>
</div>
<footer>
        <a class="footer_links" href="https://atdpsites.berkeley.edu/validate/">Validate</a>
</footer>
</div>

</body>
</html>
