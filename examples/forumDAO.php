<?php

require_once('DBHelper.php');
require_once('comment.php');

class forumDAO
{
    static private $comments;

    static public function eagerInit()
    {
        /* Connect to database
         * Initialise VOs
         * Disconnect */
        $pdo = new DBHelper();
        $pdo->connect();

        $sqlQuery = "SELECT C.id,C.comment,C.datetime,UC.fk_user, UC.fk_course FROM `comments` C INNER JOIN `u_c_comments` UC ON C.fk_u_c = UC.id INNER JOIN `users` U ON UC.fk_user = U.email WHERE UC.fk_course = 3";

        foreach($pdo->query($sqlQuery) as $row)
        {
            $id = $row["id"];
            $comment = $row["comment"];
            $datetime = $row["datetime"];
            $user_id = $row["fk_user"];
            $course_id = $row["fk_course"];
            self::$comments[] = new comment($id, $comment, $datetime, $user_id, $course_id);
        }

        $pdo->disconnect();

    }

    static public function getComments()
    {
        return self::$comments;
    }
}