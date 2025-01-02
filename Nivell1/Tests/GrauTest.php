<?php declare (strict_types=1);
/*funció per verificar el grau d'un/a estudiant d'acord amb la nota.
Condicions:
    Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
    Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
    Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
    Si la nota és menor a 33%, l'estudiant reprovarà.
*/

require_once __DIR__."/../vendor/autoload.php";
use PHPUnit\Framework\TestCase;
use Ccard\Nivell1\Grau;

final class GrauTest extends TestCase {

    public function test60OMesPrimeraDivisio() : void 
    {
        $grau = new Grau;
        $this->assertSame("Primera Divisió", $grau->asignaGrau(60));
    }

    public function test45OMesFins59SegonaDivisio() : void 
    {
        $grau = new Grau;
        $this->assertSame("Segona Divisió", $grau->asignaGrau(46));
    }

    public function test33OMesFins45TerceraDivisio() : void
    {
        $grau = new Grau;
        $this->assertSame("Tercera Divisió", $grau->asignaGrau(33));
    }

    public function testMenysDe33Reprovara() : void
    {
        $grau = new Grau;
        $this->assertSame("l'estudiant reprovarà", $grau->asignaGrau(23));
    }
}
?>