<?php
require 'class/form.php';
require 'class/text.php';


$form = new Form($_POST);
var_dump(Text::withZero(14));
?>

<form action="" method="post">
  <?php

  echo $form->input('username');

  echo $form->input('password');

  echo $form->submit();

  ?>
</form>