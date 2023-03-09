<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Who Wants to be a Illionare?</title>
    <style>
      
    </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="script.js"></script>
</head>
<body>
    <div class="flex-container">
    
      <img id="top_bar" src="WWTBI_header.png" alt="The Official Logo and Banner of Who Wants to be an Illionare">
    </div>
    <div class="flex-container">
      <div id="instructions">
        <h1 class="header"> How the game works </h1>
        <p>Welcome to Who wants to be an Illionare, a trivia game show where you answer 14 questions for a chance to win an undisclosed amount of money. Please note that all answers are FINAL!</p>
      </div>
    <h1 class="header">Some Basic Information Before You Begin</h1>
  </div>
    <div class="flex-container">
    <form action = "results.php" method = "POST">

        <label for="name">Name:</label>
        <input required type="text" id="name" name="name" class="basic_info">

        <label for="birth_date">Date of Birth:</label>
        <input required type="date" id="birth_date" name="birth_date"  class="basic_info">

        <label for="name">SSN:</label>
        <input required type="text" id="ssn" name="ssn" class="basic_info">


        <label for="email_">Email Address:</label>
        <input required type="email" id="email_" name="email_"  class="basic_info">

        <label for="address">Street Address:</label>
        <input required type="text" id="address" name="address"  class="basic_info">

        <label for="education">Highest Education Level:</label>
        <select required name="education" id="education" class="basic_info">
          <option value="" disabled selected>Select an option</option>
          <option  value="none">none</option >
          <option  value="elementary school">Elementary School</option >
          <option  value="middle school">Middle Shcool</option >
          <option  value="high school">High School</option >
          <option  value="associates degree">Associates Degree</option >
          <option  value="bachelor's degree">Bachelor's Degree</option >
          <option  value="master's degree">Master's Degree</option >
          <option  value="phd">Doctorate or Higher</option >
        </select>


        <div class="flex-container">
        <h1 class="header">Who Wants to be an Illionare?</h1>
        </div>

        <div class="question_containers">
        <p class="question">1. In Roman numerals which of the following repersents 100?</p>
        <input required type="radio" id ="1a" class="option wrong"  name="question_1" value="a">
        <label class="option wrong"  for="1a">XX</label>
        <input required type="radio" id ="1b" class="option wrong"  name="question_1" value="b">
        <label class="option wrong"  for="1b">M</label>
        <input required type="radio" id ="1c" class="option wrong"  name="question_1" value="c">
        <label class="option wrong"  for="1c">X</label>
        <input required type="radio" id ="1d" class="option right"  name="question_1" value="d">
        <label class="option right"  for="1d">C</label>
        <div class="life_line_label">Life Lines (single use, one per question):</div><div class="fiftyfifty lifelines">fiftyfifty</div><div class="swap_question lifelines">Swap Question</div>
        <div class="skip_question lifelines">Skip Question</div> <p class="confirm hidden">Confirm Answer</p>
        </div>

        <div class="question_containers hidden">
        <p class="question">2. Which of these groups is the most general in the biological hierarchy of taxa?</p>
        <input required type="radio" id ="2a" class="option wrong"  name="question_2" value="a">
        <label class="option wrong"  for="2a">Family</label>
        <input required type="radio" id ="2b" class="option wrong"  name="question_2" value="b">
        <label class="option wrong"  for="2b">Order</label>
        <input required type="radio" id ="2c" class="option wrong"  name="question_2" value="c">
        <label class="option wrong"  for="2c">Genus</label>
        <input required type="radio" id ="2d" class="option right"  name="question_2" value="d">
        <label class="option right"  for="2d">Phylum</label>
        <div class="life_line_label">Life Lines (single use, one per question):</div><div class="fiftyfifty lifelines">fiftyfifty</div><div class="swap_question lifelines">Swap Question</div>
