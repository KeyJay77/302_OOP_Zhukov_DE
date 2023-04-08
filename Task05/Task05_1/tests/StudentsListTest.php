<?php

namespace App\Tests;

use App\StudentsList;
use App\Student;
use PHPUnit\Framework\TestCase;

class StudentsListTest extends TestCase
{
    static $sl;
    public static function setUpBeforeClass(): void
    {
        $student1 = new Student();
        $student1->setLastName('Zhukov')->setName('Dmitrij')->setFaculty('FIIT')->setGroup(302)->setCourse(3);

        $student2 = new Student();
        $student2->setLastName('Nazarov')->setName('Kirill')->setFaculty('FIIT')->setGroup(302)->setCourse(3);

        $student3 = new Student();
        $student3->setLastName('Konyshjev')->setName('Artjom')->setFaculty('FIIT')->setGroup(302)->setCourse(3);

        $student4 = new Student();
        $student4->setLastName('Jakunchjev')->setName('Nikita')->setFaculty('FIIT')->setGroup(302)->setCourse(3);

        self::$sl = new StudentsList(array($student1, $student2, $student3, $student4));
    }
    public function testRewind()
    {
        self::$sl->rewind();
        self::$sl->next();
        self::$sl->next();
        self::$sl->next();
        self::$sl->rewind();
        $this->assertSame(self::$sl->get(0), self::$sl->current());
    }
    public function testNext()
    {
        self::$sl->next();
        $this->assertSame(self::$sl->get(1), self::$sl->current());
        self::$sl->next();
        $this->assertSame(self::$sl->get(2), self::$sl->current());
    }
    public function testValid()
    {
        self::$sl->rewind();
        $this->assertSame(true, self::$sl->valid());
        self::$sl->next();
        $this->assertSame(true, self::$sl->valid());
        self::$sl->next();
        $this->assertSame(true, self::$sl->valid());
        self::$sl->next();
    }
    public function testValue()
    {
        self::$sl->rewind();
        $this->assertSame(self::$sl->get(0), self::$sl->current());
        self::$sl->next();
        $this->assertSame(self::$sl->get(1), self::$sl->current());
        self::$sl->next();
        $this->assertSame(self::$sl->get(2), self::$sl->current());
        self::$sl->next();
        $this->assertSame(self::$sl->get(3), self::$sl->current());
        self::$sl->next();
    }
    public function testKey()
    {
        self::$sl->rewind();
        $this->assertSame(self::$sl->get(0)->getId(), self::$sl->key());
        self::$sl->next();
        $this->assertSame(self::$sl->get(1)->getId(), self::$sl->key());
        self::$sl->next();
        $this->assertSame(self::$sl->get(2)->getId(), self::$sl->key());
        self::$sl->next();
        $this->assertSame(self::$sl->get(3)->getId(), self::$sl->key());
        self::$sl->next();
    }
}
