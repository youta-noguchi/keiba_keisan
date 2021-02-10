<?php

// 単勝
function tansho($num, $tensu) {
  echo '点数 : '. $tensu. '<br>';
  echo '確率 : ' . round(1 * $tensu / $num, 5) * 100 . '%';
}

// 複勝
function hukusho($num, $tensu) {
  echo '点数 : '. $tensu. '<br>';
  echo '確率 : ' . round(3 * $tensu / $num, 5) * 100 . '%';
}

// ワイド
function wide($num, $tensu) {
  $a = 6 * $tensu / ($num * ($num - 1));
  echo '点数 : '. $tensu. '<br>';
  echo '確率 : ' . round($a, 5) * 100 . '%';
}
// 馬連
function umaren($num, $tensu) {
  $a = 2 * $tensu / ($num * ($num - 1));
  echo '点数 : '. $tensu. '<br>';
  echo '確率 : ' . round($a, 5) * 100 . '%';
}

// 馬単
function umatan($num, $tensu) {
  $a = 1 * $tensu / ($num * ($num - 1));
  echo '点数 : '. $tensu. '<br>';
  echo '確率 : ' . round($a, 5) * 100 . '%';
}

// 三連複
function sanrenhuku($num, $tensu) {
  $a = 6 * $tensu / ($num * ($num - 1) * ($num - 2));
  echo '点数 : '. $tensu. '<br>';
  echo '確率 : ' . round($a, 5) * 100 . '%';
}

// 三連単
function sanrentan($num, $tensu) {
  $a = 1 * $tensu / ($num * ($num - 1) * ($num - 2));
  echo '点数 : '. $tensu. '<br>';
  echo '確率 : ' . round($a, 5) * 100 . '%';
}

// 各計算を統合
function result($a,$b,$c,$d) {
  if($a == $b) {
    switch($c) {
      case '単勝':
        tansho($a, $d);
        break;
      case '複勝':
        hukusho($a, $d);
        break;
      case 'ワイド':
        wide($a, $d);
        break;
      case '馬連':
        umaren($a, $d);
        break;
      case '馬単':
        umatan($a, $d);
        break;
      case '三連複':
        sanrenhuku($a, $d);
        break;
      case '三連単':
        sanrentan($a, $d);
        break;
    }
  }
}

//　ワイドボックス
function boxWide($a, $b) {
  $tensu = ($a * ($a - 1)) / 2;
  echo '点数 : ' . $tensu. '<br>';
  echo '確率 : ' . round($tensu * 6 / ($b * ($b - 1)), 5) * 100 . '%';
}

// 馬連ボックス
function boxUmaren($a, $b) {
  $tensu = ($a * ($a - 1)) / 2;
  echo '点数 : '. $tensu. '<br>';
  echo '確率 : ' . round(2 * $tensu / ($b * ($b - 1)), 5) * 100 . '%';
}

// 馬単ボックス
function boxUmatan($a, $b) {
  $tensu = $a * ($a - 1);
  echo '点数 : '. $tensu. '<br>';
  echo '確率 : ' . round(1 * $tensu / ($b * ($b - 1)), 5) * 100 . '%';
}

// 三連複ボックス
function boxSanrenhuku($a, $b) {
  $tensu = ($a * ($a - 1) * ($a - 2)) / (3 * 2);
  echo '点数 : '. $tensu. '<br>';
  echo '確率 : ' . round(6 * $tensu / ($b * ($b - 1) * ($b - 2)), 5) * 100 . '%';
}

// 三連単ボックス
function boxSanrentan($a, $b) {
  $tensu = ($a * ($a - 1) * ($a - 2));
  echo '点数 : '. $tensu. '<br>';
  echo '確率 : ' . round(1 * $tensu / ($b * ($b - 1) * ($b - 2)), 5) * 100 . '%';
}


// ボックスの各計算を統合
function box($a, $b, $c) {
  switch($a) {
    case 'ワイド':
      boxWide($b, $c);
      break;
    case '馬連':
      boxUmaren($b, $c);
      break;
    case '馬単':
      boxUmatan($b, $c);
      break;
    case '三連複':
      boxSanrenhuku($b, $c);
      break;
    case '三連単':
      boxSanrentan($b, $c);
      break;
  }
}

