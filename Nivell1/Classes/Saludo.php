<?php declare (strict_types=1);

final class Saludo {
    public function Saludo(string $nombre) : string {
        return "Hola, ". $nombre . "!";
    }
}

?>