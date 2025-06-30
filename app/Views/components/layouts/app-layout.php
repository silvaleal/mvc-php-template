<!DOCTYPE html>
<html lang=<?= $_ENV["APP_LOCATE"] ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $this->e($title ?? $_ENV["APP_NAME"]) ?></title>

  <link rel="stylesheet" href="/static/style/reset.css">
  <link rel="stylesheet" href="/static/style/components.css">

</head>

<body>
  <?php $alert = flash('error') ?>

  <?php if ($alert): ?>
    <p class='alert-fail'><?= $alert ?></p>
  <?php endif; ?>
  
  <?= $this->section('content') ?>
</body>

</html>