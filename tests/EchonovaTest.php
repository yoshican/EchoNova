<?php
/**
 * Tests for EchoNova
 */

use PHPUnit\Framework\TestCase;
use Echonova\Echonova;

class EchonovaTest extends TestCase {
    private Echonova $instance;

    protected function setUp(): void {
        $this->instance = new Echonova(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Echonova::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
