<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Follow;
use App\Models\Follower;
use App\Models\Highlight;
use App\Models\Comment;
use App\Models\CommentLike;
use App\Models\Like;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Statistic;
use Illuminate\Database\Seeder;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::factory()->create([
            'name' => 'Event',
            'slug' => 'event'
        ]);

        $category2 = Category::factory()->create([
            'name' => 'Verdacht',
            'slug' => 'verdacht'
        ]);
        $user1 = User::factory()->hasArticles(5, ['category_id' => $category1->id])->create([
            'role' => 3,
            'first_name' => 'Barry',
            'middle_name' => '',
            'prefix' => 'van der',
            'last_name' => 'H',
            'email' => 'barry@example.com',
            'password' => bcrypt('test'),
            'gender' => 'Male',
            'birthdate' => '1990-01-01',
            'street_name' => 'Wijnhaven',
            'house_number_and_extension' => '14',
            'postal_code' => '3011WN',
            'country' => 'Nederland',
            'phone_number' => '0601234567',
            'profile_image' => '\Users\1\profile_image.jpg',
            'background_image' => '\Users\1\background_image.jpg',
            'bio' => 'Mensen vinden mij eerst vaak verdacht overkomen en misschien klopt dat wel'
        ]);
        $user2 = User::factory()->hasStatistic()->create([
            'role' => 1,
            'first_name' => 'Tarik',
            'middle_name' => 'Kwamina',
            'prefix' => '',
            'last_name' => 'Gassie',
            'email' => 'tarik@example.com',
            'password' => bcrypt('test'),
            'gender' => 'Male',
            'birthdate' => '1990-01-01',
            'street_name' => 'Wijnhaven',
            'house_number_and_extension' => '14',
            'postal_code' => '3011WN',
            'country' => 'Nederland',
            'phone_number' => '0601234567',
            'profile_image' => '\Users\2\profile_image.jpg',
            'background_image' => '\Users\2\background_image.jpg',
            'bio' => 'Professionele Tenisser'
        ]);
        $user3 = User::factory()->hasArticles(5, ['category_id' => $category2->id])->create([
            'role' => 2,
            'first_name' => 'Bert',
            'middle_name' => 'Derk',
            'prefix' => 'van der',
            'last_name' => 'Zand',
            'email' => 'bert@example.com',
            'password' => bcrypt('test'),
            'gender' => 'Male',
            'birthdate' => '1990-01-01',
            'street_name' => 'Wijnhaven',
            'house_number_and_extension' => '14',
            'postal_code' => '3011WN',
            'country' => 'Nederland',
            'phone_number' => '0601234567',
            'profile_image' => '\Users\3\profile_image.jpg',
            'background_image' => '\Users\3\background_image.jpg',
            'bio' => 'Ik ben al een tijdje actief voor de tennisclub en daarom schrijf af en toe wel eens leuke news items.'
        ]);
        Follow::factory(5)->create([
            'user_id' => $user2->id
        ]);
        Follower::factory(5)->create([
            'user_id' => $user2->id
        ]);
        OrderDetail::factory(10)->create();
//        $category3 = Category::factory()->create([
//            'name' => 'Covid',
//            'slug' => 'covid'
//        ]);
//        Article::factory(5)->create([
//            'user_id' => $user3->id,
//            'category_id' => $category1->id
//        ]);
//        Article::factory(5)->create([
//            'user_id' => $user1->id,
//            'category_id' => $category2->id
//        ]);
//        Article::factory(5)->create([
//            'user_id' => $user3->id,
//            'category_id' => $category3->id
//        ]);
        Article::factory(5)->forAuthor()->create();

        $highlight1 = Highlight::factory()->create([
            'user_id' => $user2
        ]);

        $highlight2 = Highlight::factory()->create([
            'user_id' => $user2
        ]);

        $highlight3 = Highlight::factory()->create([
            'user_id' => $user2
        ]);

        $highlight4 = Highlight::factory()->create([
            'user_id' => $user2
        ]);

        $highlight5 = Highlight::factory()->create([
            'user_id' => $user2
        ]);

        Like::factory(10)->create([
            'highlight_id' => $highlight1->id
        ]);

        Like::factory(10)->create([
            'highlight_id' => $highlight2->id
        ]);

        Like::factory(10)->create([
            'highlight_id' => $highlight3->id
        ]);

        Like::factory(10)->create([
            'highlight_id' => $highlight4->id
        ]);

        Like::factory(10)->create([
            'highlight_id' => $highlight5->id
        ]);

        $comment1 = Comment::factory()->create([
            'highlight_id' => $highlight1->id
        ]);

        $comment2 = Comment::factory()->create([
            'highlight_id' => $highlight2->id
        ]);

        $comment3 = Comment::factory()->create([
            'highlight_id' => $highlight3->id
        ]);

        $comment4 = Comment::factory()->create([
            'highlight_id' => $highlight4->id
        ]);

        $comment5 = Comment::factory()->create([
            'highlight_id' => $highlight5->id
        ]);

        Comment::factory(4)->create([
            'highlight_id' => $highlight1->id
        ]);

        Comment::factory(4)->create([
            'highlight_id' => $highlight2->id
        ]);

        Comment::factory(4)->create([
            'highlight_id' => $highlight3->id
        ]);

        Comment::factory(4)->create([
            'highlight_id' => $highlight4->id
        ]);

        Comment::factory(4)->create([
            'highlight_id' => $highlight5->id
        ]);

        CommentLike::factory(10)->create([
            'highlight_id' => $highlight1->id,
            'comment_id' => $comment1->id
        ]);
        CommentLike::factory(10)->create([
            'highlight_id' => $highlight2->id,
            'comment_id' => $comment2->id
        ]);
        CommentLike::factory(10)->create([
            'highlight_id' => $highlight3->id,
            'comment_id' => $comment3->id
        ]);
        CommentLike::factory(10)->create([
            'highlight_id' => $highlight4->id,
            'comment_id' => $comment4->id
        ]);
        CommentLike::factory(20)->create([
            'highlight_id' => $highlight5->id,
            'comment_id' => $comment5->id
        ]);
    }
}
