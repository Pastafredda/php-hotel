<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
       
        // var_dump($hotels);
        $parking = $_GET['parking'];
        var_dump('parking');

    ?>
</head>
<body>
    

    <form action="">
        <label for="parcheggio">Parcheggio</label>
        <br>
        <input type="radio" id="parking_yes" name="parking" value="yes">
        <label for="parking_yes">Yes</label>
        <input type="radio" id="parking_no" name="parking" value="no">
        <label for="parking_no">No</label>
        <br>
        <input type="submit" value="SEARCH">
    </form>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Parking</th>
            <th scope="col">Vote</th>
            <th scope="col">Distance to center</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($hotels as $hotel) {
                
                if ($parking === null || ($parking === 'yes' && $hotel['parking']) || ($parking === 'no' && !$hotel['parking']))  {
                    echo '<tr>';
                        echo '<td>' . $hotel['name'] . '</td>';
                        echo '<td>' . $hotel['description'] . '</td>';
                        echo '<td>' . ($hotel['parking'] ? 'yes' : 'no')  . '</td>';
                        echo '<td>' . $hotel['vote'] . '</td>';
                        echo '<td>' . $hotel['distance_to_center'] . 'km' . '</td>';
                    echo '</tr>';
                } 
            }
            ?>
        </tbody>
    </table>
</body>
</html>
