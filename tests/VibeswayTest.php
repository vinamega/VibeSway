<?php
/**
 * Tests for VibeSway
 */

use PHPUnit\Framework\TestCase;
use Vibesway\Vibesway;

class VibeswayTest extends TestCase {
    private Vibesway $instance;

    protected function setUp(): void {
        $this->instance = new Vibesway(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Vibesway::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
