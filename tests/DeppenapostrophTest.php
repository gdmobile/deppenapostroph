<?php

namespace GDMobile\Deppenapostroph\test;

use GDMobile\Deppenapostroph\Deppenapostroph;

class DeppenapostrophTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider needApostropheProvider
     */
    public function testNeedsApostrophe($input, $expected)
    {
        $result = Deppenapostroph::needsApostropheOnly($input);

        $this->assertEquals($expected, $result);
    }

    public function needApostropheProvider()
    {
        return [
            ['Max', true],
            ['Thomas', true],
            ['Tobias', true],
            ['Beatrix', true],
            ['Boss', true],
            ['Heiko', false]
        ];
    }

    /**
     * @dataProvider transformProvider
     */
    public function testTransform($input, $expected)
    {
        $result = Deppenapostroph::transform($input);

        $this->assertEquals($expected, $result);
    }

    public function transformProvider()
    {
        return [
            ['Max', "Max'"],
            ['Thomas', "Thomas'"],
            ['Tobias', "Tobias'"],
            ['Beatrix', "Beatrix'"],
            ['Boss', "Boss'"],
            ['Heiko', "Heikos"]
        ];
    }
}
