<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'Informatica',
            'Ingegneria',
            'Lettere',
            'Medicina'
        ];
        foreach ($types as $type_value) {
            $new_type = new Type();
            $new_type->name = $type_value;
            $new_type->slug = Str::slug($type_value);
            $new_type->save();
        }
    }
}