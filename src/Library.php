<?php

namespace Ipssi\Evaluation;

use Ipssi\Evaluation\Exceptions\NotALibrary;

class Library
{
    private $books;

    public function __construct(array $books)
    {
        foreach ($books as $book) {
            if (false === $book instanceof Book) {
                throw new NotABookException($book);
            }
        }

        $this->books = $books;
    }

    public function provideBookTo(Member $member, string $title, int $copies)
    {
        foreach ($this->books as $book) {
            $bookID = $book->isBookable($title, $copies);

            if ($bookID !== null) {
                $member->setRoomNumber($bookID);
                break;
            }
        }
    }

}
