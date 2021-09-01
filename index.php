<?php

use \Tutoriel\HTML\BootstrapForm;
use \Tutoriel\Autoloader;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
  <?php
  require 'class/Autoloader.php';

  Autoloader::register();
  $form = new  BootstrapForm($_POST);
  ?>

  <form action="" method="post">
    <?php

    echo $form->input('username');

    echo $form->input('password');

    echo $form->submit();

    ?>
  </form>

</body>

</html>