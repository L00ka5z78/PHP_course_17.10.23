<?php

declare(strict_types=1);

namespace App;

class Toaster
{
    public array $slices = [];
    public int $size = 2;

    public function addSlice(string $slice): void
    {
        var_dump($this);
        exit;
        if (count($this->slices) < $this->size) {
            $this->slices[] = $slice;
        }
    }
    public function toast()
    {
        foreach ($this->slices as $i => $slice) {
            echo ($i + 1) . ': Toasting ' . $slice . PHP_EOL;
        }
    }
}
