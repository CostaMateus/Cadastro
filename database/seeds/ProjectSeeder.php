<?php

use App\Project;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('pt_BR');

		Project::truncate();

        $timestamp = date('Y-m-d H:m:s');

        $data = [
            [
                'name' => 'Durand',
                'eta_hours' => $faker->randomNumber(3),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'name' => 'Bemol SMS',
                'eta_hours' => $faker->randomNumber(3),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'name' => 'Insight',
                'eta_hours' => $faker->randomNumber(3),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'name' => 'Matheus Define',
                'eta_hours' => $faker->randomNumber(3),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ]
        ];

		Project::insert($data);
    }
}
