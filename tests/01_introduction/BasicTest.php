<?php

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class BasicTest extends TestCase {
    public function testAddingTwoPlusTwoResultsFour() {
        $this->assertEquals(4, 2 + 2, "Two plus Two should be equal to four");
    }

    public function testAddingTenPlusTenResultsTwenty() {
        $this->assertEquals(20, 10 + 10, "Ten plus Ten should be equal to Twenty");
    }

    public static function additionProvider(): array {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 3]
        ];
    }

    #[DataProvider('additionProvider')]
    public function testAdd(int $a, int $b, int $expected): void
    {
        $this->assertSame($expected, $a + $b);
    }
}