<!DOCTYPE html>
<html>
<head>
  <title> Welcome to DevOps on AWS!!!</title>
</head>
<body>
  <?php
    require 'Welcomne.php';
    $welcome=new Welcome();
    ?>
    <h1><?php echo $welcome->greet() ?></h1>
  </body>
  </html>
