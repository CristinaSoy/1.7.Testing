<?php declare (strict_types=1);
use PHPUnit\Framework\TestCase;

final class SaludoTest extends TestCase {
    public function testSaludoConNombre() : void {
        $saludo1 = new Saludo("Petra");
        $salida = $saludo1->Saludo();
        $this->assertSame("Hola, Petra", $salida);
    }


}

?>