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
    <h1>Boucle FOR + tableau Dynamic</h1>
    pour taille égale 10 <?= multi(9); ?>
</div>

<div>
    <h1>Boucle FOR + tableau static</h1>
    <table class = "tableMulti">
        <tr>
            <th class = "multiHead">*</th>
            <th class = "multiHead">1</th>
            <th class = "multiHead">2</th>
            <th class = "multiHead">3</th>
            <th class = "multiHead">4</th>
            <th class = "multiHead">5</th>
            <th class = "multiHead">6</th>
            <th class = "multiHead">7</th>
            <th class = "multiHead">8</th>
            <th class = "multiHead">9</th>
        </tr>
        <tr>
            <th class = "multiHead">1</th>
            <td class = "byThem">--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
        </tr>
        <tr>
            <th class = "multiHead">2</th>
            <td>--</td>
            <td class = "byThem">--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
        </tr>
        <tr>
            <th class = "multiHead">3</th>
            <td>--</td>
            <td>--</td>
            <td class = "byThem">--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
        </tr>
        <tr>
            <th class = "multiHead">4</th>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td class = "byThem">--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
        </tr>
        <tr>
            <th class = "multiHead">5</th>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td class = "byThem">--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
        </tr>
        <tr>
            <th class = "multiHead">6</th>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td class = "byThem">--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
        </tr>
        <tr>
            <th class = "multiHead">7</th>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td class = "byThem">--</td>
            <td>--</td>
            <td>--</td>
        </tr>
        <tr>
            <th class = "multiHead">8</th>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td class = "byThem">--</td>
            <td>--</td>
        </tr>
        <tr>
            <th class = "multiHead">9</th>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td class = "byThem">--</td>
        </tr>
    </table>
</div>

<?php include("etape1_footer.php"); ?>    


</body>
</html>