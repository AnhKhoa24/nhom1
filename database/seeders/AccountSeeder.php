<?php

namespace Database\Seeders;

use App\Models\Account;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $faker = Factory::create();
        // $account = new Account();
        // $account->user_name = $faker->name();
        // $account->email =$faker->email();
        // $account->password ="123";
        // $account->save();

        Account::factory()->count(100)->create();
    }
}
