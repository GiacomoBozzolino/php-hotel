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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
</head>
    <body>
        <div>
            <ul>
                <?php foreach ($hotels as $key =>$hotel ) { ?>
                <li>
                
                    <div>
                    <?php echo $hotel['name']  ?>  
                    </div>
                    <div>
                    <?php echo $hotel['description']  ?>  
                    </div>
                    <div>
                    <?php echo $hotel['parking']  ?>  
                    </div>
                    <div>
                    <?php echo $hotel['vote']  ?>  
                    </div>
                    <div>
                    <?php echo $hotel['distance_to_center']  ?>  
                    </div>
                    


                    
                    

                </li>
                <?php } ?>
            </ul>
        </div>
        
    </body>
</html>