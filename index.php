<?php

//Define some variables to be echoed in HTML body

$my_str = "A string I want to print out";
$my_bool = true;
$my_float = 13.0;

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Echos</title>
  </head>
  <body>
  
    <h1> A page full of echo-printed variables </h1>
  
   <h2> Here they are: </h2>
    <ul>
      <li> String: <?php echo $my_str; ?> </li>
      <li> Boolean: <?php echo $my_bool; ?> </li>
     <li> Float: <?php echo $my_float; ?> </li>
   </ul>
   
  </body>
</html>
