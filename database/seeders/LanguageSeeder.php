<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            'English',
            'Español',
            'Português',
            '日本語',
            'Deutsch',
            'Français',
            'Türkçe',
            'Italiano',
            'हिन्दी',
            'Polski',
            'Tamil',
            'मराठी',
            'Telugu',
            'Română'
        ];

        foreach ($languages as $language) {
            DB::table('languages')->insert([
                'name' => $language,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
