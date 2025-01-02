<?php declare (strict_types=1);

//Exercici 5. Grau d'estudiant d'acord amb la nota.

namespace Ccard\Nivell1;

class Grau {

    private int $nota;

    public function asignaGrau(int $nota) : string {
        $grau = match(true) {
            $nota>= 60 => "Primera Divisió",
            $nota<60 && $nota>=45 => "Segona Divisió",
            $nota<45 && $nota>=33 => "Tercera Divisió",
            $nota<33 =>"l'estudiant reprovarà",
        };

        return $grau;
    }
/*
    public function calculaGrau(int $nota) : string {
        $grau = match(true)  {
            $nota<33 => "L'estudiant ha de tornar a provar",
            $nota>=33 && $nota<45 => "Tercera divisió",
            $nota>=45 && $nota<60 => "Segona Divisió",
            $nota>=60 => "Primera Divisió",
        };
        return "<p>$grau</p>";
    }
*/
}

?>