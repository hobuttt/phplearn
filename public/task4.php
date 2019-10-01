<?php
    require(__DIR__.'/variables.php');
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Заголовок</title>
        <style type="text/css">.red {color: red;}</style>
    </head>
    <body>
        <h1 class="<?php if ($red === true) {echo 'red';} ?>"><?= $title; ?></h1>
        <div>Авторов на портале <?= count($authors); ?></div>
        <!-- Выведите все книги -->
         <?php
             for($i = 0; $i < count($books); $i++) {
                 $book = $books[$i]['title'];
                 $email = $books[$i]['authorEmail'];
                 $fullName = $authors[$email]['fio'];
                 $birth = $authors[$email]['birthDate'];
                 echo "<p>Книга $book, ее написал $fullName $birth ($email)</p>";
             }
         ?>
    </body>
</html>
