<?php

namespace Ipssi\Evaluation;

class Member
{

    private $name;
    private $bookings;

    public function __construct(string $name, array $bookings=[])
    {

        $this->bookings = $bookings;
    }

    public function orderBookTo(Library $library)
    {
        $library->giveBookTo($this, $this->bookings);
    }

    public function setBooking(Book $title, $copies): self
    {
        $this->bookings = $bookings;

        return $this;
    }

    public function getBookings(array $bookings) 
    {

    }
}