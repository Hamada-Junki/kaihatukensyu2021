<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>好きなゲームは？</title>
    </head>
    <body>
        <H1>回答</H1>
            <?php
                echo "あなたの名前は " . $_GET['name'] . " さんです<br/>";;
                echo "あなたの持っているゲーム機は " . $_GET['kisyu'][0] . ", " . $_GET['kisyu'][1]
                . ", " . $_GET['kisyu'][2] . "です<br/>";
                echo "あなたの好きなジャンルは " . $_GET['zyanru'] . " です<br/>";
                echo "あなたの理由は " . $_GET['kimoti'] . " です<br/>";
                echo "あなたのお勧めのゲームは " . $_GET['kanso'] . " です<br/>";
            ?>
    </body>
</html>
