<?php

if (!function_exists('format_title')) {
    function format_title($filename)
    {
        $title = pathinfo($filename, PATHINFO_FILENAME);
        preg_match('/([a-zA-Z]+)(\d{4})/', $title, $matches);
        if (count($matches) === 3) {
            $month = \Carbon\Carbon::createFromFormat('!m', date('m', strtotime($matches[1])))->format('F');
            return $month . ' ' . $matches[2];
        }
        return $title;
    }
}
