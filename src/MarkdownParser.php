<?php


namespace gunsCMS\Blog;


class MarkdownParser
{
    public static function parser($string)
    {
        $parsedown = new \Parsedown();
        return $parsedown->text($string);
    }

}