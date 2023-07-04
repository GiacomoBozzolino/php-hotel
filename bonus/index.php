<?php
    include __DIR__."/partials/array.php";

    if (isset($_GET['parking'])){
        $temp_array =[];
        foreach($hotels as $hotel){
            if($hotel['parking'] == filter_var ($_GET['parking'], FILTER_VALIDATE_BOOLEAN)){
                $temp_array[] = $hotel;
            } else if($_GET['parking'] == '0'){
                $temp_array = $hotels;
            }
        }
        $hotels = $temp_array; 
    };

    if(isset($_GET['vote'])){

        $rating = $_GET['vote'];
        
        $temp_array = [];
        foreach ($hotels as $hotel){
            if($hotel['vote'] == $_GET['vote']){
                $temp_array [] = $hotel;

            }
            elseif($_GET['vote'] == '0'){
                 $temp_array = $hotels;
            }
        } 
        $hotels = $temp_array ;
    }
    



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
                            <form  class="form-label d-flex align-items-center" action="index.php" method="get">
                                <div class="form-group align-items-center d-flex px-2" >
                                    <label  class="px-2" for="parking">Parcheggio</label>
                                    <select class="form-select" name="parking" id="parking">
                                        <option value="0" selected> Scegli</option>
                                        <option value="1">si</option>
                                        <option value="2">no</option>
                                    </select>
                                </div>
                                <div class=" form-group align-items-center d-flex px-2">
                                    <label  class="px-2 ">Punteggio:</label>
                                    <select class="form-select"  name="vote">
                                            <option value="0" selected>Scegli</option>
                                            <option value="1">1 </option>
                                            <option value="2">2 </option>
                                            <option value="3">3 </option>
                                            <option value="4">4 </option>
                                            <option value="5">5 </option>
                                    </select>
                                </div>

                                <div class="form-label pt-2 ">
                                    <button type="submit" class="btn btn-md btn-success">Filtra</button>
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