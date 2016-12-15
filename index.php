<?php

require __DIR__ . '/vendor/autoload.php';

use TarranJones\snap\SnapPlayer;
/* tests*/

$p1 = new Player('p1');
$p2 = new Player('p2');
$p3 = new Player('p3');

$deck1 = new Deck();
$snapGame1 = new SnapGame($deck1);

$deck2 = new Deck();
$snapGame2 = new SnapGame($deck2);

$G1P1 = $snapGame1->addPlayer($p1);

$G1P2 = $snapGame1->addPlayer($p2);

$snapGame1->addPlayer($p3);
$G1P3 = $snapGame1->getPlayer($p3);

$G1P4 = $snapGame1->addPlayer($p4);
$snapGame1->removePlayer($p4);


$G1P1->shuffle();
$G1P1->deal();

$G1P1->takeTurn();
$G1P1->takeTurn(); //not your turn
$G1P2->takeTurn();
$G1P3->takeTurn();

$G1P1->resign();

$G1P1->takeTurn(); // you are not in this game

$G1P2->takeTurn();
$G1P3->takeTurn();
$G1P2->resign(); // $G1P3 wins echo p1 wins !!


// autopaly
$snapGame2->shuffle();
$snapGame2->deal();

while($snapGame2->hasNoWinnder()){

    $snapGame2->playerTurnCard();
}
