<?php
function getRandomColor() {
    $colors = array('red', 'green', 'blue', 'yellow');
    $colorIndex = rand(0, count($colors) - 1);
    return $colors[$colorIndex];
}
?>
