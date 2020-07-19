<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Task;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		$faker = \Faker\Factory::create();
		
        User::truncate();

        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
				'password' => $faker->password,
            ]);
        }
    
		Task::truncate();
		
		for ($i = 0; $i < 20; $i++) {
            Task::create([
                'name' => $faker->sentence,
                'description' => $faker->paragraph,
				'user_id' => rand(1,10),
            ]);
        }
    }
}
