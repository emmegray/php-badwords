<?php

$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita accusamus aperiam aut similique doloribus ipsum voluptatum incidunt consequuntur ea atque aliquam facere deserunt eligendi distinctio, quae ex repudiandae laborum iste.";
$badword = $_GET['badword'];
$censored = str_ireplace($badword, "***", $text);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>

<body>
  <?php
  echo $censored;
  ?>
</body>

</html>