<?php

class Search {

    public function __construct($db) {
        $this->db = $db;
    }

    public function saveResult($db, $firstName, $lastName, $email, $birthdate, $brand, $budget, $color) {
        $sql = "INSERT INTO search_results (firstname,lastname,email,birthdate,brand,budget,color)VALUES (?,?,?,?,?,?,?)";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("sssssss", $firstName, $lastName, $email, $birthdate, $brand, $budget, $color);
        $stmt->execute();
    }

    public function getAll($db) {

        $sql = "SELECT firstname,lastname,email,birthdate,brand,budget,color FROM search_results";
        $result = $db->query($sql);
        return $result;
    }

}
