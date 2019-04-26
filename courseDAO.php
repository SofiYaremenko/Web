<?php
require_once('course.php');

class courseDAO
{

    static private $courses;

    static public function eagerInit()
    {
		$db = mysqli_connect('localhost', 'root', '', 'vos_resurs');
        $query = "SELECT * FROM courses;";
		$result = mysqli_query($db, $query);
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$id = $row["id"];
            $title = $row["title"];
            $description = $row["about"];
			$img = $row["img_course"];
			$category = $row["fk_category"];
			$lang = $row["fk_lang"];
			$hoursAmount = $row["hours"];
            self::$courses[] = new Course($id, $title, $description, $img, $category, $lang, $hoursAmount);
		}
		mysqli_free_result($result);
    }

    static public function getCourses()
    {
        return self::$courses;
    }
}
?>