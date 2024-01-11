<?php

$message_de_remerciement = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = isset($_POST["prenom"]) ? $_POST["prenom"] : "";
    $nom = isset($_POST["nom"]) ? $_POST["nom"] : "";
    $adresse_mail = isset($_POST["adresse_mail"]) ? $_POST["adresse_mail"] : "";
    $adresse = isset($_POST["adresse"]) ? $_POST["adresse"] : "";
    $numero_telephone = isset($_POST["numero_telephone"]) ? $_POST["numero_telephone"] : "";

    error_log("Prénom : " . $prenom);
    error_log("Nom : " . $nom);
    error_log("Adresse e-mail : " . $adresse_mail);
    error_log("Adresse : " . $adresse);
    error_log("Numéro de téléphone : " . $numero_telephone);

    $message_de_remerciement = "Merci, $prenom $nom, pour avoir partagé vos informations. La ville vous remercie de votre participation.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de Participation</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        form, .message-remerciement {
            text-align: center;
            max-width: 400px;
            width: 100%;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .message-remerciement h2 {
            color: #4caf50;
        }
    </style>
</head>
<body>

    <?php if ($message_de_remerciement): ?>
        <div class="message-remerciement">
            <h2>Merci pour votre Participation !</h2>
            <p><?php echo $message_de_remerciement; ?></p>
        </div>
    <?php else: ?>
        <form method="post" action="">
            <h2>Demande de Participation à un Événement Communautaire de la Ville</h2>
            <p>Nous collectons ces informations pour traiter votre demande de participation à des événements communautaires organisées prochainement dans la ville.</p>
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" required>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" required>
            <label for="adresse_mail">Adresse e-mail :</label>
            <input type="email" name="adresse_mail" id="adresse_mail" required>
            <label for="adresse">Adresse :</label>
            <input type="text" name="adresse" id="adresse" required>
            <label for="numero_telephone">Numéro de téléphone :</label>
            <input type="tel" name="numero_telephone" id="numero_telephone" required>
            <button type="submit">Valider</button>
        </form>
    <?php endif; ?>

</body>
</html>