<?php

use App\Developer;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('pt_BR');

		Developer::truncate();

		// $timestamp = date('Y-m-d H:m:s');
		// $data = [];

        // foreach (range(1,10) as $i)
        // {
        //     $data[] = [
        //         'name' => $faker->name,
        //         'role' => $faker->randomElement([
        //             'Analista Senior',
        //             'Analista Pleno',
        //             'Analista Junior',
        //             'Dev Senior',
        //             'Dev Pleno',
        //             'Dev Junior'
        //         ]),
        //         'created_at' => $timestamp,
        //         'updated_at' => $timestamp
        //     ];
        // }

		// Developer::insert($data);
    }
}
