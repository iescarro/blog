<?php

/**
 * Blog
 *
 * Minimalist personal publishing platform
 *
 * Copyright (c) 2025 Blog. All rights reserved.
 *
 * Blog and its user interface are protected by trademark
 * and other pending or existing intellectual property
 * rights in the Philippines.
 */
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('now')) {
    function now()
    {
        return date('Y-m-d H:i:s');
    }
}

if (!function_exists('str_slug')) {
    function str_slug($string, $separator = '-')
    {
        $slug = mb_strtolower($string, 'UTF-8');
        $slug = preg_replace('/[^a-z0-9]+/u', $separator, $slug);
        return trim($slug, $separator);
    }
}
