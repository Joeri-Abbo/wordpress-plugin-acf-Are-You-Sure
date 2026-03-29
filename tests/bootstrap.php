<?php

// Stub WordPress core functions used by the plugin.
function add_action(): void {}
function add_filter(): void {}
function current_user_can( string $capability ): bool { return false; }
function admin_url( string $path = '' ): string { return 'http://example.com/wp-admin/' . $path; }
function wp_create_nonce( string $action = '' ): string { return 'testnonce'; }
function get_post_modified_time( string $format, bool $gmt = false, $post = null ): int { return 0; }
function __( string $text, string $domain = 'default' ): string { return $text; }

// Stub ACF functions used by the plugin.
function acf_get_field_groups(): array { return []; }
function acf_get_local_json_files(): array { return []; }

require_once dirname( __DIR__ ) . '/acf-are-you-sure.php';
