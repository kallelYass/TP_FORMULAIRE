<?php
// Informations de l'étudiant
$nom         = "Kallel Ahmed Yassine";    // string : nom complet
$age         = 22;                        // int : âge
$filiere     = "Ingenierie Informatique"; // string : filière
$moyenne     = 15.5;                      // float : moyenne
$estBoursier = true;                      // bool : boursier ou non
$anneeEtude  = 2;                         // int : année d'étude
$email       = "ahmedyassine.kallel@sesame.com.tn"; // string : adresse email


// Résultat
if ($moyenne >= 10) {
    $resultat     = "Admis";
    $classeResult = "admis";
} else {
    $resultat     = "Non admis";
    $classeResult = "refus";
}

// Filière
switch ($filiere) {
    case "Ingenierie Informatique":
        $labelFiliere = "Informatique";
        $classeBadge  = "badge-info";
        break;
    case "Electronique":
        $labelFiliere = "Électronique";
        $classeBadge  = "badge-Electronique";
        break;
    default:
        $labelFiliere = "Filière inconnue";
        $classeBadge  = "badge-default";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Fiche étudiant</title>
    <link rel="stylesheet" href="mon-style.css">
</head>
<body>
<div class="fiche">
    <h3><?= htmlspecialchars($nom) ?></h3>
    <span class="badge <?= $classeBadge ?>"><?= htmlspecialchars($labelFiliere) ?></span>
    <div class="infos">
        <span><?= $age ?> ans</span>
        <span><?= $anneeEtude ?><sup><?= $anneeEtude == 1 ? "re" : "e" ?></sup> année</span>
        <span><?= htmlspecialchars($email) ?></span>
    </div>
    <p class="<?= $classeResult ?>"><?= $resultat ?> (<?= $moyenne ?>/20)</p>
    <?php if ($estBoursier): ?>
        <p>Étudiant boursier</p>
    <?php endif; ?>
</div>
</body>
</html>
