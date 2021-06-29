<?php

namespace Database\Seeders;

use App\Models\post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        post::factory()->count(100)->create();
    }
}
