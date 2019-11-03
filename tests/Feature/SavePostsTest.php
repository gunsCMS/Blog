<?php


namespace gunsCMS\Blog\Tests;

use gunsCMS\Blog\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SavePostsTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function a_post_can_be_create_wiht_the_factory()
    {
        $post = factory(Post::class)->create();
        $this->assertCount(1, Post::all());
    }
}