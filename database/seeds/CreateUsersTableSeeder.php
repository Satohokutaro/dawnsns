<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'Jesse',
                'mail' => 'jesse@mail.com',
                'password' => Hash::make('jesse611'),
                'bio' => '東京都立川市',
                'created_at' => '2023-5-6 09:00:00',
                'updated_at' => '2023-5-6 09:00:00',
            ],
            [
                'username' => 'Taiga',
                'mail' => 'taiga@mail.com',
                'password' => Hash::make('taiga1203'),
                'bio' => '東京都世田谷区',
                'created_at' => '2023-5-6 10:00:00',
                'updated_at' => '2023-5-6 10:00:00',
            ],
            [
                'username' => 'Hokuto',
                'mail' => 'hokuto@mail.com',
                'password' => Hash::make('hokuto618'),
                'bio' => '静岡県島田市',
                'created_at' => '2023-5-6 11:00:00',
                'updated_at' => '2023-5-6 11:00:00',
            ],
            [
                'username' => 'Yugo',
                'mail' => 'yugo@mail.com',
                'password' => Hash::make('yugo38'),
                'bio' => '神奈川県横浜市',
                'created_at' => '2023-5-6 12:34:56',
                'updated_at' => '2023-3-1 12:34:56',
            ],
            [
                'username' => 'Shintaro',
                'mail' => 'shintaro@mail.com',
                'password' => Hash::make('shintaro715'),
                'bio' => '石川県金沢市',
                'created_at' => '2023-5-6 13:00:00',
                'updated_at' => '2023-5-6 13:00:00',
            ],
            [
                'username' => 'Juri',
                'mail' => 'juri@mail.com',
                'password' => Hash::make('juri615'),
                'bio' => '千葉県柏市',
                'created_at' => '2023-5-6 14:00:00',
                'updated_at' => '2023-5-6 14:00:00',
            ],
        ]);
    }
}
