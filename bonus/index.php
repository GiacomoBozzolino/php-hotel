<?php
    include __DIR__."/partials/array.php";

    if (isset($_GET['parking'])){
        $temp_array =[];
        foreach($hotels as $hotel){
            if($hotel['parking'] == filter_var ($_GET['parking'], FILTER_VALIDATE_BOOLEAN)){
                $temp_array[] = $hotel;
            } 
        }

        $hotels = $temp_array;
       
    };



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Hotel</title>
</head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="pt-3 d-flex justify-content-between">
                            <h1 >
                                Booladvisor
                            </h1>
                            <form action="index.php" method="get">
                                <div class="form-group">
                                    <label for="parking">Parcheggio</label>
                                    <select name="parking" id="parking">
                                        <option value="1">si</option>
                                        <option value="2">no</option>
                                    </select>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-sm btn-sucess">Filtra</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
               
            </div>

        </header>
        <div class="container">
            <div class="row justify-content-center">
                <div class=" col-sm 12 col-mg-6 col-lg-8">
                    <?php foreach ($hotels as $key =>$hotel ) { ?>
                        <table class="table text-center my-3 border border-4 ">
                            <tbody>
                                <tr>
                                    <th>
                                        <div>
                                            <?php echo $hotel['name'];  ?>  
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <?php echo $hotel['description'];  ?>  
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <?php echo  ($hotel['parking'] === true) ? 'Con parcheggio' : 'Senza Parcheggio'; ?>  
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                           Voto: <?php echo $hotel['vote']  ?>  
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <?php echo $hotel['distance_to_center']  ?> km dal centro  
                                        </div> 
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    <?php } ?>
                </div>

            </div>
        </div>
        
    </body>
</html>