<?php
/**
 * Tests for TokenBramble
 */

use PHPUnit\Framework\TestCase;
use Tokenbramble\Tokenbramble;

class TokenbrambleTest extends TestCase {
    private Tokenbramble $instance;

    protected function setUp(): void {
        $this->instance = new Tokenbramble(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tokenbramble::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
