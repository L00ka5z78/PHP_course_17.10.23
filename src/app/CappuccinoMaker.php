<?php

declare(strict_types=1);

namespace App;

class CappuccinoMaker extends CoffeeMaker
{
    use CappuccinoTrait {
        CappuccinoTrait::makeCappuccino as public;
    }
}
