<?php
require_once('common.php');

$a = isset($_POST['kazu_box']);
$b = isset($_POST['type_box']);
$c = isset($_POST['box']);

if($a && $b && $c)
{
  $kazu = $_POST['kazu_box'];
  $type = $_POST['type_box'];
  $box = $_POST['box'];

  switch($kazu) {
    // 8頭レース
    case 8:
      switch($box) {
        //3ボックス
        case 3:
          box($type, $box, $kazu);
          break;
        //4ボックス
        case 4:
          box($type, $box, $kazu);
          break;
        //　5ボックス
        case 5:
          box($type, $box, $kazu);
          break;
        // 6ボックス
        case 6:
          box($type, $box, $kazu);
          break;
        // 7ボックス
        case 7:
          box($type, $box, $kazu);
          break;
        // 8ボックス
        case 8:
          box($type, $box, $kazu);
          break;
        // 9ボックス
        case 9:
          box($type, $box, $kazu);
          break;
        // 10ボックス
        case 10:
          box($type, $box, $kazu);
          break;
      }
      break;
    // 9頭レース
    case 9:
      switch($box) {
        //3ボックス
        case 3:
          box($type, $box, $kazu, 3);
          break;
        //4ボックス
        case 4:
          box($type, $box, $kazu, 4);
          break;
        //　5ボックス
        case 5:
          box($type, $box, $kazu, 5);
          break;
        // 6ボックス
        case 6:
          box($type, $box, $kazu, 6);
          break;
        // 7ボックス
        case 7:
          box($type, $box, $kazu, 7);
          break;
        // 8ボックス
        case 8:
          box($type, $box, $kazu, 8);
          break;
        // 9ボックス
        case 9:
          box($type, $box, $kazu, 9);
          break;
        // 10ボックス
        case 10:
          sbox($type, $box, $kazu, 10);
          break;
      }
      break;
    // 10頭レース
    case 10:
      switch($box) {
        //3ボックス
        case 3:
          box($type, $box, $kazu, 3);
          break;
        //4ボックス
        case 4:
          box($type, $box, $kazu, 4);
          break;
        //　5ボックス
        case 5:
          box($type, $box, $kazu, 5);
          break;
        // 6ボックス
        case 6:
          box($type, $box, $kazu, 6);
          break;
        // 7ボックス
        case 7:
          box($type, $box, $kazu, 7);
          break;
        // 8ボックス
        case 8:
          box($type, $box, $kazu, 8);
          break;
        // 9ボックス
        case 9:
          box($type, $box, $kazu, 9);
          break;
        // 10ボックス
        case 10:
          box($type, $box, $kazu, 10);
          break;
      }
      break;
    // 11頭レース
    case 11:
      switch($box) {
        //3ボックス
        case 3:
          box($type, $box, $kazu, 3);
          break;
        //4ボックス
        case 4:
          box($type, $box, $kazu, 4);
          break;
        //　5ボックス
        case 5:
          box($type, $box, $kazu, 5);
          break;
        // 6ボックス
        case 6:
          box($type, $box, $kazu, 6);
          break;
        // 7ボックス
        case 7:
          box($type, $box, $kazu, 7);
          break;
        // 8ボックス
        case 8:
          box($type, $box, $kazu, 8);
          break;
        // 9ボックス
        case 9:
          box($type, $box, $kazu, 9);
          break;
        // 10ボックス
        case 10:
          box($type, $box, $kazu, 10);
          break;
      }
      break;
    // 12頭レース
    case 12:
      switch($box) {
        //3ボックス
        case 3:
          box($type, $box, $kazu, 3);
          break;
        //4ボックス
        case 4:
          box($type, $box, $kazu, 4);
          break;
        //　5ボックス
        case 5:
          box($type, $box, $kazu, 5);
          break;
        // 6ボックス
        case 6:
          box($type, $box, $kazu, 6);
          break;
        // 7ボックス
        case 7:
          box($type, $box, $kazu, 7);
          break;
        // 8ボックス
        case 8:
          box($type, $box, $kazu, 8);
          break;
        // 9ボックス
        case 9:
          box($type, $box, $kazu, 9);
          break;
        // 10ボックス
        case 10:
          box($type, $box, $kazu, 10);
          break;
      }
      break;
    // 13頭レース
    case 13:
      switch($box) {
        //3ボックス
        case 3:
          box($type, $box, $kazu, 3);
          break;
        //4ボックス
        case 4:
          box($type, $box, $kazu, 4);
          break;
        //　5ボックス
        case 5:
          box($type, $box, $kazu, 5);
          break;
        // 6ボックス
        case 6:
          box($type, $box, $kazu, 6);
          break;
        // 7ボックス
        case 7:
          box($type, $box, $kazu, 7);
          break;
        // 8ボックス
        case 8:
          box($type, $box, $kazu, 8);
          break;
        // 9ボックス
        case 9:
          box($type, $box, $kazu, 9);
          break;
        // 10ボックス
        case 10:
          box($type, $box, $kazu, 10);
          break;
      }
      break;
    // 14頭レース
    case 14:
      switch($box) {
        //3ボックス
        case 3:
          box($type, $box, $kazu, 3);
          break;
        //4ボックス
        case 4:
          box($type, $box, $kazu, 4);
          break;
        //　5ボックス
        case 5:
          box($type, $box, $kazu, 5);
          break;
        // 6ボックス
        case 6:
          box($type, $box, $kazu, 6);
          break;
        // 7ボックス
        case 7:
          box($type, $box, $kazu, 7);
          break;
        // 8ボックス
        case 8:
          box($type, $box, $kazu, 8);
          break;
        // 9ボックス
        case 9:
          box($type, $box, $kazu, 9);
          break;
        // 10ボックス
        case 10:
          box($type, $box, $kazu, 10);
          break;
      }
      break;
    // 15頭レース
    case 15:
      switch($box) {
        //3ボックス
        case 3:
          box($type, $box, $kazu, 3);
          break;
        //4ボックス
        case 4:
          box($type, $box, $kazu, 4);
          break;
        //　5ボックス
        case 5:
          box($type, $box, $kazu, 5);
          break;
        // 6ボックス
        case 6:
          box($type, $box, $kazu, 6);
          break;
        // 7ボックス
        case 7:
          box($type, $box, $kazu, 7);
          break;
        // 8ボックス
        case 8:
          box($type, $box, $kazu, 8);
          break;
        // 9ボックス
        case 9:
          box($type, $box, $kazu, 9);
          break;
        // 10ボックス
        case 10:
          box($type, $box, $kazu, 10);
          break;
      }
      break;
    // 16頭レース
    case 16:
      switch($box) {
        //3ボックス
        case 3:
          box($type, $box, $kazu, 3);
          break;
        //4ボックス
        case 4:
          box($type, $box, $kazu, 4);
          break;
        //　5ボックス
        case 5:
          box($type, $box, $kazu, 5);
          break;
        // 6ボックス
        case 6:
          box($type, $box, $kazu, 6);
          break;
        // 7ボックス
        case 7:
          box($type, $box, $kazu, 7);
          break;
        // 8ボックス
        case 8:
          box($type, $box, $kazu, 8);
          break;
        // 9ボックス
        case 9:
          box($type, $box, $kazu, 9);
          break;
        // 10ボックス
        case 10:
          box($type, $box, $kazu, 10);
          break;
      }
      break;
    // 17頭レース
    case 17:
      switch($box) {
        //3ボックス
        case 3:
          box($type, $box, $kazu, 3);
          break;
        //4ボックス
        case 4:
          box($type, $box, $kazu, 4);
          break;
        //　5ボックス
        case 5:
          box($type, $box, $kazu, 5);
          break;
        // 6ボックス
        case 6:
          box($type, $box, $kazu, 6);
          break;
        // 7ボックス
        case 7:
          box($type, $box, $kazu, 7);
          break;
        // 8ボックス
        case 8:
          box($type, $box, $kazu, 8);
          break;
        // 9ボックス
        case 9:
          box($type, $box, $kazu, 9);
          break;
        // 10ボックス
        case 10:
          box($type, $box, $kazu, 10);
          break;
      }
      break;
    // 18頭レース
    case 18:
      switch($box) {
        //3ボックス
        case 3:
          box($type, $box, $kazu, 3);
          break;
        //4ボックス
        case 4:
          box($type, $box, $kazu, 4);
          break;
        //　5ボックス
        case 5:
          box($type, $box, $kazu, 5);
          break;
        // 6ボックス
        case 6:
          box($type, $box, $kazu, 6);
          break;
        // 7ボックス
        case 7:
          box($type, $box, $kazu, 7);
          break;
        // 8ボックス
        case 8:
          box($type, $box, $kazu, 8);
          break;
        // 9ボックス
        case 9:
          box($type, $box, $kazu, 9);
          break;
        // 10ボックス
        case 10:
          box($type, $box, $kazu, 10);
          break;
      }
      break;

  }
}


