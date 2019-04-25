<?php

require_once('../DBHelper.php');
require_once('../user.php');

class profileDAO
{
    static private $users;

    static public function eagerInit()
    {
        /* Connect to database
         * Initialise VOs
         * Disconnect */
        $pdo = new DBHelper();
        $pdo->connect();

        $sqlQuery = "SELECT * FROM users;";
        foreach($pdo->query($sqlQuery) as $row)
        {
            $email = $row["email"];
            $password = $row["password"];
            $name = $row["name"];
            $surname = $row["surname"];
            $img_profile = $row["img_profile"];
            $about = $row["about"];
            self::$users[] = new User($email, $password, $name, $surname, $img_profile, $about);
        }

        $pdo->disconnect();

    }

    static public function getUsers()
    {
        return self::$users;
    }
}