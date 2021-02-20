<?php

class Connection {

    public static function make($config)
    {
        try {
            return $pdo = new PDO(
                $config['host'].';dbname="' . $config['table'],
                $config['user'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
