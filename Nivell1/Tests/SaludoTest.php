<?php declare (strict_types=1);
use PHPUnit\Framework\TestCase;

final class SaludoTest extends TestCase {
    public function testSaludoConNombre() : void {
        $saludo1 = new Saludo("Petra"); //instancias un objeto de la clase
        $salida = $saludo1->Saludo();   //creas una variable con el resultado de la funcion
        
        //assertSame es un método heredado de TestCase
        // es necesario usar $this-> para invocar los metodos del marco de trabajo de PHPUnit
        $this->assertSame("Hola, Petra", $salida); 

    }


}

?>