<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Profil Utilisateur</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <div class="container">
        <h1>Modifier Profil Utilisateur</h1>
        <form action="modifier_traitement.php" method="post">
            <input type="hidden" name="id_utilisateur" value="<?php echo $_GET['id']; ?>">
            <fieldset>
                <legend>Informations Utilisateur</legend>
                <div class="form-group">
                    <label for="nom">Nom:</label>
                    <input type="text" id="nom" name="nom" value="<?php echo $_GET['nom']; ?>" >
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom:</label>
                    <input type="text" id="prenom" name="prenom" value="<?php echo $_GET['prenom']; ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo $_GET['email']; ?>">
                </div>
                <button type="submit" class="btn">Enregistrer les Modifications</button>
            </fieldset>
        </form>
    </div>
</body>
</html>
