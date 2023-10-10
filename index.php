<?php 


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
    <title>phpHotel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-light">
    

    <h1 class="text-secondary-emphasis text-center mb-5 mt-5">HOTELS</h1>
    <div class="container p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">

        <table class="table">
            <thead>
                
                <tr>
                    <th class="text-danger">Name</th>
                    <th class="text-danger">Description</th>
                    <th class="text-danger">Parking</th>
                    <th class="text-danger">Vote</th>
                    <th class="text-danger">Distance to center</th>
                </tr>
                <?php foreach($hotels as $hotel) : ?>
                    <tr>
                        <th scope="col"><?= $hotel['name']?></th>
                        <td class=""><?= $hotel['description']?></td>
                        <td class=""><?= $hotel['parking']?></td>
                        <td class=""><?= $hotel['vote']?>/5</td>
                        <td class=""><?= $hotel['distance_to_center']?> km</td>
                    </tr>
                <?php endforeach; ?>

            </thead>
        </table>

    </div>

    
    <?php ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>