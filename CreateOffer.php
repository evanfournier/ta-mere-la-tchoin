<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une offre</title>
    <link rel="stylesheet" href="CSS/CreateOffer.css">
</head>
<body>
    <form action="formulaire.php" method="post">
        <input type="text" class="offer_name" name="offer_name" placeholder="Nom de l'offre" required>
        <textarea name="offer_smallDescription" class="offer_smallDescription" cols="30" rows="3" required placeholder="Petite description de l'offre sur la vignette" maxlength="120"></textarea>
        <textarea name="offer_description" class="offer_description" cols="30" rows="10" required placeholder="Description complete de l'offre"></textarea>
        <input type="number" class="offer_price" name="offer_price" required placeholder="Prix de votre offre">
        <input type="date" class="offer_date" name="offer_date" required placeholder="Date de création">
        <input type="text" class="offer_creatorName" name="offer_creatorName" required placeholder="Createur(s)">
        <input type="submit" name="submit">
    </form>
</body>
<script src="JS/CreateOffer.js"></script>
</html>