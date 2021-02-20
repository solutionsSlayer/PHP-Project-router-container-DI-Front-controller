<?php


class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll()
    {
        try {
            $statement = $this->pdo->prepare('SELECT * from champion');

            $statement->execute();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
