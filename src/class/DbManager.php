<?php 

require_once __DIR__ . '/DbObject.php';

/**
 * La classe DbManager doit pouvoir gérer n'importe quelle table de votre base de donnée
 * 
 * Complétez les fonctions suivantes pour les faires fonctionner
 */

class DbManager {
    private $db;

    function __construct(PDO $db) {
        $this->db = $db;
    }

    // return l'id inseré
    function insert(string $sql, array $data) {
        $var = $this->db->prepare($sql);
        $var->execute($data);
        $variable = $this->db->lastInsertId();
        return $variable;
    }

    function insert_advanced(DbObject $dbObj) {
        
    }

    function select(string $sql, array $data, string $className) {
        $var = $this->db->prepare($sql);
        $var->execute();
        $var->setFetchMode(PDO::FETCH_CLASS, $className);
        $variable = $var->fetchAll();
        return $variable;
    }

    function getById(string $tableName, $id, string $className) {
        $var = $this->db->prepare('SELECT * FROM .'.$tableName.' WHERE id = ?');
        $var->execute([$id]);
        $var->setFetchMode(PDO::FETCH_CLASS, $className);
        $variable = $var->fetch();
        return $variable;
    }

    function getById_advanced($id, string $className) {
        $var = $this->db->prepare('SELECT * FROM contact_forms WHERE id = ?');
        $var->execute([$id]);
        $var->setFetchMode(PDO::FETCH_CLASS, $className);
        $variable = $var->fetch();
        return $variable;

    }

    function getBy(string $tableName, string $column, $value, string $className) {
        $var = $this->db->prepare('SELECT * FROM '.$tableName.' WHERE '.$column.' = ?');
        $var->execute([$value]);
        $var->setFetchMode(PDO::FETCH_CLASS, $className);
        $variable = $var->fetch();
        return $variable;
    }

    function getBy_advanced(string $column, $value, string $className) {
        $var = $this->db->prepare('SELECT * FROM contact_forms WHERE '.$column.' = ?');
        $var->execute([$value]);
        $var->setFetchMode(PDO::FETCH_CLASS, $className);
        $variable = $var->fetch();
        return $variable;
    }

    function removeById(string $tableName, $id) {
        $var = $this->db->prepare('DELETE FROM '.$tableName.' WHERE id = ?');
        $var->execute([$id]);
        return("Le contact a bien été supprimé");
    }

    function update(string $tableName, array $data) {
        $var = $this->db->prepare('UPDATE '.$tableName.' SET fullname = ?, phone = ?, email = ?, message = ? WHERE id = ?');
        $var->execute($data);
        $var->setFetchMode(PDO::FETCH_CLASS, $tableName);
        $variable = $var->fetch();
        return $variable;
    }

    function update_advanced(DbObject $dbObj) {
        $var = $this->db->prepare('UPDATE '.$dbObj.' SET fullname = ?, phone = ?, email = ?, message = ? WHERE id = ?');
        $var->setFetchMode(PDO::FETCH_CLASS, $dbObj);
        $variable = $var->fetch();
        return $variable;
    }

}