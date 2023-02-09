<?php

declare(strict_types=1);

namespace Eddyhotkey\ContaoHelloWorldBundle\Tests;

use Eddyhotkey\ContaoHelloWorldBundle\Library\MassageGenerator;
use PHPUnit\Framework\TestCase;

class MessageGenaratorTest extends TestCase
{
  public function testCanSayHelloToWorld()
  {
    $messageGenerator = new MessageGenarator();
    $message = $messageGenerator->sayHelloTo('World');
    $this->assertSame('Hello World', $message);
  }

  public function testCanNotSayHelloToEmptyTarget()
  {
    $messageGenerator = new MessageGenerator();

    $this->expectException(\InvalidArgumentException::class);

    $message = $messageGenerator->sayHelloTo('');
  }
}