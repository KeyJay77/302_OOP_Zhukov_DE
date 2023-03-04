<?php

namespace App;

class StudentsList
{
    private $students = array();

    public function add(Student $students)
    {
        $this->students[] =  $students;
    }

    public function count()
    {
        return count($this->students);
    }

    public function get($n)
    {
        if ($n < count($this->students)) {
            return $this->students[$n];
        } else {
            echo "elem doesn't exist";
        }
    }

    public function store(string $filename)
    {
        file_put_contents($filename, serialize($this->students));
    }

    public function load(string $filename)
    {
        if (!file_exists($filename)) {
            echo 'No file found';
            return false;
        }
        $this->students = unserialize(file_get_contents($filename));
    }
}
