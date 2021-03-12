<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialPlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $platforms = [
            [
                'name' => 'Twitter'
            ],
            [
                'name' => 'Facebook'
            ],
            [
                'name' => 'Instagram'
            ],
            [
                'name' => 'Reddit'
            ]
        ];

        foreach ($platforms as $platform) {
            DB::table('social_platforms')->insert(
                [
                    'name' => $platform['name'],
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            );
        }
    }
}
