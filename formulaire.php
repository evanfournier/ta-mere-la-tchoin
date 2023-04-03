<?php
if(isset($_POST['submit'])){
    $json = file_get_contents('JS/essai.json');
    $json_decode = json_decode($json, true);
    $offers = $json_decode['offers'];
    $name = $_POST['offer_name'];
    $smallDescription = $_POST['offer_smallDescription'];
    $description = $_POST['offer_description'];
    $price = $_POST['offer_price'];
    $date = $_POST['offer_date'];
    $creatorName = $_POST['offer_creatorName'];
    $images = $_POST['offer_images'];
    $offre = array(
            "name" => $name,
            "date" => $date,
            "creator"=> $creatorName,
            "description"=> $description,
            "price"=> $price,
            "grade"=> 0,
            "votes"=> 0, 
            "images"=> [],
            "CSSFile"=> "suu.css",
            "JSFile"=> "suu.js",
            "PyFile"=> "suu.py",
            "HTMLFile"=> "suu.html",
    );
    $offers[$name] = $offre;
    $json_decode['offers'] = $offers;
    print_r($json_decode);
    file_put_contents('JS/essai.json', json_encode($json_decode));
}
?>