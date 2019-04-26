<?php
session_start();
require_once('../DBHelper.php');
require_once('../user.php');

class profileDAO
{
    static private $users;
    static private $loguser;


    static public function logInit()
    {
        $pdo = new DBHelper();
        $pdo->connect();
        $email = $_SESSION['email'];

        $sqlQuery = "SELECT * FROM users WHERE email='$email';";
        $pdo->query($sqlQuery);
        $password = $row['password'];
        $name = $row['name'];
        $surname = $row['surname'];
        $img_profile = $row['img_profile'];
        $about = $row['about'];
        self::$loguser = new User($email, $password, $name, $surname, $img_profile, $about);
        $pdo->disconnect();
    } 

    static public function getlogUser()
    {
        return self::$loguser;
    }

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