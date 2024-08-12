<?php
$name=$_POST['employee_name'];
$age=$_POST['employee_age'];
$blong=$_POST['department'];
?>
<DOCTYPE html>
<html lang="ja">
    <body>
        <h1>入力内容をご確認ください。</h1>
        <br>
        <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>
        <table border="1">
            <thead>
                <tr><th>項目</th><th>入力内容</th></tr>
            </thead>
            <tbody>
            <tr><td>社員名</td><td><?php echo $name; ?></td></tr>
            <tr><td>年齢</td><td><?php echo $age; ?></td></tr>
            <tr><td>所属部署</td><td><?php echo $blong;?></td></tr>
            </tbody>  
        </table>
        <br>
        <button onclick="window.location.href='complete.php';">確定</button>
        <button onclick="window.location.href='form.php';">キャンセル</button>
    </body>
</html>