<?php

namespace Tarranjones\snap;


class Deck implements \Countable
{
    public $cards;

    function __construct()
    {
        $suits = ["hearts", "spades", "clubs", "diamonds"];
        $values = ["a","2","3","4","5","6","7"."8","9","j","q","k"];

        foreach ($suits as $suit) {

            foreach ($values as $value) {

                $this->cards[] = new Card($suit,$value);
            }
        }
    }
    public function count()
    {
        return count($this->cards);
    }

}