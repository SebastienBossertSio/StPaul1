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


    /**

     * Constructor

     *

     * @param \Doctrine\DBAL\Connection The database connection object

     */

    public function __construct(Connection $db) {

        $this->db = $db;

    }


    /**

     * Return a list of all articles, sorted by date (most recent first).

     *

     * @return array A list of all articles.

     */

    public function findAll() {

        $sql = "select * from sejour ";

        $result = $this->db->fetchAll($sql);



        // Convert query result to an array of domain objects

        $sejours = array();

        foreach ($result as $row) {

            $SejNo = $row['SEJNO'];

            $sejours[$SejNo] = $this->buildsejour($row);

        }

        return $sejours;

    }


    /**

     * Creates an Article object based on a DB row.

     *

     * @param array $row The DB row containing Article data.

     * @return stpaul\Domain\sejour

     */




        $sejour = new sejour($row['SEJNO'],$row['SEJINTITULE'],$row['SEJMONTANTMBI'],$row['SEJDTEDEB'], $row['SEJDUREE']);


        return $sejour;

    }
    /**

     * Return a list of all articles, sorted by date (most recent first).

     *

     * @return array A list of all articles.

     */



    //Retourne un  séjour
    public function getSejour($pNo)
    {
        $sql = "select * from sejour where sejno=".$pNo;
        $result = $this->db->fetchAssoc($sql);

        return $this->buildSejour($result);

    }





}
