<?php

function debug($value) {
    echo '<pre>';
    print_r($value);
    die('</pre>');
}

function my_sort_1($x, $y) {
    return ($x['key1'] > $y['key1']);
}

function my_sort_2($x, $y) {
    return strcasecmp($x['key2'], $y['key2']);
}

function sort_students_name($x, $y) {
    return strcasecmp($x['name'], $y['name']);
}

function sort_students_grade($x, $y) {
    return ($x['grade'] < $y['grade']);
}