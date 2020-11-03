<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = collect([
            'Development', 'Soft Skill', 'Business', 'Design'
        ]);
        $categories->each(function($c){
            Category::create([
                'name' => $c,
                'slug' => \Str::slug($c)
            ]);
        });
    }
}
