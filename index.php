<?php

require_once "controller_index.php";

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>TP Formulaire</title>
</head>

<body>
    <?php if ($showForm) { ?>

        <h1 class="text-center display-5">Formulaire d'inscription LA MANU</h1>

        <form action="index.php" method="POST">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-4 d-flex align-items-center">
                                <label for="firstname" class="form-label fw-bold <?= isset($success['name']) ? "text-success" : "" ?><?= isset($errorMessages['name']) ? "text-danger" : "" ?>">Nom :</label>
                            </div>
                            <div class="col">
                                <input type="text" name="name" id="firstname" class="form-control <?= isset($success['name']) ? "text-success" : "" ?>" placeholder="ex : Dupont" value="<?= isset($_POST['name']) ? htmlspecialchars($_POST['name']) : htmlspecialchars("") ?>">
                            </div>
                            <div class="text-danger text-end fst-italic">
                                <span><?= isset($errorMessages['name']) ? $errorMessages['name'] : "" ?></span>
                            </div>
                        </div>

                    </div>

                    <div class="col-6 text-center">
                        <div class="row">
                            <div class="col-4 d-flex align-items-center">
                                <label for="lastname" class="form-label fw-bold <?= isset($errorMessages['lastname']) ? "text-danger" : "" ?> <?= isset($success['lastname']) ? "text-success" : "" ?>">Prénom :</label>
                            </div>
                            <div class="col">
                                <input type="text" name="lastname" id="lastname" class="form-control <?= isset($success['lastname']) ? "text-success" : "" ?>" placeholder="ex : Jean" value="<?= isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : htmlspecialchars(""); ?>">
                            </div>
                        </div>
                        <div class="text-danger text-end fst-italic">
                            <span><?= isset($errorMessages['lastname']) ? $errorMessages['lastname'] : ""  ?></span>
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-6 text-center">
                        <div class="row">
                            <div class="col-4 d-flex align-items-center">
                                <label for="birthday" class="form-label fw-bold <?= isset($errorMessages['birthday']) ? "text-danger" : "" ?><?= isset($success['birthday']) ? "text-success" : "" ?>">Date de naissance :</label>
                            </div>
                            <div class="col">
                                <input type="date" name="birthday" id="birthday" class="form-control <?= isset($success['birthday']) ? "text-success" : "" ?>" value="<?= isset($_POST['birthday']) ? htmlspecialchars($_POST['birthday']) : htmlspecialchars("") ?>">
                            </div>
                        </div>
                        <div class="text-danger text-end fst-italic">
                            <span><?= isset($errorMessages['birthday']) ? $errorMessages['birthday'] : "" ?></span>
                        </div>
                    </div>

                    <div class="col-6 text-center">
                        <div class="row">
                            <div class="col-4 d-flex align-items-center">
                                <label for="contry" class="form-label fw-bold <?= isset($errorMessages['contry']) ? "text-danger" : "" ?><?= isset($success['contry']) ? "text-success" : "" ?>">Pays de naissance :</label>
                            </div>
                            <div class="col">
                                <input type="text" name="contry" id="contry" class="form-control <?= isset($success['contry']) ? "text-success" : "" ?>" placeholder="ex : France" value="<?= isset($_POST['contry']) ? htmlspecialchars($_POST['contry']) : htmlspecialchars("") ?>">
                            </div>
                        </div>
                        <div class="text-danger text-end fst-italic">
                            <span><?= isset($errorMessages['contry']) ? $errorMessages['contry'] : "" ?></span>
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-6 text-center">
                        <div class="row">
                            <div class="col-4 d-flex align-items-center">
                                <label for="nationality" class="form-label fw-bold <?= isset($errorMessages['nationality']) ? "text-danger" : "" ?> <?= isset($success['nationality']) ? "text-success" : "" ?>">Nationalité :</label>
                            </div>
                            <div class="col">
                                <input type="text" name="nationality" id="nationality" class="form-control" placeholder="ex : France" value="<?= isset($_POST['nationality']) ? htmlspecialchars($_POST['nationality']) : htmlspecialchars("") ?>">
                            </div>
                        </div>
                        <div class="text-danger text-end fst-italic">
                            <span><?= isset($errorMessages['nationality']) ? $errorMessages['nationality'] : "" ?></span>
                        </div>
                    </div>

                    <div class="col-6 text-center">
                        <div class="row">
                            <div class="col-4 d-flex align-items-center">
                                <label for="adress" class="form-label fw-bold <?= isset($errorMessages['adress']) ? "text-danger" : "" ?> <?= isset($success['adress']) ? "text-success" : "" ?>">Adresse :</label>
                            </div>
                            <div class="col">
                                <input type="text" name="adress" id="adress" class="form-control <?= isset($success['adress']) ? "text-success" : "" ?>" placeholder="ex : 2 rue victor hugo 12000 Paris" value="<?= isset($_POST['adress']) ? htmlspecialchars($_POST['adress']) : htmlspecialchars("") ?>">
                            </div>
                        </div>
                        <div class="text-danger text-end fst-italic">
                            <span><?= isset($errorMessages['adress']) ? $errorMessages['adress'] : "" ?></span>
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-6 text-center">
                        <div class="row">
                            <div class="col-4 d-flex align-items-center">
                                <label for="email" class="form-label fw-bold <?= isset($errorMessages['adress']) ? "text-danger" : "" ?> <?= isset($success['adress']) ? "text-success" : "" ?> <?= isset($success['email']) ? "text-success" : "" ?>">E-mail :</label>
                            </div>
                            <div class="col">
                                <input type="mail" name="email" id="email" class="form-control <?= isset($success['email']) ? "text-success" : "" ?>" placeholder="ex : jean@gmail.com" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : htmlspecialchars("") ?>">
                            </div>
                        </div>
                        <div class="text-danger text-end fst-italic">
                            <span><?= isset($errorMessages['email']) ? $errorMessages['email'] : "" ?></span>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="row">
                            <div class="col-4 align-items-center">
                                <label for="phone" class="form-label fw-bold <?= isset($errorMessages['phone']) ? "text-danger" : "" ?> <?= isset($success['phone']) ? "text-success" : "" ?>">Téléphone :</label>
                            </div>
                            <div class="col">
                                <input type="text" name="phone" id="phone" class="form-control <?= isset($success['phone']) ? "text-success" : "" ?>" placeholder="ex : 0600124552" value="<?= isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : htmlspecialchars("") ?>">
                            </div>
                        </div>
                        <div class="text-danger text-end fst-italic">
                            <span><?= isset($errorMessages['phone']) ? $errorMessages['phone'] : "" ?></span>
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-6 text-center">
                        <div class="row">
                            <div class="col-4 d-flex align-items-center">
                                <label for="certification" class="form-label fw-bold <?= isset($errorMessages['certification']) ? "text-danger" : "" ?> <?= isset($success['certification']) ? "text-success" : "" ?>">Diplôme :</label>
                            </div>
                            <div class="col">
                                <select name="certification" id="certification" class="form-control">">
                                    <option selected disabled>Séléctionnez votre niveau d'étude</option>
                                    <?php
                                    foreach ($certificationArray as $key => $value) { ?>
                                        <option value="<?= $key ?>" <?= isset($_POST['certification']) && $_POST['certification'] == $key ? "selected" : "" ?>><?= $value ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="text-danger text-end fst-italic">
                            <span><?= isset($errorMessages['certification']) ? $errorMessages['certification'] : "" ?></span>
                        </div>
                    </div>

                    <div class="col-6 text-center">
                        <div class="row">
                            <div class="col-4 d-flex align-items-center">
                                <label for="poleEmploi" class="form-label fw-bold <?= isset($errorMessages['poleEmploi']) ? "text-danger" : "" ?> <?= isset($success['poleEmploi']) ? "text-success" : "" ?>">Numéro pole emploi :</label>
                            </div>
                            <div class="col">
                                <input type="text" name="poleEmploi" id="poleEmploi" class="form-control <?= isset($success['poleEmploi']) ? "text-success" : "" ?>" placeholder="ex : 3778547K41" value="<?= isset($_POST['poleEmploi']) ? htmlspecialchars($_POST['poleEmploi']) : htmlspecialchars("") ?>">
                            </div>
                        </div>
                        <div class="text-danger text-end fst-italic">
                            <span><?= isset($errorMessages['poleEmploi']) ? $errorMessages['poleEmploi'] : "" ?></span>
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-4 d-flex align-items-center">
                                <label for="badge" class="form-label fw-bold <?= isset($errorMessages['badge']) ? "text-danger" : "" ?> <?= isset($success['badge']) ? "text-success" : "" ?>">Nombre de badge :</label>
                            </div>
                            <div class="col">
                                <input type="number" name="badge" id="badge" class="form-control <?= isset($success['badge']) ? "text-success" : "" ?>" placeholder="ex : 5" value="<?= isset($_POST['badge']) ? htmlspecialchars($_POST['badge']) : htmlspecialchars("") ?>">
                            </div>
                        </div>
                        <div class="text-danger text-end fst-italic">
                            <span><?= isset($errorMessages['badge']) ? $errorMessages['badge'] : "" ?></span>
                        </div>
                    </div>

                    <div class="col-6 text-center">
                        <div class="row">
                            <div class="col-4 d-flex align-items-center">
                                <label for="codecademyLink" class="form-label fw-bold <?= isset($errorMessages['link']) ? "text-danger" : "" ?> <?= isset($success['link']) ? "text-success" : "" ?>">Lien codecademy :</label>
                            </div>
                            <div class="col">
                                <input type="link" name="link" id="codecademyLink" class="form-control <?= isset($success['link']) ? "text-success" : "" ?>" placeholder="ex : https://www.codecademy.com/" value="<?= isset($_POST['link']) ? htmlspecialchars($_POST['link']) : htmlspecialchars("") ?>">
                            </div>
                        </div>
                        <div class="text-danger text-end fst-italic">
                            <span><?= isset($errorMessages['link']) ? $errorMessages['link'] : "" ?></span>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-2 text-center mt-3">
                    <label for="heroQuestion" class="form-label fw-bold <?= isset($errorMessages['heroQuestion']) ? "text-danger" : "" ?> <?= isset($success['heroQuestion']) ? "text-success" : "" ?>" value="">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label>
                    <textarea name="heroQuestion" id="heroQuestion" class="form-control <?= isset($success['heroQuestion']) ? "text-success" : "" ?>" rows="4" placeholder="200 caractères maximum"><?= isset($_POST['heroQuestion']) ? htmlspecialchars($_POST['heroQuestion']) : htmlspecialchars("") ?></textarea>
                    <div class="text-danger text-center fst-italic">
                        <span><?= isset($errorMessages['heroQuestion']) ? $errorMessages['heroQuestion'] : "" ?></span>
                    </div>
                </div>

                <div class="text-center mt-2 text-center mt-3">
                    <label for="hackQuestion" class="form-label fw-bold <?= isset($errorMessages['hackQuestion']) ? "text-danger" : "" ?> <?= isset($success['hackQuestion']) ? "text-success" : "" ?>">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                    <textarea name="hackQuestion" id="hackQuestion" class="form-control <?= isset($success['hackQuestion']) ? "text-success" : "" ?>" rows="4" placeholder="200 caractères maximum"><?= isset($_POST['hackQuestion']) ?  htmlspecialchars($_POST['hackQuestion']) : htmlspecialchars("") ?></textarea>
                    <div class="text-danger text-center fst-italic">
                        <span><?= isset($errorMessages['hackQuestion']) ? $errorMessages['hackQuestion'] : "" ?></span>
                    </div>
                </div>

                <div class="mt-3">
                    <label for="informaticQuestion" class="form-label fw-bold <?= isset($errorMessages['informaticQuestion']) ? "text-danger" : "" ?> <?= isset($success['informaticQuestion']) ? "text-success" : "" ?>">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                    <input type="radio" name="informaticQuestion" id="informaticQuestion" class="informaticQuestion" value="oui" <?= isset($_POST['informaticQuestion']) && $_POST['informaticQuestion'] == "oui" ? "checked" : "" ?>>Oui
                    <input type="radio" name="informaticQuestion" id="informaticQuestion" class="informaticQuestion" value="non" <?= isset($_POST['informaticQuestion']) && $_POST['informaticQuestion'] == "non" ? "checked" : "" ?>>Non
                    <div class="text-danger text-center fst-italic">
                        <span><?= isset($errorMessages['informaticQuestion']) ? $errorMessages['informaticQuestion'] : "" ?></span>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-success" name="submit">Valider</button>
                </div>

            </div>
        </form>

    <?php } else { ?>

        <p>Nom : <?= htmlspecialchars($success['name']) ?></p>

    <?php } ?>

</body>

</html>