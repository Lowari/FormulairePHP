<?php

$errorMessages = [];
$success = [];

$reggexText = "/^[a-zA-ZÀ-ÿ]+$/";
$reggexBirthday = "/^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$/";
$reggexAdress = "/^([0-9a-z'àâéèêôùûçÀÂÉÈÔÙÛÇ\s-]{1,50})$/";
$reggexPhone = "/^[0-9]{10}$/";
$reggexPoleEmploi = "/^[a-zA-Z0-9]{8,12}$/";
$reggexNumber = "/^[0-9]{1,3}$/";
$reggexQuestion = "/^[a-zA-ZÀ-ÿ][a-zA-ZÀ-ÿ 0-9 \n\?\!\,\'\.\'_-]{1,200}$/";

$certificationArray = [
    1 => "Sans diplôme",
    2 => "Bac",
    3 => "Bac+2",
    4 => "Bac+3 ou supérieure"
];

$showForm = true;

if (isset($_POST['submit'])) {

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        if (!preg_match($reggexText, $name)) {
            $errorMessages['name'] = "Saisir un nom de valide";
        }
        if (empty($name)) {
            $errorMessages['name'] = "Veuillez remplir votre nom";
        }
        if (!empty($name) && preg_match($reggexText, $name)) {
            $success['name'] = $_POST['name'];
        }
    }

    if (isset($_POST['lastname'])) {
        $lastname = $_POST['lastname'];
        if (!preg_match($reggexText, $lastname)) {
            $errorMessages['lastname'] = "Saisir un prénom valide";
        }
        if (empty($lastname)) {
            $errorMessages['lastname'] = "Veuillez remplir votre prénom";
        }
        if (!empty($lastname) && preg_match($reggexText, $lastname)) {
            $success['lastname'] = $_POST['lastname'];
        }
    }

    if (isset($_POST['birthday'])) {
        $birthday = $_POST['birthday'];
        if (!preg_match($reggexBirthday, $birthday)) {
            $errorMessages['birthday'] = "Saisir une date de naissance valide";
        }
        if (empty($birthday)) {
            $errorMessages['birthday'] = "Veuillez remplir votre date de naissance";
        }
        if (!empty($birthday) && preg_match($reggexBirthday, $birthday)) {
            $success['birthday'] = $_POST['birthday'];
        }
    }

    if (isset($_POST['contry'])) {
        $contry = $_POST['contry'];
        if (!preg_match($reggexText, $contry)) {
            $errorMessages['contry'] = "Saisir un pays de naissance valide";
        }
        if (empty($contry)) {
            $errorMessages['contry'] = "Veuillez saisir un pays de naissance";
        }
        if (!empty($contry) && preg_match($reggexText, $contry)) {
            $success['contry'] = $_POST['contry'];
        }
    }

    if (isset($_POST['nationality'])) {
        $nationality = $_POST['nationality'];
        if (!preg_match($reggexText, $nationality)) {
            $errorMessages['nationality'] = "Saisir une nationalité valide";
        }
        if (empty($nationality)) {
            $errorMessages['nationality'] = "Veuillez saisir une nationalité";
        }
        if (!empty($nationality) && preg_match($reggexText, $nationality)) {
            $success['nationality'] = $_POST['nationality'];
        }
    }

    if (isset($_POST['adress'])) {
        $adress = $_POST['adress'];
        if (!preg_match($reggexAdress, $adress)) {
            $errorMessages['adress'] = "Saisir une adresse valide";
        }
        if (empty($adress)) {
            $errorMessages['adress'] = "Veuillez saisir une adresse";
        }
        if (!empty($adress) && preg_match($reggexAdress, $adress)) {
            $success['adress'] = $_POST['adress'];
        }
    }

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorMessages['email'] = "Saisir un mail valide";
        }
        if (empty($email)) {
            $errorMessages['email'] = "Veuillez saisir un email";
        }
        if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $success['email'] = $_POST['email'];
        }
    }

    if (isset($_POST['phone'])) {
        $phone = $_POST['phone'];
        if (!preg_match($reggexPhone, $phone)) {
            $errorMessages['phone'] = "Saisir un numéro de téléphone valide";
        }
        if (empty($phone)) {
            $errorMessages['phone'] = "Veuillez saisir un numéro de téléphone";
        }
        if (!empty($phone) && preg_match($reggexPhone, $phone)) {
            $success['phone'] = $_POST['phone'];
        }
    }

    if (!isset($_POST['certification'])) {
        $errorMessages['certification'] = "Saisir un choix dans la liste";
    }

    if (isset($_POST['certification'])) {
        if (!array_key_exists($_POST['certification'], $certificationArray)) {
            $errorMessages['certification'] = "Veuillez séléctionner un choix dans la liste";
        } else {
            $success['certification'] = $_POST['certification'];
        }
    }

    if (isset($_POST['poleEmploi'])) {
        $poleEmploi = $_POST['poleEmploi'];
        if (!preg_match($reggexPoleEmploi, $poleEmploi)) {
            $errorMessages['poleEmploi'] = "Saisir un numéro pole emploi valide";
        }
        if (empty($poleEmploi)) {
            $errorMessages['poleEmploi'] = "Veuillez saisir un numéro pole emploi";
        }
        if (!empty($poleEmploi) &  preg_match($reggexPoleEmploi, $poleEmploi)) {
            $success['poleEmploi'] = $_POST['poleEmploi'];
        }
    }

    if (isset($_POST['badge'])) {
        $badge = $_POST['badge'];
        if (!preg_match($reggexNumber, $badge)) {
            $errorMessages['badge'] = "Saisir une nombre de badge valide";
        }
        if (empty($badge)) {
            $errorMessages['badge'] = "Veuillez saisir un nombre de badge";
        }
        if (!empty($badge) && preg_match($reggexNumber, $badge)) {
            $success['badge'] = $_POST['badge'];
        }
    }

    if (isset($_POST['link'])) {
        $codecademy = $_POST['link'];
        if (!filter_var($codecademy, FILTER_VALIDATE_URL)) {
            $errorMessages['link'] = "Saisir un lien valide";
        }
        if (empty($codecademy)) {
            $errorMessages['link'] = "Veuillez saisir un lien";
        }
        if (!empty($codecademy) && filter_var($codecademy, FILTER_VALIDATE_URL)) {
            $success['link'] = $_POST['link'];
        }
    }

    if (isset($_POST['heroQuestion'])) {
        $heroQuestion = $_POST['heroQuestion'];
        if (!preg_match($reggexQuestion, $heroQuestion)) {
            $errorMessages['heroQuestion'] = "Saisir correctement le texte";
        }
        if (empty($heroQuestion)) {
            $errorMessages['heroQuestion'] = "Veuillez remplir le champ";
        } else {
            $success['heroQuestion'] = $_POST['heroQuestion'];
        }
    }

    if (isset($_POST['hackQuestion'])) {
        $hackQuestion = $_POST['hackQuestion'];
        if (!preg_match($reggexQuestion, $hackQuestion)) {
            $errorMessages['hackQuestion'] = "Saisir correctement le texte";
        }
        if (empty($hackQuestion)) {
            $errorMessages['hackQuestion'] = "Veuillez remplir le texte";
        } else {
            $success['hackQuestion'] = $_POST['hackQuestion'];
        }
    }

    if (!isset($_POST['informaticQuestion'])) {
        $errorMessages["informaticQuestion"] = "Veuillez faire un choix";
    } else {
        $success['informaticQuestion'] = $_POST['informaticQuestion'];
    }

    if (count($errorMessages) == 0) {
        $nom = htmlspecialchars($_POST['name']);
        $showForm = false;
    }
}
