<?php

namespace Tarranjones\snap;

class SnapGame extends CardGame
{
    protected $pile;

    public function takeTurn(){

        $this->currentPlayer->takeTurn();
    }

    public function isSnap(){


    }

    public function checkWinner(){

        if($this->getPlayerCount() === 1 || $this->isSnap()) {
            return $this->getCurrentPlayer();
        }
        return false;
    }

}