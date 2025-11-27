<?php
function shortText($text, $pocetSlov = 20) {
    $slova = explode(' ', $text);

    if (count($slova) > $pocetSlov) {
        $slova = array_slice($slova, 0, $pocetSlov);
        return implode(' ', $slova) . '...';
    }

    return $text;
}

function showForm($data) {
    echo '<div class="alert alert-success">';
    echo '<h4>Zpráva byla odeslána!</h4>';
    echo '<p><strong>Jméno:</strong> ' . htmlspecialchars($data['jmeno']) . '</p>';
    echo '<p><strong>Email:</strong> ' . htmlspecialchars($data['email']) . '</p>';
    echo '<p><strong>Zpráva:</strong> ' . nl2br(htmlspecialchars($data['zprava'])) . '</p>';
    echo '</div>';
}

function findForm($posts, $id) {
    foreach ($posts as $post) {
        if ($post['id'] == $id) {
            return $post;
        }
    }
    return null;
}