<div class="skip_question lifelines">Skip Question</div> <p class="confirm hidden">Confirm Answer</p>
        </div>

        <div class="question_containers hidden">
        <p class="question">3. Which famous runner won 4 gold medals at the 1936 Olympics?</p>
        <input required type="radio" id ="3a" class="option wrong"  name="question_3" value="a">
        <label class="option wrong"  for="3a">Emil Zátopek</label>
        <input required type="radio" id ="3b" class="option wrong"  name="question_3" value="b">
        <label class="option wrong"  for="3b">Johnny Hayes</label>
        <input required type="radio" id ="3c" class="option right"  name="question_3" value="c">
        <label class="option right"  for="3c">Jessie Owens</label>
        <input required type="radio" id ="3d" class="option wrong"  name="question_3" value="d">
        <label class="option wrong"  for="3d">Frank Shorter</label>
        <div class="life_line_label">Life Lines (single use, one per question):</div><div class="fiftyfifty lifelines">fiftyfifty</div><div class="swap_question lifelines">Swap Question</div>
<div class="skip_question lifelines">Skip Question</div> <p class="confirm hidden">Confirm Answer</p>
        </div>

        <div class="question_containers hidden">
        <p class="question">4. Which of these artists had the most spotify monthly listeners in June 2022?</p>
        <input required type="radio" id ="4a" class="option right"  name="question_4" value="a">
        <label class="option right"  for="4a">Ed Sheeran</label>
        <input required type="radio" id ="4b" class="option wrong"  name="question_4" value="b">
        <label class="option wrong"  for="4b">Dua Lipa</label>
        <input required type="radio" id ="4c" class="option wrong"  name="question_4" value="c">
        <label class="option wrong"  for="4c">Taylor Swift</label>
        <input required type="radio" id ="4d" class="option wrong"  name="question_4" value="d">
        <label class="option wrong"  for="4d">The Weeknd</label>
        <div class="life_line_label">Life Lines (single use, one per question):</div><div class="fiftyfifty lifelines">fiftyfifty</div><div class="swap_question lifelines">Swap Question</div>
<div class="skip_question lifelines">Skip Question</div> <p class="confirm hidden">Confirm Answer</p>
        </div>

        <div class="question_containers hidden">
        <p class="question">5. Which of these countries is classified as 'double landlocked'?</p>
        <input required type="radio" id ="5a" class="option wrong"  name="question_5" value="a">
        <label class="option wrong"  for="5a">Botswana</label>
        <input required type="radio" id ="5b" class="option wrong"  name="question_5" value="b">
        <label class="option wrong"  for="5b">Bolivia</label>
        <input required type="radio" id ="5c" class="option right"  name="question_5" value="c">
        <label class="option right"  for="5c">Uzbekistan</label>
        <input required type="radio" id ="5d" class="option wrong"  name="question_5" value="d">
        <label class="option wrong"  for="5d">Serbia</label>
        <div class="life_line_label">Life Lines (single use, one per question):</div><div class="fiftyfifty lifelines">fiftyfifty</div><div class="swap_question lifelines">Swap Question</div>
<div class="skip_question lifelines">Skip Question</div> <p class="confirm hidden">Confirm Answer</p>
        </div>

        <div class="question_containers hidden">
        <p class="question">6. Which of these presidents appears on the $50 dollar bill?</p>
        <input required type="radio" id ="6a" class="option wrong"  name="question_6" value="a">
        <label class="option wrong"  for="6a">Dwight D. Eisenhower</label>
        <input required type="radio" id ="6b" class="option right"  name="question_6" value="b">
        <label class="option right"  for="6b">Ulysses S. Grant</label>
        <input required type="radio" id ="6c" class="option wrong"  name="question_6" value="c">
        <label class="option wrong"  for="6c">Theodore Roosevelt</label>
        <input required type="radio" id ="6d" class="option wrong"  name="question_6" value="d">
        <label class="option wrong"  for="6d">Rutherford B. Hayes</label>
        <div class="life_line_label">Life Lines (single use, one per question):</div><div class="fiftyfifty lifelines">fiftyfifty</div><div class="swap_question lifelines">Swap Question</div>
