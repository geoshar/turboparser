<?php

class turboParserMethods {
    public function stripTags($text) {
        $text = strip_tags($text);
        return $text;
    }

    public function removeSpaces($text) {
        $text = str_replace(' ', '', $text);
        return $text;
    }

    public function replaceSpacesToEol($text) {
        $text = str_replace(' ', '\n', $text);
        return $text;
    }

    public function htmlspecialchars($text) {
        $text = htmlspecialchars($text);
        return $text;
    }

    public function removeSymbols($text) {
        $text = str_replace(array('[', '.', ',', '/', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', ']'), '', $text);
        return $text;
    }

    public function toNumber($text) {
        preg_match('/([0-9]+)/', $text, $text);
        return (int)$text[1];
    }
}