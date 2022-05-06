<?php

use Illuminate\Database\Seeder;
Use App\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrTrains = [
            [
                'company' => 'Trenitalia',
                'departure_station' =>'Olbia',
                'arrival_station' =>'Sassari',
                'departure_time' =>'2022-05-06 12:00',
                'arrival_time' =>'2022-05-06 13:10'
            ],
            [
                'company' => 'Trenitalia',
                'departure_station' =>'Bergamo',
                'arrival_station' =>'Milano',
                'departure_time' =>'2022-05-06 12:00',
                'arrival_time' =>'2022-05-06 13:00'
            ]
        ];

        foreach($arrTrains as $trainData) {
            $train = new Train();
            // $train->company = $trainData['company'];
            // $train->company = $trainData['departure_station'];
            // $train->company = $trainData['arrival_station'];
            // $train->company = $trainData['departure_time'];
            // $train->company = $trainData['arrival_time'];
            $train->fill($trainData);
            $train->save();
        }
    }
}