<div class="skip_question lifelines">Skip Question</div> <p class="confirm hidden">Confirm Answer</p>
        </div>

        <div class="question_containers hidden">
        <p class="question">7. Tribology is the study of:</p>
        <input required type="radio" id ="7a" class="option wrong"  name="question_7" value="a">
        <label class="option wrong"  for="7a">Isolated tribes</label>
        <input required type="radio" id ="7b" class="option right"  name="question_7" value="b">
        <label class="option right"  for="7b">Friction and lubrication</label>
        <input required type="radio" id ="7c" class="option wrong"  name="question_7" value="c">
        <label class="option wrong"  for="7c">Bones</label>
        <input required type="radio" id ="7d" class="option wrong"  name="question_7" value="d">
        <label class="option wrong"  for="7d">Cave like rock formations</label>
        <div class="life_line_label">Life Lines (single use, one per question):</div><div class="fiftyfifty lifelines">fiftyfifty</div><div class="swap_question lifelines">Swap Question</div>
<div class="skip_question lifelines">Skip Question</div> <p class="confirm hidden">Confirm Answer</p>
        </div>


        <div class="question_containers hidden">
        <p class="question">8. Which of these words was orignally created by William Shakespeare?</p>
        <input required type="radio" id ="8a" class="option wrong"  name="question_8" value="a">
        <label class="option wrong"  for="8a">Deafening</label>
        <input required type="radio" id ="8b" class="option wrong"  name="question_8" value="b">
        <label class="option wrong"  for="8b">Bedazzle</label>
        <input required type="radio" id ="8c" class="option wrong"  name="question_8" value="c">
        <label class="option wrong"  for="8c">Bold-faced</label>
        <input required type="radio" id ="8d" class="option right"  name="question_8" value="d">
        <label class="option right"  for="8d">Dauntless</label>
        <div class="life_line_label">Life Lines (single use, one per question):</div><div class="fiftyfifty lifelines">fiftyfifty</div><div class="swap_question lifelines">Swap Question</div>
<div class="skip_question lifelines">Skip Question</div> <p class="confirm hidden">Confirm Answer</p>
        </div>

        <div class="question_containers hidden">
        <p class="question">9. What does the word dilettante refer to?</p>
        <input required type="radio" id ="9a" class="option wrong"  name="question_9" value="a">
        <label class="option wrong"  for="9a">Traditional garb of the pope</label>
        <input required type="radio" id ="9b" class="option wrong"  name="question_9" value="b">
        <label class="option wrong"  for="9b">A fading memory</label> <br><br>
        <input required type="radio" id ="9c" class="option right"  name="question_9" value="c">
        <label class="option right"  for="9c">Someone with amatuerish knowledge in an area</label>
        <input required type="radio" id ="9d" class="option wrong"  name="question_9" value="d">
        <label class="option wrong"  for="9d">An act of betrayal</label>
        <div class="life_line_label">Life Lines (single use, one per question):</div><div class="fiftyfifty lifelines">fiftyfifty</div><div class="swap_question lifelines">Swap Question</div>
<div class="skip_question lifelines">Skip Question</div> <p class="confirm hidden">Confirm Answer</p>
        </div>

        <div class="question_containers hidden">
        <p class="question">10. Which of these painters holds the record for painting the most expensive painting ever sold?</p>
        <input required type="radio" id ="10a" class="option right"  name="question_10" value="a">
        <label class="option right"  for="10a">Leonardo da Vinci</label>
        <input required type="radio" id ="10b" class="option wrong"  name="question_10" value="b">
        <label class="option wrong"  for="10b">Jackson Pollock</label>
        <input required type="radio" id ="10c" class="option wrong"  name="question_10" value="c">
        <label class="option wrong"  for="10c">Mark Rothko</label>
        <input required type="radio" id ="10d" class="option wrong"  name="question_10" value="d">
        <label class="option wrong"  for="10d">Willem de Kooning</label>
        <div class="life_line_label">Life Lines (single use, one per question):</div><div class="fiftyfifty lifelines">fiftyfifty</div><div class="swap_question lifelines">Swap Question</div>
