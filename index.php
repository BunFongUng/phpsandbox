<?php

require 'multidimensional_arrays/sort.php';
require 'oop/ClassProperty.php';
require 'oop/SleptYearPassData.php';
require 'oop/Assignment.php';

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
// uasort($students, 'sort_students_grade');
// debug($students);

// $myClassProperty = new ClassProperty();
// debug($myClassProperty->calculateAmount());

// $objectSleptYearPassData = new SleptYearPassData();

// $resultSleptYear = $objectSleptYearPassData->calculateSleptYears(8, 25);

// debug($resultSleptYear);

// if the form have post
if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['hour'])) {
    $personName = htmlentities($_POST['name']);
    $personAge = htmlentities($_POST['age']);
    $hour = htmlentities($_POST['hour']);
    $objectAssignment = new Assignment($personName, $personAge, $hour);
    $showDisplayMessage = true;
} else {
    $message = "Please, fill your info.";
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PHP OOP</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row" style="margin-top: 100px">
                <div class="col-md-4 col-md-offset-4">
                    <?php if(isset($message)): ?>
                        <div class="alert alert-danger">
                            <strong><?php echo $message?></strong>
                        </div>
                    <?php endif; ?>
                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="form-group">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
                        </div>

                        <div class="form-group">
                            <input type="number" class="form-control" min="0" name="age" id="age" placeholder="Enter your age">
                        </div>

                        <div class="form-group">
                            <input type="number" class="form-control" min="0" name="hour" id="hour" placeholder="Enter your sleep hour per night">
                        </div>

                        <button type="submit" class="btn btn-primary form-control">Calculate</button>
                    </form>
                    <?php if(isset($showDisplayMessage)): ?>
                        <?php $objectAssignment->displayMessage()?>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </body>
</html>