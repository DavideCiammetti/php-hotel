# PHP Hotel

## richiesta
Prima stampare in pagina i dati.
Dopo aggiungere Bootstrap e mostrate le informazioni con una tabella.

## array di dati 

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

# filter.php

nel secondo file sono andato a gestire il form che ho creato nel primo.
avendo 2 campi di input dove nel primo vado a cercare gli hotel con il parcheggio o meno e nel secondo gli hotel con un determinato voto.

## voto 
per il voto ho considerato che una volta inserito un numero vengano presi tutti gli hotel che hanno un voto maggiore o uguale a quello inserito 

ed ho gestito il tutto tramite la condizione if ed else if ed in fine nell'else ho inserito la tabella che viene mostrata in caso la ricerca venga effettuata in maniera sbagliata o non venga inserito nulla al suo interno 