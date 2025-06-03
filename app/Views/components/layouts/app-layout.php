<!DOCTYPE html>
<html lang=<?= $_ENV["APP_LOCATE"] ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$this->e($title ?? $_ENV["APP_NAME"])?></title>

  <link rel="stylesheet" href="/static/style/reset.css">
  <link rel="stylesheet" href="/static/style/templates.css">

</head>
<body>
    <?php 
      $alert = flash('error');
      
      if ($alert) {
        echo "<p class='alert'>$alert</p>";
      }
      
      ?>

    <?=$this->section('content')?>

    <script src="/static/script/script.js"></script>
</body>
</html>