//　ワイド流し
function nagashiWide($a, $b) {
  $tensu = $a;
  echo '点数 : ' . $tensu. '<br>';
  echo '確率 : ' . round($tensu * 6 / ($b * ($b - 1)), 5) * 100 . '%';
}

// 馬連流し
function nagashiUmaren($a, $b) {
  $tensu = $a;
  echo '点数 : ' . $tensu. '<br>';
  echo '確率 : ' . round($tensu / ($b * ($b - 1) / 2), 5) * 100 . '%';
}

//　馬単流し
function nagashiUmatan($a, $b) {
  $tensu = $a;
  echo '点数 : ' . $tensu. '<br>';
  echo '確率 : ' . round($tensu / ($b * ($b - 1)), 5) * 100 . '%';
}

// 馬単マルチ
function nagashiUmatanMulti($a, $b) {
  $tensu = $a * 2 * 1;
  echo '点数 : ' . $tensu. '<br>';
  echo '確率 : ' . round($tensu / ($b * ($b - 1)), 5) * 100 . '%';
}

// 三連複軸1頭流し
function nagashiSanrenhuku1($a, $b) {
  $tensu = $a * ($a - 1) / 2;
  echo '点数 : ' . $tensu. '<br>';
  echo '確率 : ' . round($tensu / ($b * ($b - 1) * ($b - 2) / 3 * 2 * 1), 5) * 100 . '%';
}

//　三連複軸2頭流し
function nagashiSanrenhuku2($a, $b) {
  $tensu = $a;
  echo '点数 : ' . $tensu. '<br>';
  echo '確率 : ' . round($tensu / ($b * ($b - 1) * ($b - 2) / 3 * 2 * 1), 5) * 100 . '%';
}

// 三連単軸1頭流し
function nagashiSanrentan1($a, $b) {
  $tensu = $a * ($a - 1);
  echo '点数 : ' . $tensu. '<br>';
  echo '確率 : ' . round($tensu / ($b * ($b - 1) * ($b - 2)), 5) * 100 . '%';
}

// 三連単軸1頭マルチ
function nagashiSanrentan1Multi($a, $b) {
  $tensu = $a * ($a - 1) * 3;
  echo '点数 : ' . $tensu. '<br>';
  echo '確率 : ' . round($tensu / ($b * ($b - 1) * ($b - 2)), 5) * 100 . '%';
}

// 三連単軸2頭流し
function nagashiSanrentan2($a, $b) {
  $tensu = $a;
  echo '点数 : ' . $tensu. '<br>';
  echo '確率 : ' . round($tensu / ($b * ($b - 1) * ($b - 2)), 5) * 100 . '%';
}

// 三連単軸2頭マルチ
function nagashiSanrentan2Multi($a, $b) {
  $tensu = $a * 6;
  echo '点数 : ' . $tensu. '<br>';
  echo '確率 : ' . round($tensu / ($b * ($b - 1) * ($b - 2)), 5) * 100 . '%';
}

//　流しの各計算を統合
function nagashi($a, $b, $c) {
  switch($a) {
    case 'ワイド':
      nagashiWide($b, $c);
      break;
    case '馬連':
      nagashiUmaren($b, $c);
      break;
    case '馬単':
      nagashiUmatan($b, $c);
      break;
    case '馬単マルチ':
      nagashiUmatanMulti($b, $c);
      break;
    case '三連複軸1頭':
      nagashiSanrenhuku1($b, $c);
      break;
    case '三連複軸2頭':
      nagashiSanrenhuku2($b, $c);
      break;
    case '三連単軸1頭':
      nagashiSanrentan1($b, $c);
      break;
    case '三連単軸1頭マルチ':
      nagashiSanrentan1Multi($b, $c);
      break;
    case '三連単軸2頭':
      nagashiSanrentan2($b, $c);
      break;
    case '三連単軸2頭マルチ':
      nagashiSanrentan2Multi($b, $c);
      break;
  }
}



