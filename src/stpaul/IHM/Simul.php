<?php
/**
 * Created by PhpStorm.
 * User: 14bosserts
 * Date: 14/03/2016
 * Time: 10:40
 */

namespace stpaul\IHM;


class Simul {
    private $famNom;
    private $famNbEnfant;
    private $famQF;

    private $sejNo;
    private $sejMBI;

    private $simulNbEnfPartant;
    private $simulReducQF;
    private $simulReducFamilleNombreuse;
    private $simulReducDepartMultiple;
    private $simulSousTotal;
    private $simulTotalApresReduc;
    private $simulTotalApresPlafond;
    private $simulTotalDepartMultiple;

    function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getSimulNbEnfPartant()
    {
        return $this->simulNbEnfPartant;
    }

    /**
     * @param mixed $simulNbEnfPartant
     */
    public function setSimulNbEnfPartant($simulNbEnfPartant)
    {
        $this->simulNbEnfPartant = $simulNbEnfPartant;
    }

    /**
     * @return mixed
     */
    public function getSimulReducQF()
    {
        return $this->simulReducQF;
    }

    /**
     * @param mixed $simulReducQF
     */
    public function setSimulReducQF($simulReducQF)
    {
        if ($this->QF > 500) {
            $this->simulReducQF = 0;
    }
        else{
        $this->simulReducQF = $simulReducQF;
    }
    }

    /**
     * @return mixed
     */
    public function getSimulReducFamilleNombreuse()
    {
        return $this->simulReducFamilleNombreuse;
    }

    /**
     * @param mixed $simulReducFamilleNombreuse
     */
    public function setSimulReducFamilleNombreuse($simulReducFamilleNombreuse)
    {
        $this->simulReducFamilleNombreuse = $simulReducFamilleNombreuse;
    }

    /**
     * @return mixed
     */
    public function getSimulReducDepartMultiple()
    {
        return $this->simulReducDepartMultiple;
    }

    /**
     * @param mixed $simulReducDepartMultiple
     */
    public function setSimulReducDepartMultiple($simulReducDepartMultiple)
    {
        $this->simulReducDepartMultiple = $simulReducDepartMultiple;
    }

    /**
     * @return mixed
     */
    public function getSimulSousTotal()
    {
        return $this->simulSousTotal;
    }

    /**
     * @param mixed $simulSousTotal
     */
    public function setSimulSousTotal($simulSousTotal)
    {
        $this->simulSousTotal = $simulSousTotal;
    }

    /**
     * @return mixed
     */
    public function getSimulTotalApresReduc()
    {
        return $this->simulTotalApresReduc;
    }

    /**
     * @param mixed $simulTotalApresReduc
     */
    public function setSimulTotalApresReduc($simulTotalApresReduc)
    {
        $this->simulTotalApresReduc = $simulTotalApresReduc;
    }

    /**
     * @return mixed
     */
    public function getSimulTotalApresPlafond()
    {
        return $this->simulTotalApresPlafond;
    }

    /**
     * @param mixed $simulTotalApresPlafond
     */
    public function setSimulTotalApresPlafond()
    {
        if ($this->simulSousTotal > 100) {

            $this -> simulTotalApresPlafond = 100;
        }
        else{

            $this->simulTotalApresPlafond =  $this->simulSousTotal ;

        }
    }

    /**
     * @return mixed
     */
    public function getSimulTotalDepartMultiple()
    {
        return $this->simulTotalDepartMultiple;
    }

    /**
     * @param mixed $simulTotalDepartMultiple
     */
    public function setSimulTotalDepartMultiple()
    {
        if ($this->famNbEnfant > 1) {

            $this -> simulTotalDepartMultiple =  $this->simulSousTotal - $this-> simulReducDepartMultiple  ;
        }
        else{

            $this->simulTotalDepartMultiple = $this -> simulSousTotal;

        }
    }

    /**
     * @return mixed
     */
    public function getFamNom()
    {
        return $this->famNom;
    }

    /**
     * @param mixed $famNom
     */
    public function setFamNom($famNom)
    {
        $this->famNom = $famNom;
    }

    /**
     * @return mixed
     */
    public function getFamNbEnfant()
    {
        return $this->famNbEnfant;
    }

    /**
     * @param mixed $famNbEnfant
     */
    public function setFamNbEnfant($famNbEnfant)
    {
        $this->famNbEnfant = $famNbEnfant;
    }

    /**
     * @return mixed
     */
    public function getFamQF()
    {
        return $this->famQF;
    }

    /**
     * @param mixed $famQF
     */
    public function setFamQF($famQF)
    {
        $this->famQF = $famQF;
    }

    /**
     * @return mixed
     */
    public function getSejNo()
    {
        return $this->sejNo;
    }

    /**
     * @param mixed $sejNom
     */
    public function setSejNo($sejNo)
    {
        $this->sejNo = $sejNo;
    }

    /**
     * @return mixed
     */
    public function getSejMBI()
    {
        return $this->sejMBI;
    }

    /**
     * @param mixed $sejMBI
     */
    public function setSejMBI($sejMBI)
    {
        $this->sejMBI = $sejMBI;
    }

    public function calcul()
    {
        $this->simulReducQF ;
        $this->simulReducFamilleNombreuse ;
        $this->simulReducDepartMultiple ;
        $this->simulSousTotal ;
        $this->simulTotalApresReduc ;
        $this->simulTotalApresPlafond ;
        $this->simulTotalDepartMultiple ;
    }

}

