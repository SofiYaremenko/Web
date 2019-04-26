<?php
/**
 * Created by PhpStorm.
 * User: natalya
 * Date: 4/26/2019
 * Time: 2:29 AM
 */

class comment
{
    private $id;
    private $comment;
    private $datetime;
    private $user_id;
    private $course_id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return mixed
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * @param mixed $datetime
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getCourseId()
    {
        return $this->course_id;
    }

    /**
     * @param mixed $course_id
     */
    public function setCourseId($course_id)
    {
        $this->course_id = $course_id;
    }


    function __construct($id, $comment, $datetime, $user_id, $course_id) {
        $this->id=$id;
        $this->comment=$comment;
        $this->datetime=$datetime;
        $this->user_id=$user_id;
        $this->course_id=$course_id;
    }
}

