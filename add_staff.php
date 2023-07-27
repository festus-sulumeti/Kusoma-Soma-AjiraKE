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

			<h3>Add Staff Details</h3><br><br><br>
    

			<?php


			if (isset($_POST["submit"])) {
				

				$sq = "insert into staff(TNAME,TPASS,QUAL,SAL) values('{$_POST["sname"]}', '1234', '{$_POST["qual"]}', '{$_POST["sal"]}')";

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

				<label>Staff Name</label><br>
				<input type="text" name="sname" required class="input"><br><br>

				<label>Qualification</label><br>
				<input type="text" name="qual" required class="input"><br><br>

				<label>Salary</label><br>
				<input type="text" name="sal" class="input"><br><br>

				<button type="submit" class="btn" name="submit" >Add Staff Details</button>



			</form>

		</div>

	</div>


<div class="footer">
	
<footer><p>Copy Right &copy; Soma </p></footer>


</div>

</body>
</html>