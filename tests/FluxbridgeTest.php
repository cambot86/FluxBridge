<?php
/**
 * Tests for FluxBridge
 */

use PHPUnit\Framework\TestCase;
use Fluxbridge\Fluxbridge;

class FluxbridgeTest extends TestCase {
    private Fluxbridge $instance;

    protected function setUp(): void {
        $this->instance = new Fluxbridge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Fluxbridge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
