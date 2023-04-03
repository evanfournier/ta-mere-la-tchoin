<?php
    session_start();
    $dataBase = new PDO("mysql:host=localhost;dbname=database;charset=utf8", "root", "");
    $error = array("email" => "", "password" => "", "success" => false);
    if (!empty($_POST["email"]) AND !empty($_POST["password"])) {
        $request = $dataBase->prepare("SELECT * FROM accounts WHERE _email_ = ? AND _password_ = ?");
		$request->execute(array($_POST["email"], $_POST["password"]));
        $user = $request->fetch();
        if ($user) {
            $_SESSION["name"] = $user["_name_"];
            $_SESSION["email"] = $user["_email_"];
            $_SESSION["password"] = $user["_password_"];
            $_SESSION["description"] = $user["_description_"];
            $_SESSION["image"] = $user["_image_"];
            $_SESSION["bg"] = $user["_background_"];
            $_SESSION["date"] = $user["_date_"];
            $_SESSION["scale"] = $user["_scale_"];
            $error["success"] = true;
		} else {
            $error["error"] = "les identifiants sont incorrects";
		};
        echo json_encode($error);
	} else {
		if (empty($_POST["email"])) {
			$error["email"] = "adresse email vide"; 
		};
		if (empty($_POST["password"])) {
            $error["password"] = "mot de passe vide";
		};
        echo json_encode($error);
	};
?>