<?php 

    include("constante.php");

    function Moyenne1T($note1, $note2) {
        $result = ($note1 + $note2)/2;
        return $result;
    }

    function afficherMoyenne($note1, $note2) {
        echo "Lamoyenne de " . $note1 . " et " . $note2 . " est de " . Moyenne1T($note1, $note2);
    }

    function MoyennePonderree($note1, $note2, $note3, $coeff1, $coeff2, $coeff3) {
        $result = ($note1 * $coeff1 + $note2 * $coeff2 + $note3*$coeff3)/($coeff1+$coeff2+$coeff3);
        return $result;
    }

    function afficherMoyennePonderree($note1, $note2, $note3, $coeff1, $coeff2, $coeff3) {
        echo "La moyenne de " . $note1 . " coeff " . DEBUT . $coeff1 . FIN .  " et " . $note2 . " coeff " . DEBUT . $coeff2 . FIN . " et de " . $note3 . " coeff " . DEBUT . $coeff3 . FIN . " est de " . MoyennePonderree($note1, $note2, $note3, $coeff1, $coeff2, $coeff3);
    }

    function Facto($valeur) {
        $resultat = 1;
        while ($valeur > 0) {
            echo $valeur . "<br>";
            $resultat *= $valeur;
            $valeur --;
        }
        return $resultat;
    }

    function multipli($taille) {
        echo '<div class="multiplication__container">';
        for($i = 1; $i <= $taille; $i++) {
            echo '<div class="multiplication__card">';
            echo '<div class="multiplication__card-text">Table de ' . $i . '</div>';
            for($j = 1; $j <= $taille; $j++) {
                $result = $i * $j;
                echo '<div class="multiplication__card-result">';
                echo $i . " x " . $j . " = " . $result . "<br>";
                echo '</div>';
            }
            echo '</div>';
        }
        '</div>';
    }


    function multi($taille) {
        echo '<table class="tableMulti">';
        echo '<tr>';
        echo '<th class="tableMulti--form multiHead multiHead--border-bottom multiHead--border-rigth"></th>';
        for($j = 1; $j <= $taille; $j++) {
            echo '<th class="tableMulti--form multiHead multiHead--border-bottom">' . $j . '</th>';
        }
        echo '</tr>';
        for($i = 1; $i <= $taille; $i++) {
            echo '<tr>';
            echo '<th class="tableMulti--form multiHead multiHead--border-rigth">' .$i . '</th>';
            for($j = 1; $j <= $taille; $j++) {
                if ($i === $j) {
                    echo '<td class="tableMulti--form green">' . $i * $j . '</td>';
                } else {
                echo '<td class="tableMulti--form">' . $i * $j . '</td>';
                }
            }
            echo '</tr>';
        }
        echo '</table>';
    }

    function test($taille) {
        echo '<table>';
        for($i = 1; $i <= $taille; $i++) {
            echo '<tr>';
            for($j = 1; $j <= $taille; $j++) {
                echo $i*$j;
            }
            echo '</tr>';
        } 
        echo '</table>';
    }