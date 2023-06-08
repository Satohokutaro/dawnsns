<?php

use Illuminate\Database\Seeder;

class CreatePostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'user_id' => '1',
                'posts' => 'Sweden',
                'created_at' => '2023-5-6 09:00:00',
                'updated_at' => '2023-5-6 09:00:00',
            ],
            [
                'user_id' => '2',
                'posts' => 'France',
                'created_at' => '2023-5-6 10:00:00',
                'updated_at' => '2023-5-6 10:00:00',
            ],
            [
                'user_id' => '3',
                'posts' => 'Taiwan',
                'created_at' => '2023-5-6 11:00:00',
                'updated_at' => '2023-5-6 11:00:00',
            ],
            [
                'user_id' => '4',
                'posts' => 'Brazil',
                'created_at' => '2023-5-6 12:00:00',
                'updated_at' => '2023-5-6 12:00:00',
            ],
            [
                'user_id' => '5',
                'posts' => 'Italy',
                'created_at' => '2023-5-6 13:00:00',
                'updated_at' => '2023-5-6 13:00:00',
            ],
            [
                'user_id' => '6',
                'posts' => 'Switzerland',
                'created_at' => '2023-5-6 14:00:00',
                'updated_at' => '2023-5-6 14:00:00',
            ],
        ]);
    }
}
