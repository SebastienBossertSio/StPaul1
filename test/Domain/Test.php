<?php
/**
 * Created by PhpStorm.
 * User: 14bosserts
 * Date: 17/03/2016
 * Time: 11:32
 */

namespace stpaul\Domain;
use stpaul\IHM\Simul;

require_once __DIR__.'/../../src/stpaul/IHM/Simul.php';


class Test extends \PHPUnit_Framework_TestCase {


    protected function setUp()
    {
        $this->object = new Simul(3, 2, 200,400);
    }

    public function testReducQF()
    {
        $this->setUp(3, 2, 200,400);

        $resultatAttendu = 20 ;
        $resultatObserve = $this->object->setSimulReducQF();

        $this->assertEquals($resultatAttendu, $resultatObserve);

    }

    public function testReducFamilleNombreuse()
    {
        $this->setUp(3, 2, 200,400);

        $resultatAttendu = 80 ;
        $resultatObserve = $this->object->setSimulReducFamilleNombreuse();

        $this->assertEquals($resultatAttendu, $resultatObserve);

    }

    public function testReducDepartMultiple()
    {
        $this->setUp(3, 2, 200,400);

        $resultatAttendu = 20 ;
        $resultatObserve = $this->object->setSimulReducDepartMultiple();

        $this->assertEquals($resultatAttendu, $resultatObserve);

    }

    public function testSimulSousTotal()
    {
        $this->setUp(3, 2, 200,400);

        $resultatAttendu = 100 ;
        $resultatObserve = $this->object->setSimulSousTotal();

        $this->assertEquals($resultatAttendu, $resultatObserve);

    }

	public function testSimulTotalApresReduc()
    {
        $this->setUp(3, 2, 200,400);

        $resultatAttendu = 80 ;
        $resultatObserve = $this->object->setSimulTotalApresReduc();

        $this->assertEquals($resultatAttendu, $resultatObserve);

    }
	public function testSimulTotalApresPlafond()
    {
        $this->setUp(3, 2, 200,400);

        $resultatAttendu = 80 ;
        $resultatObserve = $this->object->setSimulTotalApresPlafond();

        $this->assertEquals($resultatAttendu, $resultatObserve);

    }
    public function testSimulTotalDepartMultiple()
    {
        $this->setUp(3, 2, 200,400);

        $resultatAttendu = 160 ;
        $resultatObserve = $this->object->setSimulTotalDepartMultiple();

        $this->assertEquals($resultatAttendu, $resultatObserve);

    }
}
