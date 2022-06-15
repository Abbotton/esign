<?php

namespace Abbotton\Esign\Tests;

use Abbotton\Esign\factory\Factory;

class TestCase extends \PHPUnit\Framework\TestCase
{
    public function setUp(): void
    {
        Factory::init('foo', 'bar');
        parent::setUp();
    }
}
