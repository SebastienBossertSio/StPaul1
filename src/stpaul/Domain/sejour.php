<?php
/**
 * Created by PhpStorm.
 * User: 14bosserts
 * Date: 07/03/2016
 * Time: 08:33
 */
namespace stpaul\Domain;

/**
 * Class sejour
 * @package stpaul\Domain
 */
class sejour{

    /**
     * @var
     */
    private $sejno;
    /**
     * @var
     */
    private $sejintitule;
    /**
     * @var
     */
    private $sejMontantMBI;
    /**
     * @var
     */
    private $sejDteDeb;
    /**
     * @var
     */
    private $sejDuree;



    /**
     * @return mixed
     */
    public function getSejintitule()
    {
        return $this->sejintitule;
    }

    /**
     * @param mixed $sejintitule
     */
    public function setSejintitule($sejintitule)
    {
        $this->sejintitule = $sejintitule;
    }

    /**
     * @return mixed
     */
    public function getSejno()
    {
        return $this->sejno;
    }

    /**
     * @param mixed $sejno
     */
    public function setSejno($sejno)
    {
        $this->sejno = $sejno;
    }

    /**
     * @return mixed
     */
    public function getSejMontantMBI()
    {
        return $this->sejMontantMBI;
    }

    /**
     * @param mixed $sejMontantMBI
     */
    public function setSejMontantMBI($sejMontantMBI)
    {
        $this->sejMontantMBI = $sejMontantMBI;
    }

    /**
     * @return mixed
     */
    public function getSejDteDeb()
    {
        return $this->sejDteDeb;
    }

    /**
     * @param mixed $sejDteDeb
     */
    public function setSejDteDeb($sejDteDeb)
    {
        $this->sejDteDeb = $sejDteDeb;
    }

    /**
     * @return mixed
     */
    public function getSejDuree()
    {
        return $this->sejDuree;
    }

    /**
     * @param mixed $sejDuree
     */
    public function setSejDuree($sejDuree)
    {
        $this->sejDuree = $sejDuree;
    }


    /**
     * @param $sejno
     * @param $sejintitule
     * @param $sejMontantMBI
     * @param $sejDteDeb
     * @param $sejDuree
     */
    function __construct($sejno, $sejintitule, $sejMontantMBI, $sejDteDeb, $sejDuree)
    {
        $this->sejno = $sejno;
        $this->sejintitule = $sejintitule;
        $this->sejMontantMBI = $sejMontantMBI;
        $this->sejDteDeb = $sejDteDeb;
        $this->sejDuree = $sejDuree;
    }

    public function getSejDteFin()
    {

        $datetime = new \DateTime($this->sejDteDeb);
        $datetime->add(new \DateInterval('P'.$this->sejDuree.'D'));

        return $datetime->format('Y-m-d');
    }

    /**
     * Formatage jj-mm-aaaa
     * @param $pDte : date a formater
     * @return mixed
     */
    public function getSejDteFormatFR($pDte)
    {
        $date = new \DateTime($pDte);
        return $date->format('d-m-Y');
    }

}