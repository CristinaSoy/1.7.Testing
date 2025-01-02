<?php declare (strict_types=1);

require_once __DIR__ .'/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

use Ccard\Nivell1\Saludo;

final class SaludoTest extends TestCase {
    public function testSaludoConNombre() : void {
        $saludo1 = new Saludo;
       
        //assertSame es un método heredado de TestCase
        // es necesario usar $this-> para invocar los metodos del marco de trabajo de PHPUnit
        $this->assertSame("Hola, Petra!", $saludo1->saludar("Petra")); 

    }

}

?>