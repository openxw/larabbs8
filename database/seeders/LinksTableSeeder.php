<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\link;

class LinksTableSeeder extends Seeder
{
    public function run()
    {
        Link::factory()->times(6)->create();
    }
}
