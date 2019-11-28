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

        $data = [
            // dev 1, 2, 3, 7, 8, 9
            // pjt 1
            [
                'developer_id' => 1,
                'project_id' => 1,
                'week_hours' => $faker->randomNumber(2),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 2,
                'project_id' => 1,
                'week_hours' => $faker->randomNumber(2),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 3,
                'project_id' => 1,
                'week_hours' => $faker->randomNumber(2),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 7,
                'project_id' => 1,
                'week_hours' => $faker->randomNumber(2),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 8,
                'project_id' => 1,
                'week_hours' => $faker->randomNumber(2),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 9,
                'project_id' => 1,
                'week_hours' => $faker->randomNumber(2),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],

            // dev 1, 3, 5, 7, 9
            // pjt 2
            [
                'developer_id' => 1,
                'project_id' => 2,
                'week_hours' => $faker->randomNumber(2),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 3,
                'project_id' => 2,
                'week_hours' => $faker->randomNumber(2),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 5,
                'project_id' => 2,
                'week_hours' => $faker->randomNumber(2),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 7,
                'project_id' => 2,
                'week_hours' => $faker->randomNumber(2),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 9,
                'project_id' => 2,
                'week_hours' => $faker->randomNumber(2),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],

            // dev 2, 4, 6, 8, 10
            // pjt 3
            [
                'developer_id' => 2,
                'project_id' => 3,
                'week_hours' => $faker->randomNumber(2),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 4,
                'project_id' => 3,
                'week_hours' => $faker->randomNumber(2),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 6,
                'project_id' => 3,
                'week_hours' => $faker->randomNumber(2),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 8,
                'project_id' => 3,
                'week_hours' => $faker->randomNumber(2),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 10,
                'project_id' => 3,
                'week_hours' => $faker->randomNumber(2),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],

            // dev 1, 2, 4, 5, 6, 8, 9, 10
            // pjt 4
            [
                'developer_id' => 1,
                'project_id' => 4,
                'week_hours' => $faker->randomNumber(2),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 2,
                'project_id' => 4,
                'week_hours' => $faker->randomNumber(2),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 4,
                'project_id' => 4,
                'week_hours' => $faker->randomNumber(2),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 5,
                'project_id' => 4,
                'week_hours' => $faker->randomNumber(2),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 6,
                'project_id' => 4,
                'week_hours' => $faker->randomNumber(2),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 8,
                'project_id' => 4,
                'week_hours' => $faker->randomNumber(2),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 9,
                'project_id' => 4,
                'week_hours' => $faker->randomNumber(2),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'developer_id' => 10,
                'project_id' => 4,
                'week_hours' => $faker->randomNumber(2),
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ]
        ];

		Allocation::insert($data);
    }
}
