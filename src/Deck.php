<?php
/**
 * @author Black
 */
include_once 'Card.php';
include_once 'Player.php';
class Deck {
    
    private $cards;
    private $suitCreationOrder = ["heart", "club", "spade", "diamond"];
    private $valueCreationOrder = ["ace", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "jack", "queen", "king"];
    private $players;
    const DEAL_CARDS = 7;
    
    public function __construct() {
        $cardId = 0;
        foreach ($this->suitCreationOrder as $suit) {
            foreach($this->valueCreationOrder as $value) {
                $this->cards[] = new Card($cardId, $suit, $value);
                $cardId++;
            }
        }
        for ($i = 0; $i < 4; $i++) {
            $this->players[$i] = new Player($i);
        }
    }
    
    function getCards() {
        return $this->cards;
    }
        
    public function shuffleCards() {
        shuffle($this->cards);
        $previousId = -2;
        $sameSequence = false;
        foreach ($this->cards as $card) {
            if($card->getId() == $previousId + 1) {
                $sameSequence = true;
            }
            $previousId = $card->getId();
        }
        if ($sameSequence) {
            $this->shuffleCards();
        }
        return $this->cards;
    }
    
    public function dealCards() {
        $cardOrder = 0;
        $numberOfPlayers = count($this->getPlayers());
        for ($i = 0; $i < 7 * $numberOfPlayers; $i++) {
            $playerId = $cardOrder % 4;
            $cardOrder++;
            $this->players[$playerId]->addCard($this->cards[$i]);
        }
    }
    
    function getPlayers() {
        return $this->players;
    }
}
