<?php declare (strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ .'/../vendor/autoload.php';
//require 'vendor/autoload.php';

use Ccard\Nivell1\Email;

final class EmailTest extends TestCase {
    public function testCanBeCreatedFromValidMail() : void {
        $string = "user@example.com";

        $email = Email ::fromString($string);

        $this-> assertSame($string, $email->asString());
    }

    public function testCannotBeCreatedFromInvalidMail() : void {
        
        $this -> expectException(InvalidArgumentException ::class);


        Email :: fromString("invalid");
    }



}



?>