<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class SettingsSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'test@example.com')->first();

        $user->settings()->create([
            'theme' => 'dark',
            'lang'  => 'fr'
        ]);
    }
}