<div class="skip_question lifelines">Skip Question</div> <p class="confirm hidden">Confirm Answer</p>
        </div>

        <div class="question_containers hidden">
        <p class="question">11. Which of these planets is named after the Ancient Roman god of the sea?</p>
        <input required type="radio" id ="11a" class="option wrong"  name="question_11" value="a">
        <label class="option wrong"  for="11a">Mars</label>
        <input required type="radio" id ="11b" class="option right"  name="question_11" value="b">
        <label class="option right"  for="11b">Neptune</label>
        <input required type="radio" id ="11c" class="option wrong"  name="question_11" value="c">
        <label class="option wrong"  for="11c">Saturn</label>
        <input required type="radio" id ="11d" class="option wrong"  name="question_11" value="d">
        <label class="option wrong"  for="11d">Venus</label>
        <div class="life_line_label">Life Lines (single use, one per question):</div><div class="fiftyfifty lifelines">fiftyfifty</div><div class="swap_question lifelines">Swap Question</div>
<div class="skip_question lifelines">Skip Question</div> <p class="confirm hidden">Confirm Answer</p>
        </div>

        <div class="question_containers hidden">
        <p class="question">12. The circumference of the earth is roughly:</p>
        <input required type="radio" id ="12a" class="option right"  name="question_12" value="a">
        <label class="option right"  for="12a">25,000 Miles</label>
        <input required type="radio" id ="12b" class="option wrong"  name="question_12" value="b">
        <label class="option wrong"  for="12b">50,000 miles</label>
        <input required type="radio" id ="12c" class="option wrong"  name="question_12" value="c">
        <label class="option wrong"  for="12c">8,000 miles</label>
        <input required type="radio" id ="12d" class="option wrong"  name="question_12" value="d">
        <label class="option wrong"  for="12d">75,000 miles</label>
        <div class="life_line_label">Life Lines (single use, one per question):</div><div class="fiftyfifty lifelines">fiftyfifty</div><div class="swap_question lifelines">Swap Question</div>
<div class="skip_question lifelines">Skip Question</div> <p class="confirm hidden">Confirm Answer</p>
        </div>

        <div class="question_containers hidden">
        <p class="question">13. Which of these religions was established the earliest?</p>
        <input required type="radio" id ="13a" class="option wrong"  name="question_13" value="a">
        <label class="option wrong"  for="13a">Buddhism</label>
        <input required type="radio" id ="13b" class="option right"  name="question_13" value="b">
        <label class="option right"  for="13b">Judiasm</label>
        <input required type="radio" id ="13c" class="option wrong"  name="question_13" value="c">
        <label class="option wrong"  for="13c">Taoism</label>
        <input required type="radio" id ="13d" class="option wrong"  name="question_13" value="d">
        <label class="option wrong"  for="13d">Islam</label>
        <div class="life_line_label">Life Lines (single use, one per question):</div><div class="fiftyfifty lifelines">fiftyfifty</div><div class="swap_question lifelines">Swap Question</div>
<div class="skip_question lifelines">Skip Question</div> <p class="confirm hidden">Confirm Answer</p>
        </div>

        <div class="question_containers hidden">

        <p class="question">14. Which metalic compound is commonly referred to as "fools gold"?</p>
        <input required type="radio" id ="14a" class="option wrong"  name="question_14" value="a">
        <label class="option wrong"  for="14a">Magnetite</label>
        <input required type="radio" id ="14b" class="option right"  name="question_14" value="b">
        <label class="option right"  for="14b">Pyrite</label>
        <input required type="radio" id ="14c" class="option wrong"  name="question_14" value="c">
        <label class="option wrong"  for="14c">Tungsten</label>
        <input required type="radio" id ="14d" class="option wrong"  name="question_14" value="d">
        <label class="option wrong"  for="14d">Chromite</label>

        <div class="life_line_label">Life Lines (single use, one per question):</div><div class="fiftyfifty lifelines">fiftyfifty</div><div class="swap_question lifelines">Swap Question</div>
<div class="skip_question lifelines">Skip Question</div> <p class="confirm hidden">Confirm Answer</p>
        </div>

      <div class="question_containers hidden">
      <input type="submit" value="submit">
      </div>
    </form>

  </div>
  <footer><a class="footer_links" href="https://reelrundown.com/tv/Complete-History-of-Who-Wants-To-Be-A-Millionaire-Lifelines">Source(s) for images</a>
          <a class="footer_links" href="https://atdpsites.berkeley.edu/validate/">Validate</a>
  </footer>
</body>
</html>
