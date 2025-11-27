<?php
global $posts;
?>

<h1>Všechny příspěvky</h1>
<p class="text-muted">Vítejte na mém blogu o programování</p>

<div class="row mt-4">
    <?php foreach ($posts as $post): ?>
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h3><?php echo $post['nazev']; ?></h3>
                    <p class="text-muted">Autor: <?php echo $post['autor']; ?></p>
                    <p><?php echo zkratText($post['obsah'], 15); ?></p>
                    <a href="index.php?stranka=detail&id=<?php echo $post['id']; ?>"
                       class="btn btn-primary">Číst celý článek</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>