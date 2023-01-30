<?php

declare(strict_types=1);

namespace BurritoFactory;

use AKEI\Kulinarisk;
use BurritoFactory\Ingredients\Pain;
use BurritoFactory\Ingredients\PainGrillé;
use BurritoFactory\Ingredients\Poivron;
use BurritoFactory\Ingredients\PoivronFondant;
use Mockery;
use PHPUnit\Framework\TestCase;

class CuisinierTest extends TestCase
{
    public function tearDown(): void
    {
        Mockery::close();
    }

    /**
     * @test
     */
    public function prépare_des_poivrons_fondants_avec_un_four(): void
    {
        $poivron = new Poivron();

        $kulinarisk = Mockery::mock(Kulinarisk::class);

        $kulinarisk->allows()->laga($poivron, 25)->andReturns(new PoivronFondant());

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

        $kulinarisk = Mockery::mock(Kulinarisk::class);

        $kulinarisk->allows()->laga($pain, 2)->andReturns(new PainGrillé());

        $cuisiner = new Cuisinier($kulinarisk);

        $platPréparé = $cuisiner->prépareDuPainGrillé($pain);

        $this->assertEquals(new PainGrillé(), $platPréparé);
    }

}
