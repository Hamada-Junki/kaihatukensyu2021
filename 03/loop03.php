<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>メイン</title>
    </head>
    <body>
        <h1>クラスループ</h1>
        <form method='post' action='loop03.php'>
            <p><input  type="number" name="gyou" max="999" min="0">行×
                <input type="number" name="retu" max="999" min="0">列</p>
                <input type="submit">
                <input type="reset">
        </form>
            <table border="1" >
                <?php
                    for($y=1; $y <= $_POST["gyou"]; $y++){
                        echo"<tr>";

                        for($x=1; $x <= $_POST["retu"]; $x++){
                            echo"<td>$y-$x</td>";
                        }
                        "</tr>";
                    }
                ?>
        </table>
    </body>
</html>
