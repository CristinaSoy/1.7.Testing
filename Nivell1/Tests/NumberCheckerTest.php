<?PHP declare(strict_types=1);

require_once __DIR__ .'/../vendor/autoload.php';

use PHPUnit\Framework\InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Ccard\Nivell1\NumberChecker;

final class NumberCheckerTest extends TestCase {

    public function testIsEvenReturnsTrueForEvenNumbers() : void 
    {
          $numberChecker = new NumberChecker(8);
          $this->assertTrue($numberChecker->isEven(), "8 es par");
     }
   
     public function testIsEvenReturnsFalseForOddNumbers() : void 
     {
          $numberChecker = new NumberChecker(-3);
          $this->assertFalse($numberChecker->isEven(), "-3 es impar");
     }

     public function testIsPositiveReturnsTrueForPositiveNumbers() : void 
     {
          $numberChecker = new NumberChecker(8);
          $this->assertTrue($numberChecker->isPositive(), "8 es positivo");
     }

     public function testIsPositiveReturnsFalseForNegativeNumbers() : void 
     {
          $numberChecker = new NumberChecker(-3);
          $this->assertFalse($numberChecker->isPositive(), "-3 es negativo");
     }
}
?>