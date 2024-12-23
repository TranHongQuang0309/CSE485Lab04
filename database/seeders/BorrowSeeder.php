<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Borrow;
use App\Models\Reader;
use App\Models\Book;
class BorrowSeeder extends Seeder
{
    public function run(): void
{
    $faker = Faker::create('vi_VN'); 
    $readersCount = Reader::count();
    $booksCount = Book::count();

    for ($i = 0; $i < 39; $i++) { 
    
        $borrowDate = $faker->date();
        $returnDate = $faker->dateTimeBetween($borrowDate, '+1 year')->format('Y-m-d');
        Borrow::create([
            'reader_id' => $faker->numberBetween(1, $readersCount), 
            'book_id' => $faker->numberBetween(1, $booksCount), 
            'borrow_date' => $borrowDate,
            'return_date' => $returnDate, 
            'status' => $faker->randomElement([0, 1]), 
        ]);
    }
}

}
