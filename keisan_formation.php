<?php
require_once('common.php');

$a = isset($_POST['kazu_formation']);
$b = isset($_POST['type_formation']);
$c = isset($_POST['ichi']);
$d = isset($_POST['ni']);
$e = isset($_POST['san']);

// 三頭目、三着目が選択されていないパターン
if($a && $b && $c && $d)
{

  $kazu = $_POST['kazu_formation'];
  $type = $_POST['type_formation'];
  $ichi = $_POST['ichi'];
  $ni = $_POST['ni'];

  //　馬連、馬単
  $tensu2 = count($ichi) * count($ni);
  $common = count(array_intersect($ichi, $ni));
  // 三連単
  if($e) {
    $san = $_POST['san'];

    $tensu3 = count($ichi) * count($ni) * count($san);
    $common1_2 = $common * count($san);
    $common1_3 = count(array_intersect($ichi, $san)) * count($ni);
    $common2_3 = count(array_intersect($ni, $san)) * count($ichi);
    $common1_2_3 = count(array_intersect($ichi, $ni, $san)) * 2;
  }


  switch($kazu) {
    case 8:
      switch($type) {
        case '馬連':
          formationUmaren($common, $kazu);
          break;
        case '馬単':
          formationUmatan($common, $kazu);
          break;
        case '三連単':
          formationSanrentan($kazu);
          break;
      }
      break;
    case 9:
      switch($type) {
        case '馬連':
          formationUmaren($common, $kazu);
          break;
        case '馬単':
          formationUmatan($common, $kazu);
          break;
        case '三連単':
          formationSanrentan($kazu);
          break;
      }
      break;
    case 10:
      switch($type) {
        case '馬連':
          formationUmaren($common, $kazu);
          break;
        case '馬単':
          formationUmatan($common, $kazu);
          break;
        case '三連単':
          formationSanrentan($kazu);
          break;
      }
      break;
    case 11:
      switch($type) {
        case '馬連':
          formationUmaren($common, $kazu);
          break;
        case '馬単':
          formationUmatan($common, $kazu);
          break;
        case '三連単':
          formationSanrentan($kazu);
          break;
      }
      break;
    case 12:
      switch($type) {
        case '馬連':
          formationUmaren($common, $kazu);
          break;
        case '馬単':
          formationUmatan($common, $kazu);
          break;
        case '三連単':
          formationSanrentan($kazu);
          break;
      }
      break;
    case 13:
      switch($type) {
        case '馬連':
          formationUmaren($common, $kazu);
          break;
        case '馬単':
          formationUmatan($common, $kazu);
          break;
        case '三連単':
          formationSanrentan($kazu);
          break;
      }
      break;
    case 14:
      switch($type) {
        case '馬連':
          formationUmaren($common, $kazu);
          break;
        case '馬単':
          formationUmatan($common, $kazu);
          break;
        case '三連単':
          formationSanrentan($kazu);
          break;
      }
      break;
    case 15:
      switch($type) {
        case '馬連':
          formationUmaren($common, $kazu);
          break;
        case '馬単':
          formationUmatan($common, $kazu);
          break;
        case '三連単':
          formationSanrentan($kazu);
          break;
      }
      break;
    case 16:
      switch($type) {
        case '馬連':
          formationUmaren($common, $kazu);
          break;
        case '馬単':
          formationUmatan($common, $kazu);
          break;
        case '三連単':
          formationSanrentan($kazu);
          break;
      }
      break;
    case 17:
      switch($type) {
        case '馬連':
          formationUmaren($common, $kazu);
          break;
        case '馬単':
          formationUmatan($common, $kazu);
          break;
        case '三連単':
          formationSanrentan($kazu);
          break;
      }
      break;
    case 18:
      switch($type) {
        case '馬連':
          formationUmaren($common, $kazu);
          break;
        case '馬単':
          formationUmatan($common, $kazu);
          break;
        case '三連単':
          formationSanrentan($kazu);
          break;
      }
      break;
  }
}
