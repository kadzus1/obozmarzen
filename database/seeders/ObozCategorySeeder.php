<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ObozCategory;

class ObozCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['name'=>'Nad morzem'],
            ['name'=>'Nad jeziorem'],
        ];
        ObozCategory::insert($data);
    }
}