// 馬連フォーメーション
function formationUmaren($a, $b) {
  switch($a) {
    case 1:
      global $tensu2;
      $tensu2 -= 1;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1) / 2), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 2:
      global $tensu2;
      $tensu2 -= 3;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1) / 2), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 3:
      global $tensu2;
      $tensu2 -= 6;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1) / 2), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 4:
      global $tensu2;
      $tensu2 -= 10;
      echo '点数 : '. $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1) / 2), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 5:
      global $tensu2;
      $tensu2 -= 15;
      echo '点数 : '. $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1) / 2), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 6:
      global $tensu2;
      $tensu2 -= 21;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1) / 2), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 7:
      global $tensu2;
      $tensu2 -= 28;
      echo '点数 : '. $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1) / 2), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 8:
      global $tensu2;
      $tensu2 -= 36;
      echo '点数 : '. $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1) / 2), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 9:
      global $tensu2;
      $tensu2 -= 45;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1) / 2), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 10:
      global $tensu2;
      $tensu2 -= 55;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1) / 2), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 11:
      global $tensu2;
      $tensu2 -= 66;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1) / 2), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 12:
      global $tensu2;
      $tensu2 -= 78;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1) / 2), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 13:
      global $tensu2;
      $tensu2 -= 91;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1) / 2), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 14:
      global $tensu2;
      $tensu2 -= 105;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1) / 2), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 15:
      global $tensu2;
      $tensu2 -= 121;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1) / 2), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 16:
      global $tensu2;
      $tensu2 -= 138;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1) / 2), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 17:
      global $tensu2;
      $tensu2 -= 156;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1) / 2), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 18:
      global $tensu2;
      $tensu2 -= 175;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1) / 2), 5) * 100 . '%';
      unset($tensu2);
      break;
  }
}

// 馬単フォーメーション
function formationUmatan($a, $b) {
  switch($a) {
    case 1:
      global $tensu2;
      $tensu2 -= 1;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1)), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 2:
      global $tensu2;
      $tensu2 -= 2;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1)), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 3:
      global $tensu2;
      $tensu2 -= 3;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1)), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 4:
      global $tensu2;
      $tensu2 -= 4;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1)), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 5:
      global $tensu2;
      $tensu2 -= 5;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1)), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 6:
      global $tensu2;
      $tensu2 -= 6;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1)), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 7:
      global $tensu2;
      $tensu2 -= 7;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1)), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 8:
      global $tensu2;
      $tensu2 -= 8;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1)), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 9:
      global $tensu2;
      $tensu2 -= 9;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1) / 2)) * 100 . '%';
      unset($tensu2);
      break;
    case 10:
      global $tensu2;
      $tensu2 -= 10;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1) / 2)) * 100 . '%';
      unset($tensu2);
      break;
    case 11:
      global $tensu2;
      $tensu2 -= 11;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1) / 2)) * 100 . '%';
      unset($tensu2);
      break;
    case 12:
      global $tensu2;
      $tensu2 -= 12;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1)), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 13:
      global $tensu2;
      $tensu2 -= 13;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1)), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 14:
      global $tensu2;
      $tensu2 -= 14;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1)), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 15:
      global $tensu2;
      $tensu2 -= 15;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1)), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 16:
      global $tensu2;
      $tensu2 -= 16;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1)), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 17:
      global $tensu2;
      $tensu2 -= 17;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1)), 5) * 100 . '%';
      unset($tensu2);
      break;
    case 18:
      global $tensu2;
      $tensu2 -= 18;
      echo '点数 : ' . $tensu2. '<br>';
      echo '確率 : ' . round($tensu2 / ($b * ($b - 1)), 5) * 100 . '%';
      unset($tensu2);
      break;
  }
}

// 三連単フォーメーション
function formationSanrentan($a) {
  global $tensu3;
  global $common1_2;
  global $common1_3;
  global $common2_3;
  global $common1_2_3;
  $tensu3 = $tensu3 - ($common1_2 + $common1_3 + $common2_3) + $common1_2_3;
  echo '点数 : ' . $tensu3. '<br>';
  echo '確率 : ' . round($tensu3 / ($a * ($a - 1) * ($a - 2)), 5) * 100 . '%';
  unset($tensu3);
  unset($common1_2);
  unset($common1_3);
  unset($common2_3);
  unset($common1_2_3);
}
