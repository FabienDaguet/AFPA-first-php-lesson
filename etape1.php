<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etape1</title>
    <link rel="stylesheet" href="style.css">

    <?php include("fonction.php") ?>

</head>
<body>

<?php include("etape1_header.php"); ?>    

<div>Titre</div>    
<div>
    <h1>LIEN</h1>
    <a href="etape1_bis.php">Vers la page 2</a>
</div>

<div>
    <h1>CALCUL</h1>
    <?php afficherMoyennePonderree(8, 14, 15, MATH, HISTOIRE, FRANCAIS) ?>
</div>

<div>
    <h1> FACTO boucle while</h1>
    Facto de 10 est égal à <?= facto(10) ?>
</div>

<div>
    <h1>Boucle FOR + tableau Dynamic exercice</h1>
    pour taille égale 9 <?= multi(9); ?>
</div>

<div>
    <h1>Boucle FOR + tableau static</h1>
    <table class = "tableMulti">
        <tr>
            <th class = "tableMulti--form multiHead multiHead__corner">*</th>
            <th class = "tableMulti--form multiHead multiHead--border-bottom">1</th>
            <th class = "tableMulti--form multiHead multiHead--border-bottom">2</th>
            <th class = "tableMulti--form multiHead multiHead--border-bottom">3</th>
            <th class = "tableMulti--form multiHead multiHead--border-bottom">4</th>
            <th class = "tableMulti--form multiHead multiHead--border-bottom">5</th>
            <th class = "tableMulti--form multiHead multiHead--border-bottom">6</th>
            <th class = "tableMulti--form multiHead multiHead--border-bottom">7</th>
            <th class = "tableMulti--form multiHead multiHead--border-bottom">8</th>
            <th class = "tableMulti--form multiHead multiHead--border-bottom">9</th>
        </tr>
        <tr>
            <th class = "tableMulti--form multiHead multiHead--border-rigth">1</th>
            <td class = "tableMulti--form green">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
        </tr>
        <tr>
            <th class = "tableMulti--form multiHead multiHead--border-rigth">2</th>
            <td>--</td>
            <td class = "tableMulti--form green">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
        </tr>
        <tr>
            <th class = "tableMulti--form multiHead multiHead--border-rigth">3</th>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class = "tableMulti--form green">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
        </tr>
        <tr>
            <th class = "tableMulti--form multiHead multiHead--border-rigth">4</th>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class = "tableMulti--form green">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
        </tr>
        <tr>
            <th class = "tableMulti--form multiHead multiHead--border-rigth">5</th>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class = "tableMulti--form green">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
        </tr>
        <tr>
            <th class = "tableMulti--form multiHead multiHead--border-rigth">6</th>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class = "tableMulti--form green">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
        </tr>
        <tr>
            <th class = "tableMulti--form multiHead multiHead--border-rigth">7</th>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class = "tableMulti--form green">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
        </tr>
        <tr>
            <th class = "tableMulti--form multiHead multiHead--border-rigth">8</th>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class = "tableMulti--form green">--</td>
            <td class="tableMulti--form">--</td>
        </tr>
        <tr>
            <th class = "tableMulti--form multiHead multiHead--border-rigth">9</th>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class="tableMulti--form">--</td>
            <td class = "tableMulti--form green">--</td>
        </tr>
    </table>
</div>

<div>
    <h1>Boucle FOR plusieurs tableaux dynamic exercice</h1>
    <?= multipli(5) ?>
</div>

<?php include("etape1_footer.php"); ?>    

<div>
    <?= test(5); ?>
</div>

<script src="script.js"></script>
</body>
</html>