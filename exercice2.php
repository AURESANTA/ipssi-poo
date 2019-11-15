<?php

require_once('vendor/autoload.php');

use Ipssi\Evaluation\Member;
use Ipssi\Evaluation\Library;
use Ipssi\Evaluation\Book;
use Ipssi\Evaluation\Booking;


    $thomas = new Member('M', []);

    $biblio = new Library([
        $HP = new Book('HP', 10),
        $LOR = new Book('LOR', 10),
    ]);

    $HP->getBook();






