<?php

declare(strict_types=1);

namespace BurritoFactory\Ingredients;

final class Pain
{
    public function cuireAvec(\AKEI\Kulinarisk $kulinarisk, int $durée)
    {
        $skålen = $kulinarisk->laga($this, $durée);
        
        return $skålen->maträtt();
    }
}
