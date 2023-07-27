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
	<?php include "navbar.php"?>

	<img src="Image/1.jpg" style="margin-left: 90px;" class="sha">

	<div id="section">

       <?php 

	    include "sidebar.php" 
	
       ?>

		<div id="content">

			<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>

			<h3>View Staff Details</h3><br><br><br>
	        
			<?php

			if (isset($_GET["mess"])) {


				echo "<div class='error'>{$_GET["mess"]}</div>";
			}

			?>
 
			<table style=" border:1px;"><tr>

				<th>S.No</th>
				<th>Staff's Name</th>
				<th>Qualifications</th>
				<th>Salary</th>
	
		 </tr>

		 <?php


		  $s = "select * from staff";

		 $res = $db->query($s);

		 if ($res->num_rows>0) {
			
			$i = 0;

			while ($r=$res->fetch_assoc()) {
				
				$i++;

				echo "<tr>

					<td>{$i}</td>
					<td>{$r["TNAME"]}</td>
					<td>{$r["QUAL"]}</td>
					<td>{$r["SAL"]}</td>
					<td><a href='staff_delete.php?id={$r["TID"]}' class='btnr'>Delete</a></td>


				</tr>";
			}
		 }




		 ?>

	     </table>
			

				
		 </div>

		</div>
	

	</div>	

<div class="footer">
	
<footer><p>Copy Right &copy; Soma</p></footer>


</div>

</body>
</html>