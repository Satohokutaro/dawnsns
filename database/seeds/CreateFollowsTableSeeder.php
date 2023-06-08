<?php

use Illuminate\Database\Seeder;

class CreateFollowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('follows')->insert([
            [
                'follow' => '1',
                'follower' => '4',
                'created_at' => '2023-5-6 09:00:00',
            ],
            [
                'follow' => '2',
                'follower' => '6',
                'created_at' => '2023-5-6 10:00:00',
            ],
            [
                'follow' => '3',
                'follower' => '5',
                'created_at' => '2023-5-6 11:00:00',
            ],
            [
                'follow' => '4',
                'follower' => '1',
                'created_at' => '2023-5-6 12:00:00',
            ],
            [
                'follow' => '5',
                'follower' => '3',
                'created_at' => '2023-5-6 13:00:00',
            ],
            [
                'follow' => '6',
                'follower' => '2',
                'created_at' => '2023-5-6 14:00:00',
            ]
        ]);
    }
}
