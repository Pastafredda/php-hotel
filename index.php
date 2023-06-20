<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    
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
        // <table class="table">;
        //     <thead>
        //         <tr>
        //         <th scope="col">#</th>
        //         <th scope="col">First</th>
        //         <th scope="col">Last</th>
        //         <th scope="col">Handle</th>
        //         </tr>
        //     </thead>
        //     <tbody>
        //         <tr>
        //         <th scope="row">1</th>
        //         <td>Mark</td>
        //         <td>Otto</td>
        //         <td>@mdo</td>
        //         </tr>
        //         <tr>
        //         <th scope="row">2</th>
        //         <td>Jacob</td>
        //         <td>Thornton</td>
        //         <td>@fat</td>
        //         </tr>
        //         <tr>
        //         <th scope="row">3</th>
        //         <td colspan="2">Larry the Bird</td>
        //         <td>@twitter</td>
        //         </tr>
        //     </tbody>
        // </table>;

        $values = array_values($hotels[0]);
        // var_dump($keys);
        // var_dump($value);

        echo "<table>";
            echo "<thead>" ;
                echo "<tr>";
                    echo '<th scope="col"> Name </th>';
                    echo '<th scope="col"> Descrizione </th>';                
                    echo '<th scope="col"> Parcheggio </th>';                
                    echo '<th scope="col"> Voto </th>';       
                    echo '<th scope="col"> Distanza dal centro in km </th>';                
               
                "</tr>";
            "</thead>";
            echo "<tbody>" ;
                echo "<tr>";
                foreach ($values as $value) {
                    echo "<td>" . $value .  "</td>";
                }
                "</tr>";
            "</tbody>";
            
        echo "</table>";
    
    ?>
</body>
</html>
