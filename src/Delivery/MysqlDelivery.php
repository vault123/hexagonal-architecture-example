<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 */

namespace Mannion007\WaffleFactory\Delivery;


class MysqlDelivery implements DeliveryInterface
{

    /** @var \PDO $connection */
    private $conn;

    /**
     * MysqlDelivery constructor.
     * @param string $host
     * @param string $port
     * @param string $database
     * @param string $username
     * @param string $password
     */
    public function __construct(
        string $host,
        string $port,
        string $database,
        string $username,
        string $password
    ) {
        $this->conn = new \PDO($this->getDsn($database, $host, $port), $username, $password);
        $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    /**
     * @param string $database
     * @param string $host
     * @param int $port
     * @return string
     */
    private function getDsn(string $database, string $host, int $port) : string
    {
        return sprintf('mysql:dbname=%s;host=%s;port=%s', $database, $host, $port);
    }

    public function deliverWaffles(array $waffles)
    {
        $this->conn->beginTransaction();
        $query = $this->conn->prepare('INSERT INTO waffles(waffles) VALUES (:waffles)');
        $query->execute([':waffles' => var_dump($waffles)]);
    }
}
