<?php
/**
 * Tests for ContractVerifier
 */

use PHPUnit\Framework\TestCase;
use Contractverifier\Contractverifier;

class ContractverifierTest extends TestCase {
    private Contractverifier $instance;

    protected function setUp(): void {
        $this->instance = new Contractverifier(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Contractverifier::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
