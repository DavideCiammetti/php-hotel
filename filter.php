
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

    $parking = $_GET['parking'];
    $vote = $_GET['vote'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>filter hotel</title>
</head>
<body>
    <h2>hotel</h2>

    <!-- se il parcheggio ci deve essere e se il voto è maggiore di 0 -->
    <?php if($parking === 'si' && $vote > 0 && $vote <= 5){ ?>

        <?php foreach($hotels as $hotel){?>

            <?php if($hotel['parking'] === true && $hotel['vote'] >= intval($vote)){ ?>
                    <p> <?php  echo $hotel['name']. '<br>'; ?></p>
                <?php } ?>
            <?php } ?>
                 <!-- se il parcheggio non ci deve essere e se il voto è maggiore di 0 -->
    <?php  }else if($parking === 'no' && $vote > 0 && $vote <= 5){ ?>

        <?php foreach($hotels as $hotel){  ?>
            <?php if($hotel['parking'] === false && $hotel['vote'] >= intval($vote)){ ?>
                    <p> <?php  echo $hotel['name']. '<br>'; ?></p>
                <?php } ?>
            <?php } ?>
            <!-- se il parcheggio non ci deve essere e non viene inserito voto -->
            <?php  }else if($parking === 'no' ){ ?>

                <?php foreach($hotels as $hotel){  ?>
                    <?php if($hotel['parking'] === false){ ?>
                            <p> <?php  echo $hotel['name']. '<br>'; ?></p>
                        <?php } ?>
                    <?php } ?>
                    <!-- se il parcheggio ci deve essere e non viene inserito voto -->
            <?php  }else if($parking === 'si' ){ ?>

                <?php foreach($hotels as $hotel){  ?>
                    <?php if($hotel['parking'] === true){ ?>
                            <p> <?php  echo $hotel['name']. '<br>'; ?></p>
                        <?php } ?>
                    <?php } ?>
                      <!-- se non viene inserito parcheggio ma il voto si -->
            <?php  }else if($vote > 0 && $vote <= 5){ ?>

                <?php foreach($hotels as $hotel){  ?>
                    <?php if($hotel['vote'] >= $vote){ ?>
                            <p> <?php  echo $hotel['name']. '<br>'; ?></p>
                        <?php } ?>
                    <?php } ?>
                    <!-- se la ricerca non viene fatta o fatta in modo errato riporta la lista degli hotel -->
            <?php }else{?>

                <!-- tabella -->
                <table class="table">
                    <!-- header -->
                    <thead>
                        <tr>
                            <th>
                                name
                            </th>
                            <th>
                                description
                            </th>
                            <th>
                                parking
                            </th>
                            <th>
                                vote
                            </th>
                            <th>
                            distance to center
                            </th>
                        </tr>
                    </thead>
                    <!-- header -->
                    <tbody>
                        <?php foreach($hotels as $hotel){ ?>
                            <tr>
                                <?php foreach($hotel as $value){ ?>
                                    <td>
                                        <?php echo $value; ?> 
                                    </td>
                                <?php } ?>
                            </tr>
                            <?php } ?>
                    </tbody>
                </table>
            <?php } ?> 
</body>
</html>