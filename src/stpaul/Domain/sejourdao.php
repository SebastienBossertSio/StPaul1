<?php
/**
 * Created by PhpStorm.
 * User: 14bosserts
 * Date: 07/03/2016
 * Time: 09:25
 */

namespace stpaul\Domain;


class sejourdao {




    use Doctrine\DBAL\Connection;

    use src\Domain\sejour;


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

// Doctrine (db)
$db['db.options'] = array(
    'driver'   => 'pdo_mysql',
    'charset'  => 'utf8',
    'host'     => 'localhost',
    'port'     => '3306',
    'dbname'   => 'bdstpaul',
    'user'     => 'root',
    'password' => '',
);

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

        $articles = array();

        foreach ($result as $row) {

            $sejno = $row['Sejno'];

            $sejours[$sejno] = $this->getAllSejour($row);

        }




        return $sejours;

    }


    /**

     * Creates an Article object based on a DB row.

     *

     * @param array $row The DB row containing Article data.

     * @return \MicroCMS\Domain\Article

     */

    private function getAllSejour(array $row) {

        $sejour =new sejour();

        $sejour->setSejno($row['Sejno']);

        $sejour->setSejintitule($row['SejIntitule']);

        $sejour->setSejMontantMBI($row['SejMontantMBI']);

        $sejour->setSejDteDeb($row['SejDteDeb']);

        $sejour->setSejDuree($row['SejDuree']);

        return $sejour;

    }

}
