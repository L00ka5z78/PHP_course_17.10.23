<?php

//constants
// const STATUS_PAID = 'paid';

// echo STATUS_PAID;
// if (true) {
//     // const FOO = 'bar';
//     define('STATUS_PAID', 9);
// }

// function sum(int $x, int $y)
// {
//     var_dump($x, $y);
//     echo '<br/>';
//     return $x + $y;
// }
// $sum = sum(2, 3);

// echo $sum . '<br/>';

// $x = 222.222;
// var_dump(is_int($x));

// $firstName = 'Will';
// $lastName = "$firstName Smith"; // you can execute variables in ""
// $lastName = "{$firstName} Smith";

// echo $lastName;

// $name = $firstName . ' ' . $lastName;

// echo $name . '<br/>';
// echo $name[3];
// echo $name . '<br/>';

// echo $name[-3];
// $programmingLanguages = ['PHP', 'JV', "Python"];

// $programmingLanguages[1] = 'C++';

// echo '<pre>';   // gives fancy table 
// print_r($programmingLanguages);
// echo '</pre>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php $score = 95 ?>

    <?php if ($score >= 90) : ?>
        <strong>A</strong>
    <?php elseif ($score >= 80) : ?>
        <strong>B</strong>

    <?php elseif ($score >= 70) : ?> clean code
        <strong>C</strong>
    <?php elseif ($score >= 60) : ?>
        <strong>D</strong>
    <?php else : ?>
        <strong>e</strong>
    <?php endif ?>
</body>

</html>

<!-- for each loop -->
<?php

// $user = [
//     'name' => "gio",
//     'email' => "gio@email.com",
//     'skills' => ['php', 'graphql', 'react'],,
// ];

// foreach ($user as $key => $value) {
//     echo $key . ': ';

//     if (is_array($value)) {
//         foreach ($value as $skill) {
//             echo $skill . ' - ';
//         }
//     } else {
//         echo $value;
//     }
//     echo '<br/>';
// }






/*date and time  **/
$currentTime = time();
echo $currentTime . '<br/>';

echo date('m/d/Y g:ia') . '<br/>';

echo date('m/d/Y g:ia', mktime(0, 0, 0, 4, 10, null));
echo date('m/d/Y g:ia', strtotime('2022-02-17 07:00:03'));
echo '<pre>';
print_r((date_parse($date)));
echo '</pre>';
