<?php
/**
 * Created by PhpStorm.
 * User: 14bosserts
 * Date: 07/03/2016
 * Time: 09:25
 */

namespace stpaul\DAO;

use Doctrine\DBAL\Connection;
use stpaul\Domain\sejour;



class sejourdao {



    /**

     * Database connection

     *

     * @var \Doctrine\DBAL\Connection

     */

    private $db;

    public function __construct(Connection $db) {

        $this->db = $db;

    }

    private function buildSejour($row) {
        $sejour = new sejour($row['SEJNO'],$row['SEJINTITULE'],$row['SEJMONTANTMBI'], $row['SEJDTEDEB'] , $row['SEJDUREE']);

        /**  $sejour->setSejNo($row['SEJNO']);
        $sejour->setSejIntitule($row['SEJINTITULE']);
        $sejour->setSejMontantMBI($row['SEJMONTANTMBI']);
        $sejour->setSejDteDeb($row['SEJDTEDEB']);
        $sejour->setSejDuree($row['SEJDUREE']); */
        return $sejour;
    }


//Retourne tous les séjours
    public function getAllSejours()
    {
        $sql = "select * from sejour order by sejno";
        $result = $this->db->fetchAll($sql);

        // Convert query result to an array of SEJOUR objects
        $sejours = array();
        foreach ($result as $row) {
            $sejNo = $row['SEJNO'];
            $sejours[$sejNo] = $this->buildSejour($row);
        }
        return $sejours;

    }

    //Retourne un  séjour
    public function getSejour($pNo)
    {
        $sql = "select * from sejour where sejno=".$pNo;
        $result = $this->db->fetchAssoc($sql);

        return $this->buildSejour($result);

    }










}
