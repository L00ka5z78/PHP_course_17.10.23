<?php

declare(strict_types=1);

namespace App;

class ToasterPro extends Toaster
{
    public int $size = 4;

    public function toastBagel()
    {
        foreach ($this->slices as $i => $slice) {
            echo ($i + 1) . ': Toasting ' . $slice . 'with bagels option' . PHP_EOL;
        }
    }
}
