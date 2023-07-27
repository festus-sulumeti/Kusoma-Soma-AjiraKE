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
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>
	<?php include "navbar.php"?>

	<img src="Image/1.jpg" style="margin-left: 90px;" class="sha">

	<div id="section">

<?php include "teacherside.php"?>

		<div id="content">

			<h3 class="text">Welcome <?php echo $_SESSION["TNAME"]; ?></h3><br><hr><br>

			<h3>Add Class Name</h3><br>


			<?php
						if(isset($_POST["submit"]))
						{
							 $sq="insert into class(CNAME,CSEC) values('{$_POST["cname"]}','{$_POST["sec"]}')";

							if($db->query($sq))
							{
								echo "<div class='success'>Insert Class Success..</div>";
							}
							else
							{
								echo "<div class='error'>Insert failed</div>";
							}
							
							
						}
					
					?>
			

			<form action="<?php echo $_SERVER["PHP_SELF"];?>"  method="POST">
				<label>Class Name</label><br>

				<select name="cname" required class="input2">
				<option value="">Select</option>
				<option value="Grade 1">Grade 1</option>
				<option value="Grade 2">Grade 2</option>
				<option value="Grade 3">Grade 3</option>
				<option value="Grade 4">Grade 4</option>
				<option value="Grade 5">Grade 5</option>
				<option value="Grade 6">Grade 6</option>
				
				</select> <br><br>

			
				<label>Section</label><br>
				
				<select name="sec" required class="input2">

				<option value="">Select</option>
				<option value="-">_</option>
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
				<option value="D">D</option>
				<option value="E">E</option>
				<option value="F">F</option>

				</select> <br>

				<button type="submit" class="btn" name="submit">Add Class Details</button>


			</form>

		</div>

		<div class="tbox">
			
			<h3> Class Details</h3>

				<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?>
			<table style="border: 1px;">
				<tr>
					
					<th>S.No</th>
					<th>Class Name</th>
					<th>Section</th>
					<th>Delete</th>

				</tr>

					<?php

					$s = "select * from class";

					$res = $db->query($s);

					if($res->num_rows > 0){

						$i = 0;

						while ($r = $res->fetch_assoc()){

						$i++;

							echo "<tr>

							<td>{$i}</td>
							<td>{$r["CNAME"]}</td>
							<td>{$r["CSEC"]}</td>
							<td><a href='delete.php?id={$r["CID"]}' class='btnr'>Delete</td>


							</tr>";

						}
						
					}

					?>

			</table>
		</div>

	</div>

	

<div class="footer">
	
<footer><p>Copy Right &copy; Soma </p></footer>


</div>

</body>
</html>