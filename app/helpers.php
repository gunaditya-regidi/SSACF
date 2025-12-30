<?php

if (!function_exists('format_title')) {
    function format_title($filename)
    {
        $title = pathinfo($filename, PATHINFO_FILENAME);
        $title = str_replace('-', ' ', $title);
        return ucwords($title);
    }
}
