<?php
    $nums = [];
    if (isset($_POST['submit'])) {
        $nums = [$_POST['nums']];
        if (!empty($_POST['sort'])) {
            var_dump(1);
            if ($_POST['sort'] == 'desc') {
                rsort($nums);
            } else {
                sort($nums);
            }
        }
    }
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
            var_dump($_GET);
            var_dump($_POST);
            var_dump($nums);
        ?>
    </pre>
    <form action="./task1.php" method="post">
        <input type="number" placeholder="num1" name="nums[]"><br>
        <input type="number" placeholder="num2" name="nums[]"><br>
        <input type="number" placeholder="num3" name="nums[]"><br>
        <select name="sort" id="">
            <option selected value="">Not</option>
            <option value="asc">Up</option>
            <option value="desc">Down</option>
        </select><br>
        <button type="submit" name="submit">Gett</button>
    </form>
</body>
</html>
