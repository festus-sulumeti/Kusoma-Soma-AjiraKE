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
    <title>Soma</title>
</head>
<body class="back">

    <?php 
    
      include "navbar.php"; 
    
    ?>

    <img src="Image/b1.jpg" width="800">

    <div class="login">

        <h1 class="heading">Admin Login</h1>

        <div class="log">

           <?php
           
              if(isset($_POST["login"])){
                
                $sql = "SELECT * FROM `admin` WHERE ANAME='{$_POST["aname"]}' and APASS='{$_POST["apass"]}'";

                $res = $db->query($sql);

                if($res->num_rows>0){

                    $ro = $res->fetch_assoc();
            
                    $_SESSION["AID"]=$ro["AID"];
                    $_SESSION["ANAME"]=$ro["ANAME"];
            
                    echo "<script>window.open('admin_home.php','_self');</script>";
            
                }
                
	            else
	            {

		            echo "<div class='error'>Invalid Username and password</div>";
	            }              

              }
           
           ?>


            <form action="" method="POST">
                <label>Username</label>
                <input type="text" name="aname" required class="input">
                <br>
                <label>Password</label>
                <input type="password" name="apass" required class="input">
                <br>
                <button type="submit" class="btn" name="login">login Here</button>
            </form>
        </div>
    </div>
    
    <div class="footer">
        <footer><p>CopyRight &copy; Soma</p></footer>
    </div>

</body>
</html>