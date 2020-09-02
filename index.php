<?php

  $lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

  $search = $_GET["badword"];

  $replace = "***";
  $count = 0;

  str_replace ( mixed $search , mixed $replace , mixed $lorem [, int &$count ] ) : mixed;

 ?>



 <h1>Il testo è:
   <?php
   echo "<br>";
   echo $lorem;
   ?>
 </h1>



  <h1>Per un totale di "<?php  echo $count;  ?>" badwords.</h1>
