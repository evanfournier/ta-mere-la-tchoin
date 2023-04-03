<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos produits</title>
    <link rel="icon" href="Images/Logo.png">
    <link rel="stylesheet" href="http://127.0.0.1/php/CSS/Main.scss">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body id="body">
    <div id="blur">

        <header class="navbar">
            <ul class="ul">
                <li class="li"><img src="https://cdn-icons-png.flaticon.com/512/8787/8787741.png" alt="" id="cadie_icon"></li>
                <li class="li"><a href="Main.php">Home</a></li>
                <li class="li" id="contacts_button"><a href="mfd">Contacts</a></li>
                <li class="li"><a href="https://www.fiverr.com/evanfournier12" target="_blank">Fiverr</a></li>
                <li class="li"><a  href="CreateOffer.php" class="create_offer">Créer son offre</a></li>
                <li class="li li_hours"><a id="hour"></a></li>

                <?php
                    if (isset($_SESSION["name"])) {
                        echo '<li class="li li_username"><a href="">'.$_SESSION["name"].'</a></li>';
                        //Appliquer le zoom de l'image
                        echo '<li class="li li_pp"><div class="bg" style="z-index: 1; background-color: '.$_SESSION["bg"].'"></div><img src="'.$_SESSION["image"].'" alt="" class="li_pp_img" style="scale: '.($_SESSION['scale'])*0.21.'; z-index: 10"></li>';
                    } else {
                        echo '<li class="li li_connexion"><a href="SignUpAndLogIn.php">Log in</a></li>';
                    };
                ?>
                <div class="options">
                    <button class="account"><a href="Account.php">Account parameters</a></button>
                    <button class="signOut" style="display: flex; justify-content: center; align-items: center; width:100%">Sign out <img src="Images/SignOut.png" alt="" style="height: 20px; width: auto; margin-left: 10px"></button>
                </div>
            </ul>
        </header>


        <section class="description">
            <img src="Images/fleche.png" alt="" class="reduceDescription_img">
            <span id="descrition">Are you a Python, Javascript, CSS or HTML developer? <br><br>
                Our site is made for you. Here, you will find lots of small or large programs that you can use in your projects. <br> <br>
                All of this with small prices !
            </span>
            <div class="links">
                <div id="instagram" class="links_button"><img src="Images/Innstagram.png" alt="Instagram" class="links_img" id="instagram_img"></a></div>
                <div class="accounts_instagram" id="accounts_instagram">
                    <div class="accounts_bg" id="accounts_insta_bg">
                        <div class="link"><a href="https://www.instagram.com/justinconstans/" target="_blank">Justin</a></div>
                        <div class="link"><a href="https://www.instagram.com/_frn.evan_/" target="_blank">Evan</a></div>
                    </div>
                </div>
                <div id="facebook" class="links_button"><img src="Images/Facebook.png" alt="Facebook" class="links_img" id="facebook_img"></a></div>
                <div class="accounts_facebook" id="accounts_facebook">
                    <div class="accounts_bg" id="accounts_facebook_bg">
                        <div class="link"><a href="https://www.facebook.com/" target="_blank">Justin</a></div>
                        <div class="link"><a href="https://www.facebook.com/profile.php?id=100069171361574" target="_blank">Evan</a></div>
                    </div>
                </div>
                <div id="twitter" class="links_button"><img src="Images/Twitter.png" alt="Twitter" class="links_img" id="twitter_img"></a></div>
                <div class="accounts_twitter" id="accounts_twitter">
                    <div class="accounts_bg" id="accounts_twitter_bg">
                        <div class="link"><a href="https://twitter.com/constans_justin" target="_blank">Justin</a></div>
                        <div class="link"><a href="https://twitter.com/Evianpelican" target="_blank">Evan</a></div>
                    </div>
                </div>
                <div id="linkedin" class="links_button"><a href="https://www.linkedin.com/feed/" target="_blank"><img src="Images/Linkedin.png" alt="" class="links_img" id="linkedin_img"></a></div>
            </div>
        </section>

        <!-- search bar -->

        <div class="search">
            <input type="text" class="search__input" placeholder="Search">
            <button class="search__button">
                <svg class="search__icon" aria-hidden="true" viewBox="0 0 24 24">
                    <g>
                        <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path>
                    </g>
                </svg>
            </button>
        </div>

        <!-- filtres -->

        <ul class="filtres">
            <li class="filters">Filtrer
                <ul class="sous">
                    <li>Prix : 
                    <section class="range-slider container">
                        <span class="output outputOne"></span>
                        <span class="output outputTwo"></span>
                        <span class="full-range"></span>
                        <span class="incl-range"></span>
                        <input name="rangeOne" value="0" min="0" max="150" step="1" type="range">
                        <input name="rangeTwo" value="150" min="0" max="150" step="1" type="range">
                    </section>
                    </li>
                    <li>Note : 
                        <div class="rating">
                            <input type="radio" id="star5" name="rating" value="5">
                            <label for="star5" id="star5_label"><i class="fas fa-star"></i></label>
                            <input type="radio" id="star4" name="rating" value="4">
                            <label for="star4" id="star4_label"><i class="fas fa-star"></i></label>
                            <input type="radio" id="star3" name="rating" value="3">
                            <label for="star3" id="star3_label"><i class="fas fa-star"></i></label>
                            <input type="radio" id="star2" name="rating" value="2">
                            <label for="star2" id="star2_label"><i class="fas fa-star"></i></label>
                            <input type="radio" id="star1" name="rating" value="1">
                            <label for="star1" id="star1_label"><i class="fas fa-star"></i></label>
                        </div>
                    </li>
                    </li>
                </ul>
            </li>
            <div class="filtres_sup">
                <div id="filtre1" class="filtre_sup">Prix<input type="checkbox" name="filtre1_delete" id="filtre1_delete" style="display: none">
                    <label for="filtre1_delete" id="h"><img src="Images/croix.png" alt="" class="croix" id="croix1"></label></div>
                <div id="filtre2" class="filtre_sup">Note<input type="checkbox" name="filtre2_delete" id="filtre2_delete" style="display: none">
                    <label for="filtre2_delete" id="h"><img src="Images/croix.png" alt="" class="croix" id="croix2"></label></div>
            </div>

        </div>
        </ul>

        

        <!-- offres -->

        <section class="offer_list">

        
             <?php
                /* WHERE creator = 'Justin Constans' ORDER BY name DESC LIMIT 0,2*/
                $dataBase = new PDO("mysql:host=localhost;dbname=database;charset=utf8", "root", "");
                $request = $dataBase->query("SELECT * FROM offers ORDER BY date DESC");
                while ($offer = $request->fetch()) {
                    echo
                    '<div class="offer" id="'.$offer["name"].'" onclick="openOffer(\''.$offer["name"].'\')" onmouseover="changeImage(\''.$offer["name"].'\')">
                        <div class="img_offer_div"><img src="Images/Form.png" alt="'.$offer["name"].'" class="img_offer"></div>
                        <span class="grade" value="'.$offer["grade"].'"></span>
                        <div class="informations">  
                            <span class="title">'.$offer["name"].'</span>
                            <span class="price">'.(($offer["price"] == 0) ? "Free" : $offer["price"]).'</span><br>
                            <span class="small_description">'.$offer["smallDescription"].'</span>
                        </div>
                    </div>
                    ';
                };
            ?>
        </section>


        <div class="hun">h</div>

       <!-- scroll en haut -->

       <button id="scrollTop">
        <img src="Images/scrollTop.png" alt="" id="scrollTop_img">
    </button>


</body>
<script src="JS/Main.js"></script>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
</html>