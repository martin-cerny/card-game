<?php

require_once '../src/Card.php';

class CardTest extends PHPUnit_Framework_TestCase {

    /**
     * @var Card
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Card(0, "hear", "ace");
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }
    
    /**
     * @covers Card::getId
     */
    public function testGetId() {
        $this->assertEquals(0, $this->object->getId());
    }

    /**
     * @covers Card::getSuit
     */
    public function testGetSuit() {
        $this->assertEquals("hear", $this->object->getSuit());
    }

    /**
     * @covers Card::getValue
     */
    public function testGetValue() {
        $this->assertEquals("ace", $this->object->getValue());
    }

}
