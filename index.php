<?php

require 'multidimensional_arrays/sort.php';

$arr = [
    ['key1' => 940, 'key2' => 'blah'],
    ['key1' => 23, 'key2' => 'this'],
    ['key1' => 894, 'key2' => 'that']
];

$students = [
    256 => ['name' => 'Jon', 'grade' => 98.5],
    2 => ['name' => 'Vance', 'grade' => 85.1],
    9 => ['name' => 'Stephen', 'grade' => 94.0],
    364 => ['name' => 'Steve', 'grade' => 85.1],
    68 => ['name' => 'Rob', 'grade' => 74.6]
];

// usort($arr, 'my_sort_2');
// usort($arr, my_sort_1());

// sort by student name
// usort($students, 'sort_students_name');

// sort by student grade
uasort($students, 'sort_students_grade');
debug($students);