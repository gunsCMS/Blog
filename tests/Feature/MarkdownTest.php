<?php


namespace gunsCMS\Blog\Tests;

use gunsCMS\Blog\MarkdownParser;
use Orchestra\Testbench\TestCase;


class markdownTest extends TestCase
{
    /** @test */
    public function experiment()
    {
        $result = MarkdownParser::parser('Hello _Parsedown_!');
        dd($result);
    }
}