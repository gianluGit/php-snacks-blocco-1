<!-- Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<h1>Snack 1</h1>
<?php
  $arr = [
    'Lakers - Clippers' => '110-95',
    'Jazz - Nuggets' => '78-80',
    'Celtics - Raptors' => '102-99',
    'Suns - Pelicans' => '93-100'
  ];

  var_dump($arr);
  echo "<br>-----------<br>";

  foreach ($arr as $key => $value) {
    echo $key . ' | ' . $value;
    echo "<br>";
  }


  // $keys = array_keys($arr);
  // for ($i=0; $i < count($keys); $i++) {
  //   $value = $arr[$keys[$i]];
  //   echo $keys[$i] . ' | ' . $value;
  //   echo "<br>";
  // }

?>

<h1>Snack 2</h1>

<?php
// Snack 2
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"

  $name = $_GET["name"];
  $mail = $_GET["mail"];
  $age = $_GET["age"];

  $lengthName = strlen($name);

  $validMail = strpos($mail, '@');
  $validMail2 = strpos($mail, '.');

  $isNumber = is_numeric($age);

  if ($lengthName > 3 && $validMail && $validMail2 && $isNumber) {

    echo "Accesso riuscito";

  } else {

    echo "Accesso negato";

  }

?>

<h1>Snack 3</h1>
<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->

<?php

  $arrNum = [];

  while (count($arrNum) < 15) {

    $number = rand(1, 20);

    if (in_array($number, $arrNum) == false) {

      $arrNum[] = $number;

    }
  }

  var_dump($arrNum);
  echo "<br>------<br>";

  for ($i=0; $i < count($arrNum); $i++) {

    echo $arrNum[$i];
    echo "<br>";
  }
?>
