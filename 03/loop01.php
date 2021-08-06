<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>メイン</title>
    </head>
    <body>
        <h1>ログイン</h1>
        <form method='post' action='loop01.php'>
                <p><input type="text" name="ru-pu">
                <input type="submit"></p>
        </form>

                    <table border="1" >
        <?php
            for($i=1; $i <= $_POST["ru-pu"]; $i++){

                // $iはfor文のカウンター
                if($i % 2 == 0 ){
                    $iro = 'style="background-color: #00ffff;"';
                    echo "<tr><td ".$iro.">シナモン</td>
                        <td ".$iro.">マイメロ</td>
                        <td ".$iro.">クロミ</td>
                        <td ".$iro.">ポムポムプリン</td>
                        <td ".$iro.">切り身ちゃん</td></tr>";

                }else{
                    echo "<tr><td>シナモン</td>
                        <td>マイメロ</td>
                        <td>クロミ</td>
                        <td>ポムポムプリン</td>
                        <td>切り身ちゃん</td></tr>";
                }

            }
        ?>
                    </table>
    </body>
</html>
