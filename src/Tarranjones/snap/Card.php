<?php

namespace Tarranjones\snap;


class Card
{
    public $suit = "";
    public $value = "";

    function __construct($suit, $value)
    {
        $this->setSuit($suit);
        $this->setValue($value);
    }

    /**
     * @return string
     */
    public function getSuit(): string
    {
        return $this->suit;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $suit
     */
    public function setSuit(string $suit)
    {
        $this->suit = $suit;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value)
    {
        $this->value = $value;
    }
}