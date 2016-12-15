<?php


namespace Tarranjones\snap;


class Player
{

    public $name = "";

    function __construct($name)
    {
        $this->name = $name;
    }
    public function takeTurn(CardGame $game ){

        if($game->getPlayer() === $this){

            $this->revealCard();

        } else {

            echo 'its not your turn';
        }
    }

}