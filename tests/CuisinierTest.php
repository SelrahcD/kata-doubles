<?php

declare(strict_types=1);

namespace BurritoFactory;

use BurritoFactory\Ingredients\Pain;
use BurritoFactory\Ingredients\PainGrillé;
use BurritoFactory\Ingredients\Poivron;
use BurritoFactory\Ingredients\PoivronFondant;
use PHPUnit\Framework\TestCase;

class CuisinierTest extends TestCase
{

    /**
     * @test
     */
    public function prépare_des_poivrons_fondants_avec_un_four(): void
    {
        $poivron = new Poivron();

        $kulinarisk = new \AKEI\Kulinarisk();

        $cuisiner = new Cuisinier($kulinarisk);

        $platPréparé = $cuisiner->prépareUnPoivronFondant($poivron);

        $this->assertEquals(new PoivronFondant(), $platPréparé);
    }

    /**
     * @test
     */
    public function prépare_du_pain_grillé_avec_un_four(): void
    {
        $pain = new Pain();

        $kulinarisk = new \AKEI\Kulinarisk();

        $cuisiner = new Cuisinier($kulinarisk);

        $platPréparé = $cuisiner->prépareDuPainGrillé($pain);

        $this->assertEquals(new PainGrillé(), $platPréparé);
    }

}
