<?php

declare(strict_types=1);

namespace App;

class ToasterPro extends Toaster
{
    // public int $size;

    public function __construct()
    {
        parent::__construct(); // important to have it at the beginning to avoid overwriting issues
        $this->size = 4;
    }
    public function addSlice(string $slice): void
    {
        parent::addSlice($slice);
    }

    public function toastBagel()
    {
        foreach ($this->slices as $i => $slice) {
            echo ($i + 1) . ': Toasting ' . $slice . 'with bagels option' . PHP_EOL;
        }
    }
}
