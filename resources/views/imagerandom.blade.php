<?php
//Array con immagini di Uni the cat dal web
$urls = [
    'https://pbs.twimg.com/media/FwaCcsTaMAEn-tv?format=jpg',
    'https://pbs.twimg.com/media/FwZ4MP4agAApbNf?format=jpg',
    'https://pbs.twimg.com/media/FwU8G1iaUAADhha?format=jpg',
    'https://pbs.twimg.com/media/FwUw1LXaEAASkQB?format=jpg',
    'https://pbs.twimg.com/media/FwPpDXCaEAA5ldJ?format=jpg',
    'https://pbs.twimg.com/media/FwKlMuoacAAQzH_?format=jpg',
];
//Indice casuale di urls
$rand = array_rand($urls);


//Directory dove salvare l'immagine temporanea
$dir = 'secret/cat.jpg';
//Estrai un link, salvalo nella directory
copy($urls[$rand], $dir);

//Apri il file per la lettura
$fp = fopen('secret/cat.jpg', 'rb');

//Imposta content-type di tipo png e content lenght della dimensione del file aperto
header("Content-Type: image/png");
header("Content-Length: " . filesize($dir));

//Ritorna dati del file come risposta
fpassthru($fp);
exit;
?>
