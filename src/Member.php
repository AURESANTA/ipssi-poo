<?php

namespace Ipssi\Evaluation;

class Member
{

    private $wantedBookName;
    private $bookID;

    public function __construct(string $name, array $bookings=[])
    {

        $this->bookings = $bookings;
    }

    public function orderBookTo(Library $library)
    {
        $library->giveBookTo($this, $this->bookings);
    }

    public function setBooking(int $bookID): self
    {
        $this->bookID = $bookID;

        return $this;
    }

    public function getBookings(array $bookings) 
    {

    }
}