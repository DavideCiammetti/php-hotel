
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
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>
<body>

<form action="filter.php" method="GET" class="mt-3">
    <label for="parking">parking</label>
    <input type="text" name="parking" id="parking">
    <!-- voto -->
    <label for="vote">vote</label>
    <input type="text" name="vote" id="vote">

    <button>submit</button>
</form>

<hr>

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
<!-- tabella -->
</body>
</html>