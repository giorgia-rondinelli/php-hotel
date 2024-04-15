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

$park= $_POST['park'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotels</title>
</head>
<body>

<div class="container text-center "><h1> lista Hotel</h1></div>

<div class="container">
  <form action="index.php" method="post">
    <label for="">disponibilità parcheggio</label>
    <select name="park" class="" aria-label="Default select example">

      <option value="true">si</option>
      <option value="false">no</option>

    </select>
    <button type="submit">Cerca</button>
  </form>
</div>



<div class="container d-flex ">
  <div class="row  ">
    <div class="col d-flex flex-wrap ">
     <?php  if (empty($park)): ?> 
      <?php foreach($hotels as $hotel) :?>
      <div class="card m-2 " style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title"><?php echo $hotel['name'] ?></h5>
              <p class="card-text">Descrizione:<?php echo $hotel['description'] ?></p>
            </div>
            <ul class="list-group list-group-flush">
            <?php  if($hotel['parking']=== true):?>
              <li class="list-group-item">Parcheggio: Sì</li>
                <?php else: ?>
                  <li class="list-group-item">Parcheggio: No</li>
              
              <?php endif ?>
              
              <li class="list-group-item">Voto:<?php echo $hotel['vote'] ?></li>
              <li class="list-group-item">Distanza dal centro:<?php echo $hotel['distance_to_center']?> km</li>
            </ul>
        
        
      </div>
      <?php endforeach ?>


      <?php elseif ($park==='true'):?>
        <?php foreach($hotels as $hotel) :?>
        <?php if ($hotel['parking']=== true) : ?>
          <div class="card m-2 " style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title"><?php echo $hotel['name'] ?></h5>
              <p class="card-text">Descrizione:<?php echo $hotel['description'] ?></p>
            </div>
            <ul class="list-group list-group-flush">
            
              <li class="list-group-item">Parcheggio: Sì</li>
                
              
              <li class="list-group-item">Voto:<?php echo $hotel['vote'] ?></li>
              <li class="list-group-item">Distanza dal centro:<?php echo $hotel['distance_to_center']?> km</li>
            </ul>
        
        
           </div>
    
      
      <?php endif ?>
      <?php endforeach ?>


      <?php else:?>
       <?php foreach($hotels as $hotel) :?>
        <?php if ($hotel['parking']=== false) : ?>
          <div class="card m-2 " style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title"><?php echo $hotel['name'] ?></h5>
              <p class="card-text">Descrizione:<?php echo $hotel['description'] ?></p>
            </div>
            <ul class="list-group list-group-flush">
            
              <li class="list-group-item">Parcheggio: No</li>
                
              
              <li class="list-group-item">Voto:<?php echo $hotel['vote'] ?></li>
              <li class="list-group-item">Distanza dal centro:<?php echo $hotel['distance_to_center']?> km</li>
            </ul>
        
        
           </div>
    
      
      <?php endif ?>
      <?php endforeach ?>
        

      


      <?php endif ?>
      
 
      
  


        
      
      
        


    
    </div>
  </div>
</div>
  
 

   
  
  
</body>
</html>