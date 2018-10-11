<?php
/**
 * Created by PhpStorm.
 * User: seb
 * Date: 09/10/18
 * Time: 17:37
 */
namespace Model;

require __DIR__ . '/../../app/db.php';

class ItemManager
{
    public function selectAllItems()
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM item";
        $res = $pdo->query($query);
        return $res->fetchAll();
    }

    public function selectOneItem(int $id)
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM item WHERE id = :id";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
        // contrairement à fetchAll(), fetch() ne renvoie qu'un seul résultat
        return $statement->fetch();
    }

}
