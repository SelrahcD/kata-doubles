<?php

declare(strict_types=1);

namespace BurritoFactory\Ingredients;

use AKEI\Kulinarisk;

final class Poivron
{
    public function cuireAvec(\AKEI\Kulinarisk $kulinarisk, int $durée)
    {
        $skålen = $kulinarisk->laga($this, $durée);
        
        return $skålen->maträtt();
    }
}