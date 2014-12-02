<?php

require_once '../src/Card.php';
require_once '../src/Player.php';

class PlayerTest extends PHPUnit_Framework_TestCase {

    /**
     * @var Player
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Player(1);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers Player::getId
     */
    public function testGetId() {
        $this->assertEquals(1, $this->object->getId());
    }

}
