<?php
$age = rand(1,50);
$genre = array('Homme','Femme');
$genre_rand = $genre[rand(0,1)];

if ($age >= 18 AND $genre_rand  == 'Homme'){
  echo 'Vous êtes un Homme et vous êtes majeur '.$age. ' ans';
} elseif ($age >= 18 AND $genre_rand == 'Femme'){
    echo 'Vous êtes une Femme et vous êtes majeur '.$age. ' ans';
} elseif ($age <= 17 AND $genre_rand == 'Homme'){
    echo 'Vous êtes un Homme et vous êtes mineur '.$age. ' ans';
} elseif ($age <= 17 AND $genre_rand == 'Femme'){
    echo 'Vous êtes une Femme et vous êtes mineur '.$age. ' ans';
} else {
  echo 'Marche pas ! ';
}
 ?>
