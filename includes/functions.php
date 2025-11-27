<?php

function zkratText($text, $pocetSlov = 20) {
    $slova = preg_split('/\s+/', trim($text));
    if (count($slova) > $pocetSlov) {
        $slova = array_slice($slova, 0, $pocetSlov);
        return implode(' ', $slova) . '...';
    }
    return $text;
}

function najdiPrispevek($posts, $id) {
    $id = (int) $id;
    foreach ($posts as $post) {
        if ((int)$post['id'] === $id) {
            return $post;
        }
    }
    return null;
}

function zobrazFormular($data) {
    $jmeno  = htmlspecialchars($data['jmeno'] ?? '', ENT_QUOTES, 'UTF-8');
    $email  = htmlspecialchars($data['email'] ?? '', ENT_QUOTES, 'UTF-8');
    $zprava = nl2br(htmlspecialchars($data['zprava'] ?? '', ENT_QUOTES, 'UTF-8'));

    echo '<div class="alert alert-success">';
    echo '<h4>Zpráva byla odeslána!</h4>';
    echo '<p><strong>Jméno:</strong> ' . $jmeno . '</p>';
    echo '<p><strong>Email:</strong> ' . $email . '</p>';
    echo '<p><strong>Zpráva:</strong> ' . $zprava . '</p>';
    echo '</div>';
}

/**
 * Uloží nový příspěvek do souboru posts.php (POPRAVCE).
 * Vrací nové id (int) nebo false při chybě.
 */
function ulozPrispevek($nazev, $autor, $obsah) {
    $soubor = 'posts.php';
    $obsah_souboru = file_get_contents($soubor);

    $posledni_id = 0;
    if (preg_match_all("/'id' => (\d+)/", $obsah_souboru, $matches)) {
        $posledni_id = max($matches[1]);
    }
    $nove_id = $posledni_id + 1;

    $novy_prispevek = "    [\n";
    $novy_prispevek .= "        'id' => $nove_id,\n";
    $novy_prispevek .= "        'nazev' => '" . addslashes($nazev) . "',\n";
    $novy_prispevek .= "        'autor' => '" . addslashes($autor) . "',\n";
    $novy_prispevek .= "        'obsah' => '" . addslashes($obsah) . "'\n";
    $novy_prispevek .= "    ],\n";

    $obsah_souboru = preg_replace(
        '/\];\s*$/',
        $novy_prispevek . "];",
        $obsah_souboru
    );

    file_put_contents($soubor, $obsah_souboru);

    return $nove_id;
}
