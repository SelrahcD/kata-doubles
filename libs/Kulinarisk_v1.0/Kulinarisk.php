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
    public function laga($maträtt, int $varaktighet)
    {
        $varaktighetISekunder = $varaktighet * 60;

        sleep($varaktighetISekunder);

        return $this->värme($maträtt, $varaktighetISekunder);
    }

    private function värme($behållare, int $varaktighetISekunder)
    {
        $tallrickMapping = $this->mapping()[get_class($behållare)];

        $tallrickMapping = array_reverse($tallrickMapping, true);

        foreach ($tallrickMapping as $mappingVaraktighet => $mappingMaträtt) {
            if ($varaktighetISekunder >= $mappingVaraktighet) {
                return $mappingMaträtt;
            }
        }

        return $behållare;
    }

    private function göraIngenting($behållare, int $varaktighet)
    {
        return $behållare;
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