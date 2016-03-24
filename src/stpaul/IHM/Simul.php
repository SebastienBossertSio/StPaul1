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
    private $RevenuFiscale;
    Private $PartFiscale;
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

    function __construct($famNbEnfant,$simulNbEnfPartant, $sejMBI, $RevenuFiscale )
    {
      $this->famNbEnfant = $famNbEnfant;
        $this->simulNbEnfPartant = $simulNbEnfPartant;
        $this->sejMBI = $sejMBI;
        $this->RevenuFiscale= $RevenuFiscale;



    }

    /**
     * @return mixed
     *
     *
     */

    public function getFamQF()
    {
        return $this->famQF;
    }

    /**
     * @param mixed $famQF
     */
    public function setFamQF()
    {
        $this -> FamQF = $this -> RevenuFiscale / (12 * $this->setPartFiscale() );
        return ceil ($this ->FamQF);
    }



    public function getRevenuFiscale()
    {
        return $this->RevenuFiscale;
    }

    /**
     * @param mixed $simulNbEnfPartant
     */
    public function setRevenuFiscale($RevenuFiscale)
    {
        $this->RevenuFiscale= $RevenuFiscale;
    }


    public function getPartFiscale()
    {
        return $this->PartFiscale;
    }

    /**
     * @param mixed $simulNbEnfPartant
     */
    public function setPartFiscale()
    {
        if($this -> famNbEnfant==1){

            $this->PartFiscale = 2.5;

        }elseif($this -> famNbEnfant==2){

            $this->PartFiscale = 3;
        }
        elseif($this -> famNbEnfant==3){

            $this->PartFiscale = 4;
        }
        elseif($this -> famNbEnfant==4){

            $this->PartFiscale = 5;
        }
        elseif($this -> famNbEnfant==5){

            $this->PartFiscale = 6;
        }

        return $this->PartFiscale;
    }

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
    public function setSimulReducQF()
    {
        if ( $this->setFamQF() < 500 ){

            $this->simulReducQF = ($this -> sejMBI) * 0.1;

        }else{

            $this->simulReducQF  = 0;
        }

       return $this->simulReducQF;
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
    public function setSimulReducFamilleNombreuse()
    {
        if ( $this->famNbEnfant == 2 ){
            $this -> simulReducFamilleNombreuse = $this -> sejMBI * 0.2;

        }elseif ($this->famNbEnfant >= 3){
            $this -> simulReducFamilleNombreuse = $this -> sejMBI * 0.4;

        }else {

            $this->simulReducFamilleNombreuse = 0;
        }

		 return $this->simulReducFamilleNombreuse;
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
    public function setSimulReducDepartMultiple()
    {
        if ( $this->simulNbEnfPartant > 1 ){

            $this->simulReducDepartMultiple = $this -> sejMBI * 0.1;

        }else{

            $this->simulReducDepartMultiple  = 0;
        }

        return $this->simulReducDepartMultiple;
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
    public function setSimulSousTotal()
    {
        $this->simulSousTotal = ($this->sejMBI) - $this->setSimulReducFamilleNombreuse()- $this->setSimulReducQF();
        return  $this->simulSousTotal;
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
    public function setSimulTotalApresReduc()
    {
        $this->simulTotalApresReduc =  $this->SetsimulSousTotal() - $this->SetsimulReducDepartMultiple();
		return $this->simulTotalApresReduc;
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
        if ( $this->setsimulTotalApresReduc() > 100 ){

            $this->simulTotalApresPlafond = 100 ;

        }else{

            $this->simulTotalApresPlafond = $this -> setsimulTotalApresReduc();
        }
			        return $this->simulTotalApresPlafond;
    }

    /**
     * @return mixed
     */
    public function getSimulTotalDepartMultiple()
    {
        return $this->$simulTotalDepartMultiple;
    }

    /**
     * @param mixed $simulTotalDepartMultiple
     */
    public function setSimulTotalDepartMultiple()
    {
        if ( $this->simulNbEnfPartant > 1 ){

            $this->simulTotalDepartMultiple = $this->setSimulTotalApresPlafond() * $this->simulNbEnfPartant ;

        }else{

            $this->simulTotalApresPlafond = $this -> setSimulTotalApresPlafond();
        }
		
		return $this->simulTotalDepartMultiple;
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
        $this -> setPartFiscale();
        $this -> setFamQF();
        $this-> setsimulReducQF() ;
        $this-> setsimulReducFamilleNombreuse()  ;
        $this-> setsimulReducDepartMultiple() ;
        $this-> setsimulSousTotal()  ;
        $this-> setsimulTotalApresReduc()  ;
        $this-> setsimulTotalApresPlafond()  ;
        $this-> setsimulTotalDepartMultiple() ;
    }



}

