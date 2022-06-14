<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Toy.php";
require_once __DIR__ . "/User.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php foreach($toys as $toy) { ?>
  <div><?php echo $toy->printInfo(); ?></div>
<?php } ?>

<?php foreach($foods as $food) { ?>
  <div><?php echo $food->printInfo(); ?></div>
<?php } ?>
  
</body>
</html>