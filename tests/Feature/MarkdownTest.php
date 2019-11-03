<?php


namespace gunsCMS\Blog\Tests;

use gunsCMS\Blog\MarkdownParser;
use Orchestra\Testbench\TestCase;


class markdownTest extends TestCase
{
    /** @test */
    public function simple_markdown_is_parsed()
    {
        $this->assertEquals("<h1>Hello Parsedown!</h1>", MarkdownParser::parser('# Hello Parsedown!'));
    }
}