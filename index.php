<?php

  $lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

  $search = $_GET["badword"];

  $replace = "***";
  $count = 0;

  $goodLorem = str_replace ( $search , $replace , $lorem );

 ?>



 <h1>Il testo è:
   <?php
   echo "<br>";
   echo $goodLorem;
   ?>
 </h1>
