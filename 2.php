<?php

$my_str = "page2";

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Echos</title>
    <link rel="stylesheet" href="style.css">

  </head>
  <body id="<?php echo $my_str;?>">

    <h1> A page full of echo-printed variables </h1>

    <h2> Here they are: </h2>
      <ul>
        <li> <a href="index.php"> php file</a> </li>
        <li> <a href="2.php"> second php file</a> </li>
        <li> <a href="3.php"> third php file</a> </li>
        <li> <a href="4.php"> fourth php file</a> </li>
      </ul>

  </body>
</html>
