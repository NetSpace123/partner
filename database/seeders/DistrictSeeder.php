<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districts = [
            ['id' => 1, 'districts_name' => 'Colombo'],
            ['id' => 2, 'districts_name' => 'Gampaha'],
            ['id' => 3, 'districts_name' => 'Kalutara'],
            ['id' => 4, 'districts_name' => 'Kandy'],
            ['id' => 5, 'districts_name' => 'Matale'],
            ['id' => 6, 'districts_name' => 'Nuwara Eliya'],
            ['id' => 7, 'districts_name' => 'Galle'],
            ['id' => 8, 'districts_name' => 'Matara'],
            ['id' => 9, 'districts_name' => 'Jaffna'],
            ['id' => 10, 'districts_name' => 'Hambantota'],
            ['id' => 11, 'districts_name' => 'Kilinochchi'],
            ['id' => 12, 'districts_name' => 'Mannar'],
            ['id' => 13, 'districts_name' => 'Vavuniya'],
            ['id' => 14, 'districts_name' => 'Mullaitivu'],
            ['id' => 15, 'districts_name' => 'Ampara'],
            ['id' => 16, 'districts_name' => 'Trincomalee'],
            ['id' => 17, 'districts_name' => 'Puttalam'],
            ['id' => 18, 'districts_name' => 'Anuradhapura'],
            ['id' => 19, 'districts_name' => 'Polonnaruwa'],
            ['id' => 20, 'districts_name' => 'Badulla'],
            ['id' => 21, 'districts_name' => 'Moneragala'],
            ['id' => 22, 'districts_name' => 'Ratnapura'],
            ['id' => 23, 'districts_name' => 'Kurunegala'],
            ['id' => 24, 'districts_name' => 'Batticaloa'],
            ['id' => 25, 'districts_name' => 'Kegalle']
        ];

        foreach($districts as $district){
            District::insert($district);
        }
    }
}
