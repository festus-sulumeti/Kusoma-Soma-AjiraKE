<div class="sidebar">

  <h3 class="text">DashBoard</h3> <br> <hr> <br>

  <ul class="side">
   
   <?php
     
     if(isset($_SESSION["TID"])){
        
        echo '

         <li class="li"><a href="admin_home.php"><i class="uil uil-cloud-info"></i> School Information</a></li>
	       <li class="li"><a href="adding_class.php"><i class="uil uil-table"></i> Class</a></li>
	       <li class="li"><a href="adding_sub.php"><i class="uil uil-book-open"></i> Subject</a></li>
	       <li class="li"><a href="setting_exam.php"><i class="uil uil-newspaper"></i> Set Exam</a></li>
	       <li class="li"><a href="viewing_exa.php"><i class="uil uil-newspaper"></i> View Exam</a></li>
         <li class="li"><a href="adding_stu.php"><i class="uil uil-newspaper"></i> Add Student</a></li>
	       <li class="li"><a href="viewing_stu.php"><i class="uil uil-book-reader"></i> View Student</a></li>
	     
     
        ';
     }

     

          else{


             echo '
    
                 <li class="li"><a href=""></a></li>
                 <li class="li"><a href=""></a></li>
                 <li class="li"><a href=""></a></li>
        
          ';
          }
    

   ?>

  </ul>


</div>