<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your account</title>
    <link rel="icon" href="Images/accounts.png">
    <link rel="stylesheet" href="CSS/Account.css">
</head>
<body>

    <!--Main-->

    <section class="all">

    <!--Photo de profil-->
        <?php
        echo '<div class="pp">
            <img src="'.$_SESSION["image"].'" alt="" class="profile_img">
            <div class="circle" style="background: '.$_SESSION['bg'].'"></div>
            <input type="file" name="file" id="file" class="file" accept=".jpg, .jpeg, .png" style="display: none;">
            <input type="color" name="color" id="color" style="display: none;">
            <div class="change_pp_buttons">
                <button class="edit_pp">Changer d\'image</button>
            </div>
            <div class="position_pp">
                <button onclick="file.click()" class="select_pp">Charger une image</button>
                <button onclick="color.click()" class="edit_bg">Changer l\'arriere plan</button>
                <button class="save">Enregistrer</button>
                <button class="back">Annuler</button>
                <div class="preview_img_box"><img src="Images/edition.png" alt="" class="edition"><img src="" alt="" class="preview_img"><div class="circle_edit"></div></div>
                <div class="zoom">
                    <span><pre class="zoom_span">Zoom : </pre></span>
                    <input type="range" class="range_zoom" name="range_zoom" value="1" min="0.10" max="3" step="0.05">
                </div>
            </div>
        </div>

        <!-- Nom d\'utilisateur -->
        
        <div class="infos"><span class="username" id="username" maxLength="15">'.$_SESSION['name'].'</span><input type="checkbox" name="edit_checkbox" id="edit_checkbox_username" class="edit_checkbox"><label for="edit_checkbox_username"><img src="Images/edit.png" alt="" class="edit_img_username"></label></div>
        <label for="username" id="username_label">Nom d\'utilisateur déjà pris !</label>


        <!--partie basse numero 1 -->


        <div class="subpart1">
            <div class="infos"><span class="mail_pre"><pre>Mail : </pre></span><span class="mail">'.$_SESSION['email'].'</span><button class="edit edit_mail"><img src="Images/edit.png" alt="" class="edit_img"></button></div>
            <div class="infos"><span class="phone_number_pre"><pre>Phone number : </pre></span><span class="phone_number">07 72 07 47 83</span><button class="edit"><img src="Images/edit.png" alt="" class="edit_img"></button></div>


            <div class="infos"><span class="password_pre"><pre>Password : </pre></span><span class="password">'.$_SESSION['password'].'</span><button class="edit edit_password"><img src="Images/edit.png" alt="" class="edit_img"></button></div>

            <div class="edit_password_box">
                <h1>Nouveau mot de passe :</h1>
                <input type="password" placeholder="Mdp actuel" class="edit_mdp" id="edit_mdp1">
                <label for="edit_mdp1"></label>
                <input type="password" placeholder="Nouveau mdp" class="edit_mdp" id="edit_mdp2">
                <label for="edit_mdp2">Au moins 8 caracteres, 1 chiffre</label>
                <input type="password" placeholder="Nouveau mdp" class="edit_mdp" id="edit_mdp3">
                <label for="edit_mdp3">Au moins 8 caracteres, 1 chiffre</label>
                <div class="buttons">
                    <button class="save_mdp">Enregistrer</button>
                    <button class="back_mdp">Annuler</button>
                </div>
            </div>'
            ?>


        </div>

        <!--Partie basse numero 2-->

        <div class="subpart2">
            <div class="infos"><span class="age"><pre>Date de naissance : </pre></span><input type="date" class="age" id="age"></div>
            <div class="infos"><span class="biographie"><pre>Biographie : </pre></span><span class="biographie" id="biographie"> Je suis un entrepeneur</span><input type="checkbox" name="edit_checkbox" id="edit_checkbox_biographie" class="edit_checkbox" onclick="onEdition('biographie')"><label for="edit_checkbox_biographie"><img src="Images/edit.png" alt="" class="edit_img edit_img_biographie"></label></div>
        </div>

        <div class="add_settings">
            <button class="save_settings">Enregistrer</button>
            <button class="back_settings">Annuler</button>
        </div>
    </section>

</body>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="JS/Account.js"></script>
</html>