// function boxWide($a, $b, $c) {
//   $tensu = ($a * ($a - 1)) / 2;
//   echo '点数'. ':'. $tensu. '<br>';
//   echo round(($c * ($c - 1) * 6 / 2) / ($b * ($b - 1)), 5) * 100 . '%';
// }
//
// function boxUmaren($a, $b, $c) {
//   $tensu = ($a * ($a - 1)) / 2;
//   echo '点数'. ':'. $tensu. '<br>';
//   echo round(($c * ($c - 1)) / ($b * ($b - 1)), 5) * 100 . '%';
// }
//
// function boxUmatan($a, $b, $c) {
//   $tensu = $a * ($a - 1);
//   echo '点数'. ':'. $tensu. '<br>';
//   echo round(($c * ($c - 1)) / ($b * ($b - 1)), 5) * 100 . '%';
// }
//
// function boxSanrenhuku($a, $b, $c) {
//   $tensu = ($a * ($a - 1) * ($a - 2)) / (3 * 2);
//   echo '点数'. ':'. $tensu. '<br>';
//   echo round(($c * ($c - 1) * ($c - 2)) / ($b * ($b - 1) * ($b - 2)), 5) * 100 . '%';
// }
//
// function boxSanrentan($a, $b, $c) {
//   $tensu = ($a * ($a - 1) * ($a - 2));
//   echo '点数'. ':'. $tensu. '<br>';
//   echo round(($c * ($c - 1) * ($c - 2)) / ($b * ($b - 1) * ($b - 2)), 5) * 100 . '%';
// }
