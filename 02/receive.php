<?php
  // phpの中にhtmlを書く方式
  echo "あなたの名前は " . $_GET['name'] . " さんです<br/>";;
  echo "あなたの持っているゲーム機は " . $_GET['kisyu'][0] . ", " . $_GET['kisyu'][1]
     . ", " . $_GET['kisyu'][2] . "です<br/>";
  echo "あなたの好きなジャンルは " . $_GET['zyanru'] . " です<br/>";
  echo "あなたの理由は " . $_GET['kimoti'] . " です<br/>";
  echo "あなたのお勧めのゲームは " . $_GET['kanso'] . " です<br/>";
?>
