<?php
//Array multidimensionale ha un indice numerico, ma contiene array associativi
$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
</head>

<body>
    <?php foreach ($hotels as $key => $hotelsList) : ?>
        <h2><?php echo $key; ?></h2>
        <ul>
            <?php foreach ($hotelsList as $key => $hotel) : ?>
                <li>
                    <?php echo $key ?> =
                    <?php
                    if ($key == 'parking') {
                        echo ($hotel == true) ? 'Si' : 'No';
                    } else {
                        echo $hotel;
                    } ?>
                </li>

            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
</body>

</html>