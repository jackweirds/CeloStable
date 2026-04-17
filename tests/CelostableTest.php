<?php
/**
 * Tests for CeloStable
 */

use PHPUnit\Framework\TestCase;
use Celostable\Celostable;

class CelostableTest extends TestCase {
    private Celostable $instance;

    protected function setUp(): void {
        $this->instance = new Celostable(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Celostable::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
