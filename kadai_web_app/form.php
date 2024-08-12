<!DOCTYPE html>
<html lang="ja">
    <head>

    </head>
    <body>
        <h1>社員情報入力フォーム</h1>
        <form action="comfirm.php" method="post">
            <label for="employee_name">社員名</label>
            <input type="text" name="employee_name" require>
            <br>
            <label for="employee_age">年齢</label>
            <input type="number" name="employee_age" require>
            <br>
            <label for="department">所属部署</label>
            <select name="department" require>
                <option value="開発部">開発部</option>
                <option value="営業部">営業部</option>
                <option value="人事部">人事部</option>
            </select>
            <br>
            <button type="submit">送信</button>
        </form>
    </body>
</html>