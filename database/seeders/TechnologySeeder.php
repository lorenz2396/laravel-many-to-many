<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = [
            'Python',
            'Laravel',
            'Javascript',
            'Php'];

        foreach ($technologies as $tech_value) {
            $new_type = new Technology();
            $new_type->name = $tech_value;
            $new_type->slug = Str::slug($tech_value);
            $new_type->save();
        }
    }
}