<main>
    <?php
        include_once __DIR__ . '/../database/data.php';

        foreach ($arrDisc as $value) { ?>
            <div>
                <img src="<?= $value['poster'] ?>">
                <h2><?= $value['title'] ?></h2>
                <p><?= $value['author'] ?></p>
                <p><?= $value['year'] ?></p>
            </div><?
        } 
    ?>
</main>