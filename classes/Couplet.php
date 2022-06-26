<?php

class Couplet {

  public int $valueMin = 0;
  public int $valueOne = 1;
  public int $valueTwo = 2;
  public int $valueMax = 99;

  //protege l'input
  private function protectedInput():string {
    if (isset($_POST['input_value'])) {
      $this->value = htmlspecialchars(trim($_POST['input_value']));
      return $this->value;
    }
  }
  //enlève un pour rentrer dans les conditions d'affichage du couplet
  private function minusOne($value): int {
    return $value - 1;
  }

  //affiche le couplet
  public function launchCouplet() :void {
    //applique la protection de l'input
    $value = $this->protectedInput();

    //verifie si les valeurs rentrent dans les conditions d'affichage du couplet
    if ($value < $this->valueMin || $value > $this->valueMax) {
      echo "Veuillez entrer un nombre entre " . $this->valueMin . " et " . $this->valueMax . ".";
      
      //affiche le couplet avec une valeur d'input 0
    } elseif ($value == $this->valueMin) {
      $value = is_numeric($value);
      echo '<p> Plus de bolées de cidre sur le mur, plus de bolées sans alcool. </p>
      <p> Vas au supermarché pour en acheter, ' . $this->valueMax . ' bolées de cidre sur le mur. </p>';
      
      //affiche le couplet avec une valeur d'input 1
    } elseif ($value == $this->valueOne) {
      echo '<p>'. $value .' bolées de cidre sur le mur, ' . $value . ' bolées sans alcool. </p>
      <p> Bois en une et au suivant ! Plus de bolées de cidre sur le mur. </p>';
      
      //affiche le couplet avec une valeur d'input 2
    } elseif ($value == $this->valueTwo) {
      echo '<p>'. $value .' bolées de cidre sur le mur, ' . $value . ' bolées sans alcool. </p>
      <p> Bois en une et au suivant ! '.$this->minusOne($value).' bolée de cidre sur le mur. </p>';
      
      //affiche le couplet dans les conditions les plus récurrentes (de 99 à 2)
    } elseif ($value <= $this->valueMax || $value > $this->valueTwo) {
      echo '<p>'. $value .' bolées de cidre sur le mur, ' . $value . ' bolées sans alcool. </p>
      <p> Bois en une et au suivant ! ' . $this->minusOne($value) . ' bolées de cidre sur le mur. </p>';
      
      //verifie si la valeur est vide
    } elseif(empty($value)) {
      echo '<p> Veuillez entrer une valeur entre '. $this->valueMin . ' et ' . $this->valueMax . ' </p>';
    
    } else {
      echo "Veuillez entrer un nombre entre " . $this->valueMin . " et " . $this->valueMax . ".";
    }
  }
}