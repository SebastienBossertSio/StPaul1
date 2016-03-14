<?php
/**
 * Created by PhpStorm.
 * User: 14bosserts
 * Date: 14/03/2016
 * Time: 10:40
 */

namespace src\stpaul\IHM;


class Simul {
    private $famnom;
    private $famNBEnfant;
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

    /** Accesseurs pour le nom de famille **/
    public function getFamNom()
    {
        return $this->famnom ;
    }

    public function setFamNom($famnom)
    {
        $this->famnom = $famnom;
    }

    /** Accesseurs pour le nombre d'enfants de la famille **/
    public function getFamNBEnfant()
    {
        return $this->famNBEnfant ;
    }

    public function setFamNBEnfant($famNBEnfant)
    {
        $this->famNBEnfant = $famNBEnfant;
    }

    /** Accesseurs pour le quotient familial de la famille **/
    public function getFamQF()
    {
        return $this->famQF ;
    }

    public function setFamQF($famQF)
    {
        $this->famQF = $famQF;
    }

    /** Accesseurs pour le numéro de séjour **/
    public function getSejNo()
    {
        return $this->sejNo ;
    }

    public function setSejNo($sejNo)
    {
        $this->sejNo = $sejNo;
    }


    /** Accesseurs pour le montant brut initial **/
    public function getSejMBI()
    {
        return $this->sejMBI ;
    }

    public function setSejMBI($sejMBI)
    {
        $this->sejMBI = $sejMBI;
    }




}


