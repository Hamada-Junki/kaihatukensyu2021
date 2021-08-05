<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>メイン</title>
    </head>
    <body>
        <?php
  // ゴールド会員
            $gold_pw = "gold";
            $gold_id = "hogehogegold";

  // ノーマル会員
            $reg_pw = "normal";
            $reg_id = "hogehogeregular";

  // 分岐の処理を書く
            if ($_POST["id"] == $gold_id AND $_POST["pas"] == $gold_pw) {
                echo "ゴールドさんですね。";
            }else if($_POST["id"] == $reg_id AND $_POST["pas"] == $reg_pw) {
                echo "ノーマルさんですね。";
            }else{
                echo "違います";
            }
        ?>
    </body>
</html>
