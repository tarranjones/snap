<?php

namespace Tarranjones\snap;


class CardGame
{
    protected $deck;
    protected $shuffled = false;
    protected $players = [];
    protected $currentPlayer;

    public function __construct(Deck $deck)
    {
        $this->setDeck($deck);
    }

    /**
     * @return mixed
     */
    public function getCurrentPlayer()
    {
        return $this->currentPlayer;
    }

    /**
     * @param mixed $currentPlayer
     */
    public function setCurrentPlayer(CardGamePlayer $currentPlayer)
    {
        $this->currentPlayer = $currentPlayer;
    }

    /**
     * @return Deck
     */
    public function getDeck(): Deck
    {
        return $this->deck;
    }

    /**
     * @param Deck $deck
     */

    public function setDeck(Deck $deck)
    {
        $this->deck = $deck;
    }


    /**
     * @return array
     */
    public function getPlayers(): array
    {
        return $this->players;
    }

    public function playerTakeTurn(){
        $this->currentPlayer->takeTurn();
    }

    public function addPlayer(Player $player)
    {
        $cardGamePlayer = new CardGamePlayer($this, $player);
        $this->players[] = $cardGamePlayer;
        if(!$this->currentPlayer){
            $this->setCurrentPlayer($cardGamePlayer);
        }
        return $cardGamePlayer;
    }

    public function getPlayer($index){

        return $this->players[ $index ]);
    }

    public function removePlayer($index)
    {
        unset($this->players[ $index ]);
        $this->checkWinner();
    }

    public function checkWinner(){

        if($this->getPlayerCount() === 1){
            return $this->getPlayer(0);
        }
        return false;
    }

    public function getPlayerCount(){
        return count($this->players));
    }

    public function shuffleDeck(){
        shuffle($this->deck);
    }
    public function deal(Player $dealer){

        // start dealing after dealer

        $players = $this->getPlayers();

        reset($players);

        while ($card = array_shift($this->deck)){
           $player =  next($players);
           if(!$player){
               reset($players);
           }
           $player->addCard($card);
        }
    }
    public function resetGame(){
        $this->shuffleDeck();
        $this->deal();
    }

}