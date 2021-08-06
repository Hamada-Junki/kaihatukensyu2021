<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>消費計算</title>
    </head>
    <body>
        <h1>消費計算</h1>
        <form method='get' action='tax.php'>
        <table border="1" >
            <tr>
                <th colspan="1">商品名</th>
                <th colspan="1">価格</th>
                <th colspan="1">個数</th>
                <th colspan="1">税率</th>
            </tr>
            <tr>
                <td ><input type="text" name="syouhin"> </td>
                <td ><input type="text" name="kakaku">円</td>
                <td><input type="number" name="post" max="999" min="1">個</td>
                <td >
                    <input type="radio" name="zeiritu" value="8">8%
                    <input type="radio" name="zeiritu" value="10">10%
                </td>
            </tr>
            <tr>
                <td ><input type="text" name="syouhin1"> </td>
                <td ><input type="text" name="kakaku1">円</td>
                <td><input type="text" name="post1" max="999" min="1">個</td>
                <td >
                    <input type="radio" name="zeiritu1" value="8">8%
                    <input type="radio" name="zeiritu1" value="10">10%
                </td>
            </tr>
            <tr>
                <td ><input type="text" name="syouhin2"> </td>
                <td ><input type="text" name="kakaku2">円</td>
                <td><input type="text" name="post2" max="999" min="1">個</td>
                <td >
                    <input type="radio" name="zeiritu2" value="8">8%
                    <input type="radio" name="zeiritu2" value="10">10%
                </td>

            </tr>
            <tr>
                <td ><input type="text" name="syouhin3"></td>
                <td ><input type="text" name="kakaku3">円</td>
                <td><input type="text" name="post3" max="999" min="1">個</td>
                <td >
                    <input type="radio" name="zeiritu3" value="8">8%
                    <input type="radio" name="zeiritu3" value="10">10%
                </td>
            </tr>
            <tr>
                <td ><input type="text" name="syouhin4"> </td>
                <td ><input type="text" name="kakaku4">円</td>
                <td><input type="text" name="post4" max="999" min="1">個</td>
                <td >
                    <input type="radio" name="zeiritu4" value="8">8%
                    <input type="radio" name="zeiritu4" value="10">10%
                </td>
            </tr>
        <tr>

            </td>
        </tr>
        </table>
            <td colspan="4" style="text-align:right;"><input type="submit"><input type="reset">
            </td>

            <?php
                $kasan = $_GET['kakaku']*$_GET['post'];
                $kasan1 = $_GET['kakaku1']*$_GET['post1'];
                $kasan2 = $_GET['kakaku2']*$_GET['post2'];
                $kasan3 = $_GET['kakaku3']*$_GET['post3'];
                $kasan4 = $_GET['kakaku4']*$_GET['post4'];

                $kasan5 =$kasan+($kasan*($_GET['zeiritu']*0.01));
                $kasan6 =$kasan1+($kasan1*($_GET['zeiritu1']*0.01));
                $kasan7 =$kasan2+($kasan2*($_GET['zeiritu2']*0.01));
                $kasan8 =$kasan3+($kasan3*($_GET['zeiritu3']*0.01));
                $kasan9 =$kasan4+($kasan4*($_GET['zeiritu4']*0.01));
            ?>
        <table border="1" >
            <tr>
                <th colspan="1">商品名</th>
                <th colspan="1">価格</th>
                <th colspan="1">個数</th>
                <th colspan="1">税率</th>
                <th colspan="1">小計</th>
            </tr>
            <tr>
                <td><?php echo $_GET['syouhin'] ;?></td>
                <td><?php echo $_GET['kakaku'] ;?>円</td>
                <td><?php echo $_GET['post'];?>個</td>
                <td><?php echo $_GET['zeiritu'];?>%</td>
                <td><?php echo $kasan5 ;?>円</td>
            </tr>
            <tr>
                <td><?php echo $_GET['syouhin1'];?></td>
                <td><?php echo $_GET['kakaku1'] ;?>円</td>
                <td><?php echo $_GET['post1'];?>個</td>
                <td><?php echo $_GET['zeiritu1'];?>%</td>
                <td><?php echo $kasan6;?>円</td>
            </tr>
            <tr>
                <td><?php echo $_GET['syouhin2'];?></td>
                <td><?php echo $_GET['kakaku2'] ;?>円</td>
                <td><?php echo $_GET['post2'];?>個</td>
                <td><?php echo $_GET['zeiritu2'];?>%</td>
                <td><?php echo$kasan7 ;?>円</td>
            </tr>
            <tr>
                <td><?php echo $_GET['syouhin3'];?></td>
                <td><?php echo $_GET['kakaku3'] ;?>円</td>
                <td><?php echo $_GET['post3'];?>個</td>
                <td><?php echo $_GET['zeiritu3'];?>%</td>
                <td><?php echo $kasan8;?>円</td>
            </tr>
            <tr>
                <td><?php echo $_GET['syouhin4'];?></td>
                <td><?php echo $_GET['kakaku4'] ;?>円</td>
                <td><?php echo $_GET['post4'];?>個</td>
                <td><?php echo $_GET['zeiritu4'];?>%</td>
                <td><?php echo $kasan9;?>円</td>
            </tr>
            <tr>
                <td colspan="4" style="text-align:left;">合計
                <td colspan="1" style="text-align:right;"><?php echo $kasan10 =$kasan5+$kasan6+$kasan7+$kasan8+$kasan9;?>円</td>
            </tr>
        </table>
        </form>
    </body>
</html>
