<?php

require_once '../src/Deck.php';
require_once '../src/Card.php';
require_once '../src/Player.php';

class DeckTest extends PHPUnit_Framework_TestCase {

    /**
     * @var Deck
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Deck();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }
    
     /**
     * @covers __construct
     */
    public function testCardOrder() {
        $this->assertEquals(new Card(0, 'heart', 'ace'), $this->object->getCards()[0]);
        $this->assertEquals(new Card(11, 'heart', 'queen'), $this->object->getCards()[11]);
        $this->assertEquals(new Card(51, 'diamond', 'king'), $this->object->getCards()[51]);
    }
    
     /**
     * @covers __construct
     */
    public function testPlayersCreation(){
        $this->assertEquals(new Player(3), $this->object->getPlayers()[3]);
    }   
           
     /**
     * @covers Deck::getCards
     */
    public function testNumberOfCards() {
        $this->assertEquals(52, count($this->object->getCards()));
    }
    
     /**
     * @covers Deck::getPlayers
     */
    public function testNumberOfPlayers() {
        $this->assertEquals(4, count($this->object->getPlayers()));
    }
    
    /*
     * @covers Deck::shuffleCards
     */
    public function testShuffle() {
        $this->object->shuffleCards();
        $this->assertNotEquals($this->object->getCards()[0]->getId() + 1, $this->object->getCards()[1]->getId());
        $this->assertNotEquals($this->object->getCards()[5]->getId() + 1, $this->object->getCards()[6]->getId());
        $this->assertNotEquals($this->object->getCards()[9]->getId() + 1, $this->object->getCards()[10]->getId());
        $this->assertNotEquals($this->object->getCards()[15]->getId() + 1, $this->object->getCards()[16]->getId());
        $this->assertNotEquals($this->object->getCards()[32]->getId() + 1, $this->object->getCards()[33]->getId());
        $this->assertNotEquals($this->object->getCards()[45]->getId() + 1, $this->object->getCards()[46]->getId());
        return $this->object;
    }
    
    /**
     * Test number of cards each player has received
     * @depends testShuffle
     * @covers Deck::dealCards
     */
    public function testDealCards($object) {
        $object->dealCards();
        $this->assertEquals(7, count($object->getPlayers()[0]->getCards()));
    }

}
