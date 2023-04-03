<?php
    session_start();
    $dataBase = new PDO("mysql:host=127.0.0.1;dbname=database;charset=utf8", "root", "");
	$error = array("name" => "", "email" => "", "password" => "", "passwordConfirmation" => "", "success" => false);
	if (!empty($_POST["name"]) AND !empty($_POST["email"]) AND !empty($_POST["password"]) AND !empty($_POST["passwordConfirmation"])) {
		$request = $dataBase->prepare("SELECT * FROM accounts WHERE _name_ = ?");
		$request->execute(array($_POST["name"]));
		$nameAvailable = !($request->fetch());
		
		$request = $dataBase->prepare("SELECT * FROM accounts WHERE _email_ = ?");
		$request->execute(array($_POST["email"]));
		$emailAvailable = !($request->fetch());

		$samePasswords = $_POST["password"] == $_POST["passwordConfirmation"];

		if ($nameAvailable AND $emailAvailable AND $samePasswords) {
			$letters = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
			$digits = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
			$containsLetters = false;
			$containsDigits = false;
			for ($i = 0; $i < strlen($_POST["password"]); $i++) {
				if (in_array($_POST["password"][$i], $letters)) {
					$containsLetters = true;
				} else if (in_array($_POST["password"][$i], $digits)) {
					$containsDigits = true;
				};
			};
			if ($containsLetters AND $containsDigits) {
				// Vérifier que l'adresse email existe
				$informationArray = array($_POST["name"], $_POST["email"], $_POST["password"], date("Y-m-d H:i:s"), "../Images/Default.png", 0.21, "");
				$request = $dataBase->prepare("INSERT INTO accounts (_name_, _email_, _password_, _date_, _image_, _scale_, _description_) VALUES (?, ?, ?, ?, ?, ?, ?)");
				$request->execute($informationArray);
				$_SESSION["name"] = $informationArray[0];
				$_SESSION["email"] = $informationArray[1];
				$_SESSION["password"] = $informationArray[2];
				$_SESSION["date"] = $informationArray[3];
				$_SESSION["image"] = $informationArray[4];
				$_SESSION["scale"] = $informationArray[6];
				$_SESSION["description"] = $informationArray[7];
                $error["success"] = true;
			} else {
				if (!($containsLetters) AND !($containsDigits)) {
					$error["password"] = "Le mot de passe doit contenir au moins une lettre et un chiffre";
				} elseif (!($containsLetters)) {
					$error["password"] = "Le mot de passe doit contenir au moins une lettre";
				} elseif (!($containsDigits)) {
					$error["password"] = "Le mot de passe doit contenir au moins un chiffre";
				};
			};
			echo json_encode($error);
		} else {
			if (!$nameAvailable) {
                $error["name"] = "Ce nom d'utilisateur est indisponible";
			};
			if (!$emailAvailable) {
                $error["email"] = "Cette adresse email est déjà utilisée";
			};
			if (!$samePasswords) {
                $error["passwordConfirmation"] = "Les deux mots de passe doivent être identique";
			};
            echo json_encode($error);
		};
	} else {
		if (empty($_POST["name"])) {
            $error["name"] = "Nom d'utilisateur vide";
		};
		if (empty($_POST["email"])) {
            $error["email"] = "Email vide";
		};
		if (empty($_POST["password"])) {
            $error["password"] = "Mot de passe vide";
		};
		if (empty($_POST["passwordConfirmation"])) {
            $error["passwordConfirmation"] = "Confirmation du mot de passe vide";
		};
        echo json_encode($error);
	};
?>