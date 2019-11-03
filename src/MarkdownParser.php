<?php


namespace gunsCMS\Blog;


class MarkdownParser
{
    public static function parser($string)
    {
        return \Parsedown::instance()->text($string);
    }

}