<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->command->info('User table seeded!');
    }
}

/**
 *
 */
class UsersTableSeeder extends Seeder
{
  function __construct(){

  }
  public function run(){
      Users::create(['email' => 'foo@bar.com']);
  }
}
