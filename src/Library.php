<?php

namespace Ipssi\Evaluation;

class Library
{
    private $books;

    public function __construct(array $books)
    {
        foreach ($books as $book) {
            if (false === $book instanceof Book) {
                throw new \Exception('Référence non connue !');
            }
        }

        $this->books = $books;
    }

    public function giveBookTo(Member $member, string $title, int $copies)
    {
        foreach ($this->books as $book) {
            $availableBook = $book->isAvailable();

            if ($availableBook !== null) {
                $member->setBooking($availableBook);
                break;
            }
        }
    }

}
