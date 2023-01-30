<?php

declare(strict_types=1);

namespace AKEI;

use BurritoFactory\Ingredients\Mozzarella;
use BurritoFactory\Ingredients\Pain;
use BurritoFactory\Ingredients\PainBrulé;
use BurritoFactory\Ingredients\PainGrillé;
use BurritoFactory\Ingredients\Poivron;
use BurritoFactory\Ingredients\PoivronBrulé;
use BurritoFactory\Ingredients\PoivronFondant;
use BurritoFactory\Ingredients\PoivronJusteChaud;
use BurritoFactory\Ingredients\Tomates;

class Kulinarisk
{
    public function bake($dish, int $duration)
    {
        $durationInSeconds = $duration * 60;

        sleep($durationInSeconds);

        return $this->doNothing($dish, $durationInSeconds);
    }

    private function heat($dish, int $durationInSeconds)
    {
        $dishMapping = $this->mapping()[get_class($dish)];

        $dishMapping = array_reverse($dishMapping, true);

        foreach ($dishMapping as $mappedDuration => $mappedDish) {
            if ($durationInSeconds >= $mappedDuration) {
                return $mappedDish;
            }
        }

        return $dish;
    }

    private function doNothing($dish, int $durationInSeconds)
    {
        return $dish;
    }

    public function mapping(): array
    {
        return [
            Poivron::class => [
                (0 * 60) => new Poivron(),
                (15 * 60) => new PoivronJusteChaud(),
                (25 * 60) => new PoivronFondant(),
                (45 * 60) => new PoivronBrulé(),
            ],
            Pain::class => [
                (0 * 60) => new Pain(),
                (2 * 60) => new PainGrillé(),
                (5 * 60) => new PainBrulé(),
            ],
            Tomates::class => [

            ],
            Mozzarella::class => [

            ],
            //...
        ];
    }

}