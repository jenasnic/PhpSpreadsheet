<?php

namespace PhpOffice\PhpSpreadsheetTests\Calculation\Functions\Engineering;

use PhpOffice\PhpSpreadsheet\Calculation\Engineering;
use PhpOffice\PhpSpreadsheet\Calculation\Functions;
use PhpOffice\PhpSpreadsheetTests\Custom\ComplexAssert;
use PHPUnit\Framework\TestCase;

class ImSecTest extends TestCase
{
    const COMPLEX_PRECISION = 1E-8;

    /**
     * @var ComplexAssert
     */
    protected $complexAssert;

    protected function setUp(): void
    {
        Functions::setCompatibilityMode(Functions::COMPATIBILITY_EXCEL);
        $this->complexAssert = new ComplexAssert();
    }

    protected function tearDown(): void
    {
        $this->complexAssert = null;
    }

    /**
     * @dataProvider providerIMSEC
     *
     * @param mixed $expectedResult
     * @param mixed $value
     */
    public function testIMSEC($expectedResult, $value)
    {
        $result = Engineering::IMSEC($value);
        $this->assertTrue(
            $this->complexAssert->assertComplexEquals($expectedResult, $result, self::COMPLEX_PRECISION),
            $this->complexAssert->getErrorMessage()
        );
    }

    public function providerIMSEC()
    {
        return require 'tests/data/Calculation/Engineering/IMSEC.php';
    }
}
