<?php
/**
 * @author Black
 */

class Player {
    
    private $cards;
    private $id;
    
    public function __construct($id) {
        $this->id = $id;
    }
    
    function addCard($card) {
        $this->cards[] = $card;
        return $this;
    }
    
    function getCards() {
        return $this->cards;
    }

    function getId() {
        return $this->id;
    }

}
