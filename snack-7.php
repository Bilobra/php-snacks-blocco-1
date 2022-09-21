<?php
$students = [

    [
        'name' => 'Giulia',
        'lastName' => 'Filomena',
        'votes' => [
            2,
            5,
            8,
            6,
            9,
        ],
    ],

    [
        'name' => 'Miky',
        'lastName' => 'Oggià',
        'votes' => [
            4,
            7,
            8,
            9,
            9,
        ],
    ],

    [
        'name' => 'Senza',
        'lastName' => 'Speranza',
        'votes' => [
            2,
            4,
            3,
            6,
            3,
        ],
    ],
];

// for($i=0; $i < count($students); $i++){
//     $student = $students[$i];
//     $media = array_sum($student['votes']) / count($student['votes']);
//     echo $student['name'] . " " . $student['lastName'] . ", media : " . $media . "<br>";
// };

?>

<div>
       
       
            <?php
            for($i=0; $i < count($students); $i++){
                $student = $students[$i];
            ?>
                <h4>
                <?= "{$student['name']} {$student['lastName']} " ?>
                </h4>
                <p>Media Voti :  <?= array_sum($student['votes']) / count($student['votes']) ?> </p>
            <?php
            }
            ?>
        
</div>