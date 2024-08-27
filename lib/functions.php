<?php
include 'database.php';

function get_productos()
{
    $pdo = Database::connect();
    $sql = "SELECT * FROM Productos";

    try {

        $query = $pdo->prepare($sql);
        $query->execute();
        $all_user_info = $query->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {

        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }

    Database::disconnect();
    return $all_user_info;
}

function get_clientes()
{
    $pdo = Database::connect();
    $sql = "SELECT * FROM Cliente";

    try {

        $query = $pdo->prepare($sql);
        $query->execute();
        $all_user_info = $query->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {

        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }

    Database::disconnect();
    return $all_user_info;
}

function get_orden()
{
    $pdo = Database::connect();
    $sql = "SELECT * FROM Orden";

    try {

        $query = $pdo->prepare($sql);
        $query->execute();
        $all_user_info = $query->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {

        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }

    Database::disconnect();
    return $all_user_info;
}

