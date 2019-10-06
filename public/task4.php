<?php
    require(__DIR__.'/variables.php');
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?= $title; ?></title>
        <style type="text/css">.red {color: red;}</style>
    </head>
    <body>
        <h1 class="<?php echo $red ? 'red' : false ?>"><?= $title; ?></h1>
        <div>Авторов на портале <?= count($authors); ?></div>
        <!-- Выведите все книги -->

        <?php foreach($books as $book):
              $author = $authors[$book['authorEmail']];
        ?>

          <p>
            Книга <?php echo $book['title']?>,
            ее написал <?php echo $author['fio'] ?>
            <?php echo $author['birthDate'] ?>
            (<?php echo $book['authorEmail']?>)
          </p>

        <?php endforeach ?>
    </body>
</html>
