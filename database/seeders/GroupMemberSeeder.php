<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('group_members')->insert([
            [
                'user_id' => 1,
                'group_id' => 1,
            ],
            [
                'user_id' => 2,
                'group_id' => 1,
            ],
            [
                'user_id' => 3,
                'group_id' => 2,
            ],
            [
                'user_id' => 4,
                'group_id' => 2,
            ],
            [
                'user_id' => 5,
                'group_id' => 2,
            ],
            [
                'user_id' => 1,
                'group_id' => 3,
            ],
            [
                'user_id' => 2,
                'group_id' => 3,
            ],
            [
                'user_id' => 3,
                'group_id' => 3,
            ],
            [
                'user_id' => 4,
                'group_id' => 3,
            ],
            [
                'user_id' => 5,
                'group_id' => 3,
            ],
        ]);
    }
}
