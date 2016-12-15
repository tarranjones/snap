<?php
/**
 * Created by PhpStorm.
 * User: tarran
 * Date: 15/12/2016
 * Time: 13:49
 */

namespace Tarranjones\snap;


class CardGamePlayer
{
    public $hand = [];

    public function __construct($game, $player)
    {
        $this->game = $game;
        $this->player = $player;
    }

    public function takeTurn(){

        if($this->game->getCurrentPlayer() === $this->player){

            $this->game->takeTurn($this->player);

        } else {
            echo 'not your turn';
        }
    }

    public function deal(){
        $this->game->deal($this->player);
    }
    public function resign(){
        $this->game->removePlayer($this->player);
    }

    public function shuffle(){
        $this->game->deck->shuffle();
    }
}