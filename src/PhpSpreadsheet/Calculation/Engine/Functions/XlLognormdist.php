<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\Engine\Functions;

use PhpOffice\PhpSpreadsheet\Calculation\Category;
use PhpOffice\PhpSpreadsheet\Calculation\Engine\XlFunctionAbstract;
use PhpOffice\PhpSpreadsheet\Calculation\Statistical\Distributions\LogNormal;

/**
 * @inheritDoc
 */
class XlLognormdist extends XlFunctionAbstract
{
    /**
     * @var string
     */
    protected $name = 'LOGNORMDIST';

    /**
     * @var string
     */
    protected $category = Category::CATEGORY_STATISTICAL;

    /**
     * @var callable
     */
    protected $functionCall = [LogNormal::class, 'cumulative'];

    /**
     * @var string
     */
    protected $argumentCount = '3';
}