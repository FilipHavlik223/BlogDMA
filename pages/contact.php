<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $formData = [
        'jmeno' => $_POST['jmeno'],
        'email' => $_POST['email'],
        'zprava' => $_POST['zprava']
    ];

    showForm($formData);

    echo '<a href="index.php?stranka=kontakt" class="btn btn-primary">Napsat novou zprávu</a>';

} else {
    ?>
    <h1>Kontaktní formulář</h1>
    <p>Máte dotaz? Napište nám!</p>

    <div class="row">
        <div class="col-md-6">
            <form method="POST" action="index.php?stranka=kontakt">
                <div class="mb-3">
                    <label class="form-label">Vaše jméno:</label>
                    <input type="text" name="jmeno" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Váš email:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Vaše zpráva:</label>
                    <textarea name="zprava" class="form-control" rows="5" required></textarea>
                </div>

                <button type="submit" class="btn btn-success">Odeslat zprávu</button>
            </form>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5>Kontaktní informace</h5>
                    <p><strong>Email:</strong> info@mujblog.cz</p>
                    <p><strong>Telefon:</strong> +420 123 456 789</p>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
