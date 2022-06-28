<?php require_once 'classes/Couplet.php';
$couplet = new Couplet(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Couplet PHP</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <main>
    <h1>Couplet</h1>
      <form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <input type="text" name="input_value">
        <input type="submit" value="Afficher le couplet">
      </form>
    <?php $couplet->launchCouplet(); ?>
  </main>
</body>
</html>