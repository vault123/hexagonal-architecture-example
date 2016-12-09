<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 */

namespace Mannion007\WaffleFactory\Delivery;

use Mannion007\WaffleFactory\Model\Waffle;

class MysqlDelivery implements DeliveryInterface
{
    /** @var \PDO $connection */
    private $conn;

    /**
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

    /**
     * @param Waffle[] $waffles
     */
    public function deliverWaffles(array $waffles)
    {
        $this->conn->beginTransaction();
        /** @var Waffle $waffle */
        foreach ($waffles as $waffle) {
            $query = $this->conn->prepare('INSERT INTO waffles(waffle_id, waffle) VALUES (:waffle_id, :waffle)');
            $query->execute([':waffle_id' => $waffle->waffleId, ':waffle' => json_encode($waffles)]);
        }
        $this->conn->commit();
    }
}
