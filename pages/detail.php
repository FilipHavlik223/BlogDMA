<?php
$id = 0;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$prispevek = findForm($posts, $id);

if ($prispevek == null) {
    echo '<div class="alert alert-danger">Příspěvek nebyl nalezen!</div>';
    echo '<a href="index.php" class="btn btn-primary">Zpět na hlavní stránku</a>';
} else {
    // Zobrazení detailu příspěvku
    ?>
    <div class="mb-3">
        <a href="index.php" class="btn btn-secondary">← Zpět na přehled</a>
    </div>

    <div class="card">
        <div class="card-body">
            <h1><?php echo $prispevek['nazev']; ?></h1>
            <p class="text-muted">Autor: <strong><?php echo $prispevek['autor']; ?></strong></p>
            <hr>
            <p style="font-size: 1.1rem; line-height: 1.8;">
                <?php echo $prispevek['obsah']; ?>
            </p>
        </div>
    </div>

    <div class="alert alert-info mt-4">
        <strong>Líbil se vám článek?</strong> Sdílejte ho s přáteli!
    </div>
    <?php
}
?>
