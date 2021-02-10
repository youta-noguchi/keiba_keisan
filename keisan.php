<?php
require_once('common.php');

if(isset($_POST['kazu']) && isset($_POST['type']) && isset($_POST['tensu'])) {
  $kazu = $_POST['kazu'];
  $type = $_POST['type'];
  $tensu = $_POST['tensu'];

  result($kazu, 8, $type, $tensu);

  result($kazu, 9, $type, $tensu);

  result($kazu, 10, $type, $tensu);

  result($kazu, 11, $type, $tensu);

  result($kazu, 12, $type, $tensu);

  result($kazu, 13, $type, $tensu);

  result($kazu, 14, $type, $tensu);

  result($kazu, 15, $type, $tensu);

  result($kazu, 16, $type, $tensu);

  result($kazu, 17, $type, $tensu);

  result($kazu, 18, $type, $tensu);
}
