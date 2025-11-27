<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nazev = $_POST['nazev'];
    $autor = $_POST['autor'];
    $obsah = $_POST['obsah'];


    $nove_id = ulozPrispevek($nazev, $autor, $obsah);

    // Zobrazení úspěšné zprávy
    echo '<div class="alert alert-success">';
    echo '<h4>Příspěvek byl úspěšně přidán!</h4>';
    echo '<p><strong>Název:</strong> ' . htmlspecialchars($nazev) . '</p>';
    echo '<p><strong>Autor:</strong> ' . htmlspecialchars($autor) . '</p>';
    echo '</div>';

    echo '<a href="index.php" class="btn btn-primary me-2">Zpět na hlavní stránku</a>';
    echo '<a href="index.php?stranka=detail&id=' . $nove_id . '" class="btn btn-success">Zobrazit příspěvek</a>';

} else {
    ?>
    <h1>Přidat nový příspěvek</h1>
    <p>Vyplňte formulář pro přidání nového článku na blog</p>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="index.php?stranka=pridat">
                        <div class="mb-3">
                            <label class="form-label">Název příspěvku:</label>
                            <input type="text"
                                   name="nazev"
                                   class="form-control"
                                   placeholder="Např. Moje cesta do světa programování"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jméno autora:</label>
                            <input type="text"
                                   name="autor"
                                   class="form-control"
                                   placeholder="Vaše jméno"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Obsah příspěvku:</label>
                            <textarea name="obsah"
                                      class="form-control"
                                      rows="10"
                                      placeholder="Napište zde váš článek..."
                                      required></textarea>
                            <small class="text-muted">Tip: Čím delší text, tím lepší!</small>
                        </div>

                        <button type="submit" class="btn btn-success btn-lg">
                            Přidat příspěvek
                        </button>
                        <a href="index.php" class="btn btn-secondary btn-lg">Zrušit</a>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="alert alert-info">
                <h5>Tip</h5>
                <p>Pište zajímavé a užitečné články, které pomůžou ostatním!</p>
            </div>

            <div class="card">
                <div class="card-body">
                    <h6>Co můžete psát:</h6>
                    <ul>
                        <li>Návody a tutoriály</li>
                        <li>Své zkušenosti</li>
                        <li>Tipy a triky</li>
                        <li>Recenze</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
