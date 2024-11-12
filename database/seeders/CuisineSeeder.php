<?php

namespace Database\Seeders;

use League\Csv\Reader;
use App\Models\Cuisine;
use Illuminate\Database\Seeder;

class CuisineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fileLocation = storage_path('data/cuisines.csv');
        $csv = Reader::createFromPath($fileLocation, 'r');
        $csv->setHeaderOffset(0);
        $records = $csv->getRecords();

        foreach ($records as $record) {
            Cuisine::updateOrCreate([
                'name' => $record['name']
            ],[
                'name' => $record['name'],
                'display_name' => $record['display_name'],
            ]);
        }
    }
}
