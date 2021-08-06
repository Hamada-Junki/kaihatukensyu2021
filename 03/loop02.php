<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>ループ</title>
    </head>
    <body>
        <hi>ループ</hi>
            <form method='post' action='loop02.php'>
                <p><input  type="number" name="gyou" max="999" min="0">行×
                    <input type="number" name="retu" max="999" min="0">列</p>
                    <input type="submit">
                    <input type="reset">
            </form>
                <table border="1" >
                        <?php
                            for($y=0; $y < $_POST["gyou"]; $y++){
                                echo"<tr>";

                                for($x=0; $x < $_POST["retu"]; $x++){
                                    echo"<td>テスト</td>";
                                }
                                "</tr>";
                            }
                        ?>
                </table>
    </body>
</html>
