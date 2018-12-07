<?php
class Database
{
    public static function connectDB()
    {
        $pdo = '';
        try {
            $pdo = new PDO(
                // mysqlコンテナ側のIPアドレスを入れてやらないといけない
                'mysql:dbname=sample;host=172.21.0.2;charset=utf8;',
                'root',
                'password',
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
        }
        catch (PDOException $e) {
            header('Content-Type: text/plain; charset=UTF-8', true, 500);
            exit($e->getMessage());
        }
        return $pdo;
    }
}