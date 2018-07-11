<?php
define('PARAMETER_ERROR', 'error: (for example: php index.php axdxlxexr)');
define('IMPOSSIBLE_ERROR', 'impossible for this parameter');

if (count($argv) < 2) {
  echo PARAMETER_ERROR;
  return;
}

$string = '';

for ($i = 1; $i < count($argv); $i++) {
  if ($i > 1) {
    $string .= ' ';
  }
  $string .=  strtolower($argv[$i]);
}

$a_pos = strpos($string, 'a');
if ($a_pos === false) {
  echo IMPOSSIBLE_ERROR;
  return;
}

$string_a = substr($string, $a_pos + 1);
// echo $string_a . "\n";
$a_pos = $a_pos;

$r_pos = strrpos($string_a, 'r');
if ($r_pos === false) {
  echo IMPOSSIBLE_ERROR;
  return;
}

$string_r = substr($string_a, 0, $r_pos);
// echo $string_r . "\n";
$r_pos = $a_pos + 1 + $r_pos;

$d_pos = strpos($string_r, 'd');
if ($d_pos === false) {
  echo IMPOSSIBLE_ERROR;
  return;
}

$string_d = substr($string_r, $d_pos + 1);
// echo $string_d . "\n";
$d_pos = $a_pos + 1 + $d_pos;

$e_pos = strrpos($string_d, 'e');
if ($e_pos === false) {
  echo IMPOSSIBLE_ERROR;
  return;
}

$string_e = substr($string_d, 0, $e_pos);
// echo $string_e . "\n";
$e_pos = $d_pos + 1 + $e_pos;

$l_pos = strpos($string_e, 'l');
if ($l_pos === false) {
  echo IMPOSSIBLE_ERROR;
  return;
}

$string_l = substr($string_e, $l_pos + 1);
// echo $string_l . "\n";
$l_pos = $d_pos + 1 + $l_pos;

$return = '';

for ($i = 0; $i < strlen($string); $i++) {
  if (
    $i === $a_pos ||
    $i === $d_pos ||
    $i === $l_pos ||
    $i === $e_pos ||
    $i === $r_pos 
  ) {
    $return .= strtoupper($string[$i]);
  } else {
    $return .= $string[$i];
  }
}

echo $return;