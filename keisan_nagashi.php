<?php

require_once('common.php');

$a = isset($_POST['kazu_nagashi']);
$b = isset($_POST['nagashi']);
$c = isset($_POST['aite']);

if($a && $b && $c) {
  $kazu = $_POST['kazu_nagashi'];
  $nagashi = $_POST['nagashi'];
  $aite = $_POST['aite'];

  switch($kazu) {
    // 8頭レース
    case 8:
      nagashi($nagashi, $aite, $kazu);
      break;
    // 9頭レース
    case 9:
      nagashi($nagashi, $aite, $kazu);
      break;
    // 10頭レース
    case 10:
      nagashi($nagashi, $aite, $kazu);
      break;
    // 11頭レース
    case 11:
      nagashi($nagashi, $aite, $kazu);
      break;
    // 12頭レース
    case 12:
      nagashi($nagashi, $aite, $kazu);
      break;
    // 13頭レース
    case 13:
      nagashi($nagashi, $aite, $kazu);
      break;
    // 14頭レース
    case 14:
      nagashi($nagashi, $aite, $kazu);
      break;
    // 15頭レース
    case 15:
      nagashi($nagashi, $aite, $kazu);
      break;
    // 16頭レース
    case 16:
      nagashi($nagashi, $aite, $kazu);
      break;
    // 17頭レース
    case 17:
      nagashi($nagashi, $aite, $kazu);
      break;
    // 18頭レース
    case 18:
      nagashi($nagashi, $aite, $kazu);
      break;
  }
}
