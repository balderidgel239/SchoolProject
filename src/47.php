<?php 
  function getRandomInt($min, $max) {
    $range = $max - $min + 1;
    $random = rand(0, $range - 1);
    if ($random < 0 || $random >= $range) {
      return getRandomInt($min, $max);
    }
    return $random;
  }

  for ($i = 0; $i < 5; $i++) {
    $secretNumber = getRandomInt(1, 999999);
    echo "The number is: " . $secretNumber . "<br>";
  }
?>
