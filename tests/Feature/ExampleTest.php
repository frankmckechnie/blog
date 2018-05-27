<?php

namespace Tests\Feature;
use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest() 
    {
        // given - I have two post records in data base
        $first = factory(Post::class)->create();
        $second = factory(Post::class)->create([
            'created_at'=> \Carbon\Carbon::now()->subMonth()
        ]);
        
        // these posts are a month apart
        // when - I fetch these archives
        $posts = Post::archives();
        // then - response should be in the proper format 
        $this->assertEquals([
            [
            "year" => $first->created_at->format('Y'),
            "month" => $first->created_at->format('F'),
            "published" => 1
            ],
            [
            "year" => $second->created_at->format('Y'),
            "month" => $second->created_at->format('F'),
            "published" => 1
            ]
        ], $posts);
    }
}
