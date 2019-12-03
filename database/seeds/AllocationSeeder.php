<?php

use App\Allocation;
use Faker\Factory;
use Illuminate\Database\Seeder;

class AllocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('pt_BR');

		Allocation::truncate();

        $timestamp = date('Y-m-d H:m:s');

        // 1 Gabriel
        // 2 Paulo
        // 3 William
        // 4 Fernanda
        // 5 Ricardo
        // 6 Leone
        // 7 Mateus
        // 8 Manoel

        // 1 Durand
        // 2 Bemol SMS
        // 3 Insight
        // 4 Matheus Define

        $data = [
            // dev 1, 4, 6, 7, 8
            // pjt 1 Durand
            [
                'developer_id' => 1,
                'project_id' => 1,
                'week_hours' => $faker->numberBetween(4, 40),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 4,
                'project_id' => 1,
                'week_hours' => $faker->numberBetween(4, 40),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 6,
                'project_id' => 1,
                'week_hours' => $faker->numberBetween(4, 40),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 7,
                'project_id' => 1,
                'week_hours' => $faker->numberBetween(4, 40),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 8,
                'project_id' => 1,
                'week_hours' => $faker->numberBetween(4, 40),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],

            // dev 1, 5, 6, 7
            // pjt 2 Bemol
            [
                'developer_id' => 1,
                'project_id' => 2,
                'week_hours' => $faker->numberBetween(4, 40),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 5,
                'project_id' => 2,
                'week_hours' => $faker->numberBetween(4, 40),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 6,
                'project_id' => 2,
                'week_hours' => $faker->numberBetween(4, 40),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 7,
                'project_id' => 2,
                'week_hours' => $faker->numberBetween(4, 40),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],

            // dev 1, 3, 4, 5, 6
            // pjt 3 Insight
            [
                'developer_id' => 1,
                'project_id' => 3,
                'week_hours' => $faker->numberBetween(4, 40),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 3,
                'project_id' => 3,
                'week_hours' => $faker->numberBetween(4, 40),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 4,
                'project_id' => 3,
                'week_hours' => $faker->numberBetween(4, 40),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 5,
                'project_id' => 3,
                'week_hours' => $faker->numberBetween(4, 40),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 6,
                'project_id' => 3,
                'week_hours' => $faker->numberBetween(4, 40),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],

            // dev 1, 2, 5, 6
            // pjt 4 Matheus Define
            [
                'developer_id' => 1,
                'project_id' => 4,
                'week_hours' => $faker->numberBetween(4, 40),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 2,
                'project_id' => 4,
                'week_hours' => $faker->numberBetween(4, 40),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 5,
                'project_id' => 4,
                'week_hours' => $faker->numberBetween(4, 40),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 6,
                'project_id' => 4,
                'week_hours' => $faker->numberBetween(4, 40),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ]
        ];

		Allocation::insert($data);
    }
}
