<?php 
require_once './src/Deck.php';
require_once './src/Card.php';
require_once './src/Player.php';

$deck = new Deck();

$deck->shuffleCards();
$deck->dealCards();

echo "Deck is shuffled\n";
$cardOrder = 1;
foreach ($deck->getCards() as $card) {
    echo "Card " . $cardOrder . " has suit: " . strtoupper($card->getSuit()) . " and value: " . strtoupper($card->getValue()) . "\n";
    $cardOrder++;
}
echo "\n";
foreach ($deck->getPlayers() as $player) {
    echo "Player " . $player->getId() . " has " . count($player->getCards()). " cards\n";
}


