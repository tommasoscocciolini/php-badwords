<?php
  $lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
  ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
  nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

  // var_dump($_GET['badword']);
  // $badword = $_GET['badword'];
 ?>

<div class="">
  <b>Testo Originale</b> <br>
  <?php echo $lorem ?> <!--testo originale-->
  <br><br>

  badword = <?php echo $_GET['badword'] ?>
  <br><br>

  <b>Testo 'Censurato'</b> <br>
  <?php $censored_text = str_replace($_GET['badword'], '***', $lorem);  ?>
  <?php echo $censored_text ?>

  <br><br>
  Lunghezza testo : <?php echo strlen($lorem); ?>
</div>
