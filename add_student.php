<?php

include "database.php";

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Soma</title>
	<link rel="stylesheet" href="Css/index.css">
    <link rel="stylesheet" href="Resources/normalize.css">
</head>

<body>
	<?php include "navbar.php";?>

	<img src="Image/1.jpg" style="margin-left: 90px;" class="sha">

	<div id="section">

     <?php include "sidebar.php";?>

		<div id="content">

			<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>

			<h3>Add Student's Details</h3><br><br><br>
    

			<?php


			if (isset($_POST["submit"])) {
				

				$sq = "insert into student(SNAME,QUAL,GRADE) values('{$_POST["sname"]}', '{$_POST["qual"]}', '{$_POST["grade"]}')";

				if ($db->query($sq)) {
					
					echo "<div class='success'>Insert Success</div>";

				}
                
                else
                {

					echo "<div class='error'>Insert Failed</div>";

				}
			}

			?>

			<form action="<?php echo $_SERVER["PHP_SELF"]; ?>"  method="post">

				<label>Student's Name</label><br>
				<input type="text" name="sname" required class="input"><br><br>

				<label>Qualification</label><br>
				<input type="text" name="qual" required class="input"><br><br>

				<label>Grade</label><br>
				<input type="text" name="grade" class="input"><br><br>

				<button type="submit" class="btn" name="submit" >Add Student's Details</button>



			</form>

		</div>

	</div>


<div class="footer">
	
<footer><p>Copy Right &copy; Soma </p></footer>


</div>

</body>
</html>