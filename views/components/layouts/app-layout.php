<!DOCTYPE html>
<html lang=<?php $_ENV["APP_LOCATE"] ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$this->e($title ?? $_ENV["APP_NAME"])?></title>
</head>
<body>
    <?=$this->section('content')?>
</body>
</html>