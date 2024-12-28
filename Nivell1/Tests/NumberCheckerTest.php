<?PHP declare(strict_types=1);

use PHPUnit\Framework\InvalidArgumentException;
use PHPUnit\Framework\TestCase;

final class NumberCheckerTest extends TestCase {

    public funcion testIsEven() : void {
        $check1 = new NumberChecker(8);
        $this->assertSame(true, $even);
   }

   public function testIsPositive() void {
        $check2 = new NumberChecker(-6)
        $this->assertSame(true, check2);
   }

   public function testException() : void {
        $this->expectException(InvalidArgumentException::class)
   }







}















?>