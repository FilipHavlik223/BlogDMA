<h1>Všechny příspěvky</h1>
<p class="text-muted">Vítejte na mém blogu o programování</p>

<div class="row mt-4">
    <?php foreach ($posts as $post): ?>
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h3><?php echo htmlspecialchars($post['nazev']); ?></h3>
                    <p class="text-muted">Autor: <?php echo htmlspecialchars($post['autor']); ?></p>
                    <p><?php echo shortText($post['obsah'], 15); ?></p>
                    <a href="index.php?stranka=detail&id=<?php echo $post['id']; ?>"
                       class="btn btn-primary">Číst celý článek</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>