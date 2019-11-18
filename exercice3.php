<?php

// Début de prototypage, exercice non-fonctionnel et non terminé !
// N'est pas à prendre en compte pour le projet POO (Index et Classes comprises)

require_once('vendor/autoload.php');

use Ipssi\Evaluation\Member;
use Ipssi\Evaluation\Library;
use Ipssi\Evaluation\Book;
use Ipssi\Evaluation\Booking;


    $thomas = new Member('M', []);

    $biblio = new Library([
        $HP = new Book('HP', 10),
        $LOR = new Book('LOR', 0),
    ]);

    try {
        $HP->getBook() . PHP_EOL;
        $LOR->isAvailable();
    }

catch(\Exception $e) 
{
    echo $e->getMessage();
}







