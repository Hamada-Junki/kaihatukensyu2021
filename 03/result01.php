<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>メイン</title>
    </head>
    <body>
        <?php
            $id = "hogehoge";
            $password = "2525";

            if($_POST["id"] == $id AND $_POST["pas"] == $password){
                echo "ログインしました";/* ログイン成功の処理を書く */
            }
            else {
                echo "違います。";
            }
        ?>
    </body>
</html>
