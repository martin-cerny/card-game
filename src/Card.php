<?php
/**
 * @author Black
 */

class Card {
   
    private $id;
    private $suit;
    private $value;
    
    /**
     * 
     * @param type $suit
     * @param type $value
     */
    public function __construct($id, $suit, $value) {
        $this->id = $id;
        $this->suit = $suit;
        $this->value = $value;
    }
    
    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }
   
    function getSuit() {
        return $this->suit;
    }

    function getValue() {
        return $this->value;
    }

    function setSuit($suit) {
        $this->suit = $suit;
    }

    function setValue($value) {
        $this->value = $value;
    }
            
}
