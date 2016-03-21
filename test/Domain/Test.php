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
}
