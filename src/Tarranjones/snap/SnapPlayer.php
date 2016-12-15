<?php

namespace Tarranjones\snap;

class SnapPlayer extends CardGamePlayer
{
    public function takeTurn()
    {
        // turn card
        if($this->isSnap()){
            $this->takePile();
        } else {
//            $this->nextPlayer();
        }
        // check winner
    }

    public function takePile()
    {
        $this->hand = array_merge($this->hand, $this->pile);
    }
}
