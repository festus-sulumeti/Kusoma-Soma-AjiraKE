<?php
  
  include "database.php";

  session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/index.css">
    <link rel="stylesheet" href="Resources/normalize.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>learning System</title>
</head>
<body>
  <?php
  
    include "navbar.php";
  
  ?>
    <img src="Image/1.jpg" style="margin-left: 90px;" class="sha">
     
    <div id="section">
      <?php 

        include "sidebar.php";

      ?>
      <div id="content">
        <h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3> <br> <hr> <br>
        <br>
        <h3><i class="uil uil-cloud-info"></i> School Information</h3> <br>
        <img src="Image/home.jpg" class="imgs">

        <p class="para">Soma is a is a complete school management software designed to automate a school's learning diverse operations from classes, exams to school events calendar.
        </p>
         
        <p class="para">This Learning System has a powerful online community to bringing parents, teachers and students to a common interactive platform, being a paperless office automation solution for today's modern schools.It provides the facility to carry out all day to day activities of the school.</p>
        </p>
        
      </div>

    </div>

    
    <div class="footer">
        <footer><p>CopyRight &copy; Soma </p></footer>
    </div>
</body>
</html>