<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\PostComment;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Article;


class PostArticleTagTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $articles = factory(Article::class)->times(10)->make();
        Article::insert($articles->toArray());


        $posts = factory(Post::class)->times(10)->make();
         Post::insert($posts->toArray());

        $postcomments = factory(PostComment::class)->times(10)->make();
         PostComment::insert($postcomments->toArray());

        $tags = factory(Tag::class)->times(10)->make();
         Tag::insert($tags->toArray());

        $categories = factory(Category::class)->times(10)->make();
         Category::insert($categories->toArray());

    }
}
