<?php

namespace Kalimero\ReadonlyArray\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Kalimero\ReadonlyArray\Traits\CastsToReadonlyArray;
use Kalimero\ReadonlyArray\Contracts\ToReadonlyArray;

readonly class SampleDTO implements ToReadonlyArray
{
    use CastsToReadonlyArray;

    public function __construct(
        public string $name,
        public int $age,
    ) {}
}

class ReadonlyArrayTest extends TestCase
{
    public function testToReadonlyArrayReturnsExpectedData(): void
    {
        $dto = new SampleDTO('Zoran', 33);

        $this->assertEquals([
            'name' => 'Zoran',
            'age' => 33,
        ], $dto->toReadonlyArray());
    }
}
