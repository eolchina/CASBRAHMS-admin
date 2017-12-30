<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\PostComment;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Article;
use App\Models\Video;
use App\Models\Painter;
use App\Models\Painting;

class PostArticleTagTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = factory(Article::class)->times(100)->make();
        Article::insert($articles->toArray());


        $posts = factory(Post::class)->times(100)->make();
        Post::insert($posts->toArray());

        $postcomments = factory(PostComment::class)->times(100)->make();
        PostComment::insert($postcomments->toArray());

        $tags = factory(Tag::class)->times(100)->make();
        Tag::insert($tags->toArray());

        $categories = factory(Category::class)->times(100)->make();
        Category::insert($categories->toArray());

        $videos = factory(Video::class)->times(100)->make();
        Video::insert($videos->toArray());

        $painters = factory(Painter::class)->times(100)->make();
        Painter::insert($painters->toArray());

        $paintings = factory(Painting::class)->times(100)->make();
        Painting::insert($paintings->toArray());
    }
}
