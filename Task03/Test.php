<?php

use App\Student;
use App\StudentsList;

function runTest()
{
    $list1 = new StudentsList();
    $student1 = new Student();
    $student1 ->setLastName('Zhukov')->setName('Dmitrij')->setFaculty('FIIT')->setGroup(302)->setCourse(3);
    $list1->add($student1);
    echo $student1 . PHP_EOL;

    $student2 = new Student();
    $student2 ->setLastName('Nazarov')->setName('Kirill')->setFaculty('FIIT')->setGroup(302)->setCourse(3);
    $list1 -> add($student2);
    echo $student2 . PHP_EOL;

    $student3 = new Student();
    $student3 ->setLastName('Konyshjev')->setName('Artjom')->setFaculty('FIIT')->setGroup(302)->setCourse(3);
    $list1 -> add($student3);
    echo $student3 . PHP_EOL;


    $student4 = new Student();
    $student4 ->setLastName('Jakunchjev')->setName('Nikita')->setFaculty('FIIT')->setGroup(302)->setCourse(3);
    $list1 -> add($student4);
    echo $student4 . PHP_EOL;

    $list1->store("Students.bin");

    $counts = $list1->count();
    echo 'Student count: ' . $counts . PHP_EOL;

    echo "\nFirstList";
    for ($i = 0; $i < $counts; $i++) {
        echo $list1 ->get($i) . PHP_EOL;
    }

    $list2 = new StudentsList();

    $list2->load("Students.bin");
    $counts2 = $list2 -> count();

    echo "SecondListforLoading_Count: " . $counts2 . PHP_EOL;
    for ($i = 0; $i < $counts2; $i++) {
        echo $list2 ->get($i) . PHP_EOL;
    }
}
