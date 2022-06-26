<?php require_once 'classes/Couplet.php'; 
$couplet = new Couplet(); ?>

<h1>Couplet</h1>

<form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>">  
  <input type="text" name="input_value">
  <input type="submit" value="Afficher le couplet">  
</form>

<?php $couplet->launchCouplet(); ?>