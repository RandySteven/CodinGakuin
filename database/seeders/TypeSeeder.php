<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = collect([
            'free', 'premium'
        ]);
        $types->each(function($c){
            Type::create([
                'name' => $c,
                'slug' => \Str::slug($c)
            ]);
        });
    }
}
