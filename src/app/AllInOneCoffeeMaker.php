<?php

declare(strict_types=1);

namespace App;

class AllInOneCoffeeMaker extends CoffeeMaker
{
    use CappucinoTrait {
        CappucinoTrait::makeLatte insteadof LatteTrait;
    }
    use LatteTrait {
        LatteTrait::makeLatte as makeOriginalLatte;
    }
}
