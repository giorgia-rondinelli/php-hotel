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
  <title>Hotels</title>
</head>
<body>
  <h1> lista Hotel</h1>
   <?php foreach($hotels as $hotel) :?>
  <div >
   
    <h3><?php echo $hotel['name'] ?></h3>
    <h4>Descrizione:<?php echo $hotel['description'] ?></h4>
    <?php  if($hotel['parking']=== true):?>
      <h4>Parcheggio:Sì </h4>
      <?php else: ?>
        <h4>Parcheggio:No </h4>
    
    <?php endif ?>
    <h4> Voto:<?php echo $hotel['vote'] ?> </h4>
    <h4>Distanza dal centro:<?php echo $hotel['distance_to_center']?> km</h4>


    
  </div>
  <?php endforeach ?>
</body>
</html>