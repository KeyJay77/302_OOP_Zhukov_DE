<?php

namespace App;

class Student
{
    private static $id_num = 1;
    private $id;
    private $lastname;
    private $name;
    private $faculty;
    private $group;
    private $course;



    public function __construct()
    {
        $this->id = self::$id_num++;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getLastName()
    {
        return $this->lastname;
    }

    public function setLastName($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    public function getFaculty()
    {
        return $this->faculty;
    }

    public function setFaculty($faculty)
    {
        $this->faculty = $faculty;
        return $this;
    }

    public function getGroup()
    {
        return $this->group;
    }

    public function setGroup($group)
    {
        $this->group = $group;
        return $this;
    }

    public function setCourse($cource)
    {
        $this->course = $cource;
        return $this;
    }

    public function __toString()
    {

        return "\nId: " . $this->id
        . "\nФамилия: " . $this->lastname
        . "\nИмя: " . $this->name
        . "\nФакультет: " . $this->faculty
        . "\nГруппа: " . $this->group;
    }
}
