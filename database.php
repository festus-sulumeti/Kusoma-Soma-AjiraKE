<?php

  $db = new mysqli("localhost", "root", "", "learning_system");
  if(!$db){
    
    echo "connection failed";
    
  }

?>