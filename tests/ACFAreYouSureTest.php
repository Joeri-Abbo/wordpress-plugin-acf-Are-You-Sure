<?php

use PHPUnit\Framework\TestCase;

class ACFAreYouSureTest extends TestCase {

    private ACFAreYouSure $plugin;

    protected function setUp(): void {
        $this->plugin = new ACFAreYouSure();
    }

    public function test_shouldNotice_returns_false_for_null_group(): void {
        $this->assertFalse( $this->plugin->shouldNotice( null ) );
    }

    public function test_shouldNotice_returns_false_when_group_has_no_key(): void {
        $this->assertFalse( $this->plugin->shouldNotice( [] ) );
    }

    public function test_shouldNotice_returns_false_when_group_key_is_empty(): void {
        $this->assertFalse( $this->plugin->shouldNotice( [ 'key' => '' ] ) );
    }

    public function test_shouldNotice_returns_false_when_no_sync_for_group(): void {
        // No sync has been set up, so even a valid key should return false.
        $this->assertFalse( $this->plugin->shouldNotice( [ 'key' => 'group_abc123' ] ) );
    }

    public function test_plugin_instantiates_without_errors(): void {
        $plugin = new ACFAreYouSure();
        $this->assertInstanceOf( ACFAreYouSure::class, $plugin );
    }
}
