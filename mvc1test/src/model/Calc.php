<?php

namespace App\model;

use App\db\dbconn;

class Calc{

    function calcsumma($a, $b) {

        $s=$a+$b;
        return $s;
    }

    function person($a, $b) {
    
        $db = new dbconn();
        $stmt = $db->pdo->query("SELECT * FROM users");
        $stmt->execute();
        $users = $stmt->fetchAll();

        return $users;
                }

                
    function push ($clean_user){
        $db = new dbconn();
        $stmt = $db->pdo->prepare('INSERT INTO users (username) VALUES (:users)');
        // Bind the values to the placeholders
        $stmt->bindParam('users', $clean_user);
        // Execute the SQL statement to add the new member
        $stmt->execute();

    }
            }




?>