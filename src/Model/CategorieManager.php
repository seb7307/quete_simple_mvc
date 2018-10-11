<?php
/**
 * Created by PhpStorm.
 * User: seb
 * Date: 09/10/18
 * Time: 21:22
 */
namespace Model;

require __DIR__ . '/../../app/db.php';

class CategorieManager
{
    public function selectAllCategorie()
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM categorie";
        $res = $pdo->query($query);
        return $res->fetchAll();
    }

    public function selectOneCategorie(int $id)
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM categorie WHERE id = :id";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
        // contrairement à fetchAll(), fetch() ne renvoie qu'un seul résultat
        return $statement->fetch();
    }
}