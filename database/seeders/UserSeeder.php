<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => '宮下　絃詩',
                'email' => 'miyashita_user1@example.com',
                'password' => Hash::make('secret1'),
            ],
            [
                'name' => '宮下　太郎',
                'email' => 'miyashita_user2@example.com',
                'password' => Hash::make('secret2'),
            ],
            [
                'name' => '宮下　花子',
                'email' => 'miyashita_user3@example.com',
                'password' => Hash::make('secret3'),
            ],
            [
                'name' => '宮下　レオ',
                'email' => 'miyashita_user4@example.com',
                'password' => Hash::make('secret4'),
            ],
            [
                'name' => '宮下　シャビエル',
                'email' => 'miyashita_user5@example.com',
                'password' => Hash::make('secret5'),
            ],
        ]);
    }
}
