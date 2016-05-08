<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "admin";
        $user->email = "admin@mail.com";
        $user->password = bcrypt("12341234");
        $user->role = "admin";
        $user->save();
        
        $this->call(DosenTableSeeder::class);
    }
}
