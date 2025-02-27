<?php
header('Content-Type: text/html; charset=UTF-8');

if ($_REQUEST['cod'] == 1) {
  $archivo = 'poemas/poema1.txt';
  echo "<strong>Poema 1:</strong>" . nl2br(file_get_contents($archivo));
}
if ($_REQUEST['cod'] == 2)
  echo "<strong>Poema 2:</strong>" . nl2br(file_get_contents('poemas/poema2.txt'));
if ($_REQUEST['cod']==3)
  echo "<strong>Poema 3:</strong>" . nl2br(file_get_contents('poemas/poema3.txt'));
if ($_REQUEST['cod']==4)
  echo "<strong>Poema 4:</strong>" . nl2br(file_get_contents('poemas/poema4.txt'));
if ($_REQUEST['cod']==5)
  echo "<strong>Poema 5:</strong>" . nl2br(file_get_contents('poemas/poema5.txt'));
if ($_REQUEST['cod']==6)
  echo "<strong>Poema 6:</strong>" . nl2br(file_get_contents('poemas/poema6.txt'));
if ($_REQUEST['cod']==7)
  echo "<strong>Poema 7:</strong>" . nl2br(file_get_contents('poemas/poema7.txt'));
if ($_REQUEST['cod']==8)
  echo "<strong>Poema 8:</strong>" . nl2br(file_get_contents('poemas/poema8.txt'));
if ($_REQUEST['cod']==9)
  echo "<strong>Poema 9:</strong>" . nl2br(file_get_contents('poemas/poema9.txt'));
if ($_REQUEST['cod']==10)
  echo "<strong>Poema 10:</strong>" . nl2br(file_get_contents('poemas/poema10.txt'));
?>
