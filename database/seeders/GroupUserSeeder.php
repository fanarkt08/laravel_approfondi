<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Group;

class GroupUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();

        $family = Group::create(['name' => 'Family']);
        $friends = Group::create(['name' => 'Friends']);

        $family->users()->attach($user->id);
        $friends->users()->attach($user->id);
    }
}
