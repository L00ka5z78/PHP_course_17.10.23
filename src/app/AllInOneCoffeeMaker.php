<?php

declare(strict_types=1);

namespace App;

class AllInOneCoffeeMaker extends CoffeeMaker
{
    use CappuccinoTrait {
        CappuccinoTrait::makeCappuccino as public;
    }
    use LatteTrait;
}
