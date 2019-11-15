<?php

namespace Ipssi\Evaluation;

class Book
{

    private $title;
    private $copies;

    public function __construct(string $title, int $copies)
    {
        $this->title = $title;
        $this->copies= $copies;

    }

    public function isBookable(string $title, int $copies)
    {
        if ($copies = 0) {
            return null;
        }

        if ($this->copies === $copies && $copies > 0) {
            return $this->title;
        }

        return null;
    }

    public function getBook()
    {

        echo 'Le livre ' .  $this->title . ' possède encore ' . $this->copies . ' exemplaires.';
    }
}
