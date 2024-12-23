<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use App\Models\Reader;

class ReaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $faker = \Faker\Factory::create('vi_VN');

       
        for ($i = 0; $i < 39; $i++) {
            Reader::create([
                'name' => $faker->name, //
                'birthday' => $faker->date, 
                'address' => $faker->address, 
                'phone' => $faker->phoneNumber, 
            ]);
        }
    }
}
