<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Template</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/assets/css/style.css">
</head>
<body>
  <h2>Topo do menu do ste</h2>

  <?php $this->loadViewInTemplate($viewName, $viewData); ?>

  <h2>Rodape do Site</h2>
</body>
</html>