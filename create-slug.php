<?php
    function create_slug($text) {
        setlocale(LC_ALL, 'en_US.utf8');
    
        $slug = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $text);
        $slug = trim(strtolower($slug));
        $slug = preg_replace('/[^a-z0-9 -]/', '', $slug);
        $slug = str_replace(' ', '-', $slug);
    
        return $slug;
    }
?>
