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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>

<body>
    <h1 class="text-center">Tabella Hotels PHP</h1>
    <table class="table table-bordered">
        <?php foreach ($hotels as $key => $hotelsList) : ?>
            <tbody>
                <tr>
                    <?php foreach ($hotelsList as $key => $hotel) : ?>
                        <td>
                            <?php echo $key ?> =
                            <?php
                            if ($key == 'parking') {
                                echo ($hotel == true) ? 'Si' : 'No';
                            } else {
                                echo $hotel;
                            } ?>
                        </td>
                    <?php endforeach; ?>
                </tr>
            </tbody>
        <?php endforeach; ?>
    </table>

</body>

</html>