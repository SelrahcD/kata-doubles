<?php

declare(strict_types=1);

namespace BurritoFactory;

use AKEI\Kulinarisk;
use BurritoFactory\Ingredients\Pain;
use BurritoFactory\Ingredients\Poivron;

final class Cuisinier
{
    public function __construct(
        private readonly Kulinarisk $kulinarisk,
    ) {}

    public function prépareUnPoivronFondant(Poivron $poivron)
    {
        return $this->kulinarisk->laga($poivron, 25);
    }

    public function prépareDuPainGrillé(Pain $pain)
    {
        return $this->kulinarisk->laga($pain, 2);
    }
}